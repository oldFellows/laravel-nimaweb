<div class="row">
    <form method="post" action="{{ route('frontend.comment.store',['id' => $article_item->id]) }}">
        {!! csrf_field() !!}
        <h3>نظرات :</h3>
        <input name="name" id="comment_sender_name">
        <input name="body" id="comment_body">
        <button type="submit">ارسال</button>
    </form>
</div>