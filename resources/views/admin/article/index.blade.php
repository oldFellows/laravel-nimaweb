@extends('layouts.admin')
@section('content')
    @include('admin.partials.notifications')
    <table class="table table-bordered">
        <tr>
            <th>عنوان مطلب</th>
            <th>متا دیسکریپشن</th>
            <th>کلمات کلیدی</th>
            <th>توضیح</th>
            <th>عملیات</th>
        </tr>
        @if($articles && count($articles) > 0 )
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->meta_description }}</td>
                    <td>{{ $article->keywords }}</td>
                    <td>{{ $article->body }}</td>
                    <td>
                        <a href="{{ route('admin.article.edit' , $article->id) }}">ویرایش</a>
                        <a href="{{ route('admin.article.delete' ,$article->id ) }}">حذف</a>
                    </td>
                </tr>
            @endforeach

        @else
            <tr>
                <td colspan="5">
                    <span>هیچ اطلاعاتی برای نمایش وجود ندارد.</span>
                </td>
            </tr>
        @endif

    </table>



@endsection

