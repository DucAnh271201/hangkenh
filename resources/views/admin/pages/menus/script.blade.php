<script>
    const menus = {
        "oneThemeLocationNoMenus" : "",
        "moveUp" : "Move up",
        "moveDown" : "Mover down",
        "moveToTop" : "Move top",
        "moveUnder" : "Move under of %s",
        "moveOutFrom" : "Out from under  %s",
        "under" : "Under %s",
        "outFrom" : "Out from %s",
        "menuFocus" : "%1$s. Element menu %2$d of %3$d.",
        "subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
    };
    var arraydata = [];
    const addcustommenur= '{{ route("admin.api.menus.add-custom-menu") }}';
    const updateitemr= '{{ route("admin.api.menus.update-item")}}';
    const generatemenucontrolr= '{{ route("admin.api.menus.generate-menu-control") }}';
    const deleteitemmenur= '{{ route("admin.api.menus.delete-item-menu") }}';
    const deletemenugr= '{{ route("admin.api.menus.delete-menug") }}';
    const createnewmenur= '{{ route("admin.api.menus.create-new-menu") }}';
    const csrftoken="{{ csrf_token() }}";
    const menuwr = "{{ url()->current() }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrftoken
        }
    });
</script>
<script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/menu.js')}}"></script>
