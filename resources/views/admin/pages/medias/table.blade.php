<div class="d-grid "
     style="grid-template-columns: repeat(7, 1fr); gap: 16px">
    @foreach($files as $file)
        <button type="button" class="btn btn-default p-0 m-0 btn-choose-image"
                @if($isInPage)
                    data-bs-toggle="modal"
                data-bs-target="#file-{{ $file->id }}"
                 @else
                    data-file-id="{{ $file->id }}" data-file-image="{{ $file->file_link }}"
            @endif

        >
            <span class="checked"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                       fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path
                        stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10"/></svg></span>
            <img src="{{ $file->file_link }}"
                 class="w-100 object-fit-cover" height="150">
        </button>

        <div class="modal" id="file-{{ $file->id }}" tabindex="-1">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="{{ $file->file_link }}"
                                     class="w-100 object-fit-contain" style="height: 444px">
                            </div>
                            <div class="col-12 col-md-6">
                                <p>Đã tải lên vào lúc: {{ $file->created_at }}</p>
                                <p>Tên tập tin: {{ $file->name }}</p>
                                <p>Loại tập tin: {{ $file->mine }}</p>
                                <p>Kích thước: {{ $file->size_format }}</p>
                                <p>File URL: <a href="{{ $file->file_link }}"
                                                target="_blank">{{ $file->file_link }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Đóng
                        </button>
                        <a href="{{ route('admin.media.delete', $file->id) }}" data-id="{{ $file->id }}"
                           class="media-delete btn btn-danger">Xóa</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="mt-3">
    {!! $files->links('pagination::bootstrap-5') !!}
</div>
