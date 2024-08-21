<div class="manage-menus">
    <form method="get" action="{{ $currentUrl }}">
        <label for="menu" class="selected-menu">Chọn menu:</label>
        {!! Menu::select('menu', $menulist) !!}

        <span class="submit-btn">
           <input type="submit" class="button-secondary" value="Chọn">
        </span>
        <span class="add-new-menu-action"> or <a
                href="{{ $currentUrl }}?action=edit&menu=0">Tạo menu mới</a>. </span>
    </form>
</div>
