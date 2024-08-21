@extends('frontend.master')

@section('title', 'Trang chủ')
@section('content')
    {{ shortcodes($page->description) }}
@endsection
