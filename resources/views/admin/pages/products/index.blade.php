@extends('admin.frame')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col d-flex gap-3">
                        <h2 class="page-title">
                            Danh sách sản phẩm
                        </h2>
                        <a href="{{ route('admin.manager-product.create') }}" class="btn btn-sm btn-outline-primary">
                            Thêm sản phẩm
                        </a>
                    </div>
                </div>
                <div id="breadcrumb" class="mt-2">
                    @include('admin.components.breadcrumb', [
                        'pageParentTitle' => 'Sản phẩm',
                        'pageTitle' => 'Danh mục sản phẩm',
                        'pageRoute' => route('admin.manager-product')
                    ])
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="search-box d-flex align-items-center justify-content-between mb-3">
                            <div></div>
                            <form id="formSearch" action="" method="get" class="search-form">
                                <div class="form-group d-flex gap-2">
                                    <input id="searchInput" type="text" class="form-control" name="s"
                                           placeholder="Nhập từ khóa tìm kiếm" value="{{ request('s') }}">
                                    <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                        <div id="table-default" class="table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/libs/tabler/libs/list.js/dist/list.min.js') }}" defer=""></script>
    <script>
        var queryDefault = {};
        const headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

        async function fetchData(page = 1) {
            Dom.selectId('table-default').html(`<div class="loading d-flex align-items-center justify-content-center" style="min-height: 100px;">
                <div class="spinner-border"></div>
            </div>`)

            const currentUrl = window.location.href;
            const pathName = window.location.pathname
            const queryParams = Http.getAllUrlParams(currentUrl);
            const query = Object.assign({}, queryParams, queryDefault, {
                type: '{{ $type }}',
                page
            })
            const queryString = new URLSearchParams(query).toString()
            let fullUrl = '{{ route('admin.api.posts.datable') }}?' + queryString;
            history.pushState(query, "", pathName + '?' + queryString)
            const response = await Http.request(fullUrl)
            const datable = await response.text()

            Dom.selectId('table-default').html(datable)

            const list = new List('table-default', {
                sortClass: 'table-sort',
                listClass: 'table-tbody',
                valueNames: ['sort-title'
                ]
            });
        }

        async function onSearch() {
            const myFormData = new FormData(Dom.selectId('formSearch')[0]);
            const formDataObj = {};
            myFormData.forEach((value, key) => (formDataObj[key] = value));
            queryDefault = formDataObj
            await fetchData()
        }

        $(document).ready(async function () {

            await fetchData()

            Dom.selectId('searchInput').keyup(async function (event) {
                event.preventDefault()

                if (event.keyCode === 13) {
                    await onSearch()
                }
            });

            Dom.submit('#formSearch', async function (e) {
                e.preventDefault()
                await onSearch()
            })

            Dom.click('.cell-action-delete', async function (e){
                e.preventDefault()
                const link = Dom.select(this).attr('href')

                Swal.fire({
                    title: "Bạn muốn xóa bản ghi này?",
                    text: "Lưu ý, các danh mục con cũng sẽ bị xóa",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Xóa",
                    cancelButtonText: "Đóng"
                }).then( async (result) => {
                    if (result.isConfirmed) {
                        const res = await Http.request(link, 'GET', headers)
                        const data = await res.json()
                        if(data.success){
                            Swal.fire(data.message, "", "success");
                            await fetchData()
                        }else {
                            Swal.fire(data.message, "", "error");
                        }
                    }

                });

            })


            $(document).on('click', '.pagination a.page-link', async function (e) {
                e.preventDefault();
                const rel = $(this).attr('rel');
                let page = $(this).text()
                console.log(rel)
                if (rel === 'next') {
                    page = parseInt(Dom.select('.pagination .page-item.active .page-link').text())
                    page += 1;
                }
                if (rel === 'prev') {
                    page = parseInt(Dom.select('.pagination .page-item.active .page-link').text())
                    page -= 1;
                }

                await fetchData(page)
            })

        })
    </script>
@endpush
