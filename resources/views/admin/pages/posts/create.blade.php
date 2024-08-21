@extends('admin.frame')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.default.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Thêm bài viết
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <form id="formPost" action="{{ route('admin.api.posts.store') }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="{{ $type }}">
                    @include("admin.pages.$view.form")
                </form>
            </div>
        </div>
    </div>
@endsection
@include("admin.pages.$view.script")
