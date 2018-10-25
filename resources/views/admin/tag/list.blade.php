@extends('layouts.admin')

@section('content')
    @include('admin.partials.notifications')
    <table class="table table-bordered">
        <thead>
        @include('admin.tag.columns')
        </thead>
        @if($tags && count($tags) > 0)

            @foreach($tags as $tag)
                @include('admin.tag.item',$tag)
            @endforeach
            @else
            @include('admin.tag.no-item')
        @endif
    </table>
@endsection