@extends('admin.frame')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col d-flex gap-3">
                        <h2 class="page-title">
                            Thuộc tính
                        </h2>
                    </div>
                </div>
                <div id="breadcrumb">
                    @include('admin.components.breadcrumb', [
                        'pageParentTitle' => 'Sản phẩm',
                        'pageTitle' => 'Thuộc tính',
                        'pageRoute' => route('admin.manager-attribute')
                    ])
                </div>

            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div id="formAttribute" class="card-body">
                                @include('admin.pages.attributes.create')
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12">

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
        </div>
    </div>
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.default.min.css" rel="stylesheet">
@endpush
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/libs/tabler/libs/list.js/dist/list.min.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/http.js') }}" defer=""></script>
    {{--    <script src="{{ asset('assets/js/pagination.js') }}" defer=""></script>--}}
    <script>
        var queryDefault = {};
        const clearFilter = (option, value) => value === 0;
        const headers = {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }


        function getAttribute() {
            Http.get('{{ route('admin.api.attributes') }}?parent_id={{ request('parent_id') }}', headers).then(function (res) {
                const selects = res.data
                let html = '<option value="">Chọn danh mục cha</option>';
                selects.forEach(function (item) {
                    html += `<option value="${item.id}" ${'{{ request('parent_id') }}' == item.id ? 'selected' : ''}>${item.title}</option>`;
                })
                Dom.selectId('attribute_parent_id').html(html)
            })
        }

        async function fetchData(page = 1) {
            Dom.selectId('table-default').html(`<div class="loading d-flex align-items-center justify-content-center" style="min-height: 100px;">
                <div class="spinner-border"></div>
            </div>`)

            const currentUrl = window.location.href;
            const pathName = window.location.pathname
            const queryParams = Http.getAllUrlParams(currentUrl);
            const query = Object.assign({}, queryParams, queryDefault, {
                page
            })
            const queryString = new URLSearchParams(query).toString()
            let fullUrl = '{{ route('admin.api.attributes.datable') }}?' + queryString;
            history.pushState(query, "", pathName + '?' + queryString)
            const response = await Http.request(fullUrl)
            const datable = await response.text()

            Dom.selectId('table-default').html(datable)

            new List('table-default', {
                sortClass: 'table-sort',
                listClass: 'table-tbody',
                valueNames: ['sort-id', 'sort-title']
            });
        }

        async function onSearch() {
            const myFormData = new FormData(Dom.selectId('formSearch')[0]);
            const formDataObj = {};
            myFormData.forEach((value, key) => (formDataObj[key] = value));
            queryDefault = formDataObj
            await fetchData()
        }

        async function fetchFormCreate() {
            const link = '{{ route('admin.manager-attribute.create') }}?' + Http.getQueryString()
            const res = await Http.request(link, 'GET', headers)
            const data = await res.text()
            Dom.selectId('formAttribute').html(data)
        }

        async function fetchFormEdit(selector) {
            const link = Dom.select(selector).attr('href')
            const res = await Http.request(link, 'GET', headers)
            const data = await res.text()
            Dom.selectId('formAttribute').html(data)
        }

        $(document).ready(async function () {
            getAttribute()
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

            Dom.submit('#saveAttribute', function (e) {
                e.preventDefault()
                const that = this
                let formData = new FormData(this)
                let url = $(this).attr('action')
                Http.post(url, formData, headers).then(async (res) => {
                    if (res.success) {
                        toastr.success(res.message)
                        getAttribute()
                        await fetchData()
                        await fetchFormCreate()
                        Dom.select(that).trigger("reset")
                    } else {
                        toastr.error(res.message)
                    }
                }).catch((err) => {
                    const dataJson = JSON.parse(err.message)
                    const errors = dataJson.errors
                    toastr.error(dataJson.message)
                    Object.entries(errors).forEach(function ([index, item]) {
                        let html = '';
                        item.map(function (message) {
                            html += `<p class="text-danger mt-2 mb-0">${message}</p>`;
                        })
                        $(`#${index}_error`).append(html)
                    })
                    console.error(dataJson.message)
                })
            })

            Dom.click('.cell-action-edit', async function (e) {
                e.preventDefault()
                await fetchFormEdit(this)
            })
            Dom.click('.cell-action-delete', async function (e) {
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
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        const res = await Http.request(link, 'GET', headers)
                        const data = await res.json()
                        if (data.success) {
                            Swal.fire(data.message, "", "success");
                            getAttribute()
                            await fetchData()
                        } else {
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
