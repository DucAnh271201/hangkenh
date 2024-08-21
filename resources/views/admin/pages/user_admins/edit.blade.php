@extends('admin.frame')
@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Cập quản trị viên
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <form id="formPost" action="{{ route('admin.api.user-admins.update') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    @include("admin.pages.user_admins.form")
                </form>
            </div>
        </div>
    </div>
@endsection
@include("admin.pages.user_admins.script")
