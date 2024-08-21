<div class="cell-action">
    @if($routeEdit)
        <a href="{{ route($routeEdit, $id) }}" class="cell-action-edit text-primary">
            <span>Chỉnh sửa</span>
        </a>
    @endif

    @if($routeDelete)
        <a href="{{ route($routeDelete, $id) }}" class="cell-action-delete text-danger">
            <span>Thùng rác</span>
        </a>
    @endif
    @if($routeView)
        <a href="{{ $routeView }}" target="_blank" class="text-primary">
            <span>Xem</span>
        </a>
    @endif
        @if($routeList)
            <a href="{{ $routeList }}" class="text-primary">
                <span>{{ $routeListLabel }}</span>
            </a>
        @endif
</div>
