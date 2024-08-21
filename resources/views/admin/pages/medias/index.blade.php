@extends('admin.frame')
@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col d-flex gap-3">
                        <h2 class="page-title">
                            Media
                        </h2>
                        {{--                        <a href="{{ route('admin.manager-post.create') }}" class="btn btn-sm btn-outline-primary">--}}
                        {{--                            Thêm media--}}
                        {{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <form class="dropzone mb-5" id="dropzone-default" action="" autocomplete="off" novalidate>
                    @csrf
                    <div class="fallback">
                        <input name="file" type="file" accept="image/*"/>
                    </div>
                </form>
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
                        <div id="table-default">
                            @include('admin.pages.medias.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ asset('assets/libs/tabler/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet"/>
@endpush
@push('script')
    <script src="{{ asset('assets/libs/tabler/libs/dropzone/dist/dropzone-min.js') }}" defer></script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            new Dropzone("#dropzone-default",{
                url: '{{ route('admin.media') }}',
                autoProcessQueue: true,
                acceptedFiles: 'image/*,.mp4, application/pdf,application/doc,application/docx, .csv, .docx',
                maxFilesize: 10 * 1024,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: async function (file, response) {
                    const res = await Http.request('{{ route('admin.media.datable') }}?type=in_page', 'GET')
                    const data = await res.text()
                    Dom.select('#table-default').html(data)
                    this.removeFile(file);
                    toastr.success('Upload thành công')
                },
                error: function (file, message) {
                    toastr.error(message.message)
                    Dom.select(file.previewElement).addClass("dz-error").find('.dz-error-message').text(message.message);
                },
            })

            Dom.click('.media-delete', async function (e){
                e.preventDefault()
                const link = Dom.select(this).attr('href')
                const id = Dom.select(this).attr('data-id')
                const res = await Http.request(link, 'GET')
                const data = await res.json()
                const urlParams = new URLSearchParams(window.location.search);

                if(data.success){
                    Dom.select('#file-'+ id).modal('hide')
                    const res = await Http.request('{{ route('admin.media.datable') }}?type=in_page&page=' + urlParams.get('page'), 'GET')
                    const data = await res.text()
                    Dom.select('#table-default').html(data)
                    toastr.success('Xóa thành công')
                }else{
                    toastr.error(data.message)
                }
            })
        })
    </script>
@endpush
