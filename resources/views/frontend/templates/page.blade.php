@extends('frontend.master')
@section('title', $page?->seo?->title)
@section('description', $page?->seo?->description)
@section('keywords', $page?->seo?->keywords)
@section('image', $page?->feature_image_link)
@section('content')
    {!! shortcodes($page?->description) !!}
@endsection
