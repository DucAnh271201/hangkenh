<div class="modal fade show" id="mediaModal" tabindex="-1" >
    <input type="hidden" id="media_multiple">
    <input type="hidden" id="media_refer_id">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Quản lý media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-media-manager/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button id="fileConfirm" type="button" class="btn btn-primary">Chọn</button>
            </div>
        </div>
    </div>
</div>
