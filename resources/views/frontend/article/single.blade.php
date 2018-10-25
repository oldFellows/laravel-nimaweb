@extends('layouts.frontend')
@section('head')
    <meta name="description" content="{{ $article_item->meta_description }}">
    <meta name="keywords" content="{{ $article_item->keywords }}">
@endsection


@section('content')
    <div class="container w-100 p-0">
        <div class="row mt-3">
            <div class="col-12 w-100">
                <img class="w-100" src="{{ $article_item->image_path }}" alt="{{ $article_item->title }}">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 w-100">
                <div class="w-100 text-right bg-white border border-bottom-0 border-info p-3">
                    {{ $article_item->title }}
                </div>
            </div>
            <div class="col-12 w-100 ">
                <div class="single-page-detail w-100 bg-white text-justify border border-top-0 border-info p-3">
                    {{ $article_item->body }}
                </div>
            </div>
        </div>
    </div>
@endsection
