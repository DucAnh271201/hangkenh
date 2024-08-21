@extends('admin.frame')
@push('css')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    @include('admin.pages.menus.style')
@endpush
@section('content')
    <?php
    $currentUrl = url()->current();
    ?>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div id="hwpwrap">
                            <div
                                class="custom-wp-admin wp-admin wp-core-ui js menu-max-depth-0 nav-menus-php auto-fold admin-bar">
                                <div id="wpwrap">
                                    <div id="wpcontent">
                                        <div id="wpbody">
                                            <div id="wpbody-content">
                                                <div class="wrap">
                                                    @include('admin.pages.menus.components.manage_menus')
                                                    <div id="nav-menus-frame">
                                                        @include('admin.pages.menus.components.menu_settings_column')
                                                        @include('admin.pages.menus.components.menu_management_liquid')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    @include('admin.pages.menus.script')
@endpush
