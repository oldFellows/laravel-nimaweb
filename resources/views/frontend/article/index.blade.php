@extends('layouts.frontend')
@section('content')
    <div class="row">
         @if($articles && count($articles) > 0)
            @foreach($articles as $article)

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="blog-post">
                        <div class="blog-post-three-section">
                            <div class="blog-post-three-section-img">
                                <img src={{ $article->image_path }}>
                            </div>
                            <div class="">
                                <p>{{ $article->title }}</p>
                            </div>
                            <div class="blog-post-three-section-description">
                                <p>{{ $article->body }}</p>
                            </div>
                            <div class="blog-post-three-section-readmore">
                                <a href="{{ route('frontend.articles.single' , $article->id) }}">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection