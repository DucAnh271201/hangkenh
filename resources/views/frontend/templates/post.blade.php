@extends('frontend.master')
@section('title', $post->seo?->title)
@section('description', $post->seo?->description)
@section('keywords', $post->seo?->keywords)
@section('image', $post?->feature_image_link)
@section('content')
    {!! shortcodes($post?->description) !!}
@endsection
