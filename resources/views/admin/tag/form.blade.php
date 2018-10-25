<div class="row">

    <div class="col-xs-12 col-md-6">
        <form action="" method="post">
            {{ csrf_field()  }}
            <div class="form-group">
                <label for="tag_name">عنوان  :</label>
                <input class="form-control" name="tag_name" id="tag_name"
                       value="{{ old('tag_name',isset($tagItem) ? $tagItem->tag_name: '')  }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">ذخیره اطلاعات</button>
            </div>
        </form>
    </div>
</div>