@extends('layouts.admin')
@section('content')


    @include('admin.article.form')

    <div>

        @if(count($errors))
            <ul style="color: red">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection