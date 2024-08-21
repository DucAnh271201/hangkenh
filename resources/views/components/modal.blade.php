<div class="modal modal-blur fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! $body !!}
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        {{ $buttonCancelText }}
                    </a>
                    <button type="{{ $buttonType }}" class="btn btn-primary ms-auto">
                        {!! $buttonConfirmIcon !!}
                        {{ $buttonConfirmLabel }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
