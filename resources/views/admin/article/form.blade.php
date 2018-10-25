<form method="post" enctype="multipart/form-data" action="">

    {!! csrf_field() !!}

    <div class="form-group mt-3">
        <label for="title">عنوان نوشته</label>
        <input type="text" name="title" class="form-control" id="title"
               value="{{ old('title',isset($article) ? $article->title: '')  }}">
    </div>

    <div class="form-group mt-3">
        <label for="meta_description">متا دیسکریپشن</label>
        <input type="text" name="meta_description" class="form-control" id="meta_description"
               value="{{ old('meta_description',isset($article) ? $article->meta_description: '')  }}">
    </div>

    <div class="form-group mt-3">
        <label for="keywords">کلمات کلیدی</label>
        <input type="text" name="keywords" class="form-control" id="keywords"
               value="{{ old('keywords',isset($article) ? $article->keywords: '')  }}">
    </div>

    <div class="form-group mt-3">
        <label for="body">توضیح</label>
        <textarea class="form-control" name="body" rows="5" id="body">
            {{ old('body',isset($article) ? $article->body: '')  }}
        </textarea>
    </div>
    <div class="form-group mt-3">
        <label for="categories">دسته بندی ها </label>
        <select name="categories[]" class="select2 form-control" id="categories" multiple>
            @foreach($categories as $cat)
                <option value="{{  $cat->category_id }}" {{ isset($article_categories) && in_array($cat->category_id,$article_categories) ? 'selected' : ''  }}>{{ $cat->category_name  }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <label for="tags">برچسب ها </label>
        <select name="tags[]" class="select2 form-control" id="tags" multiple>
            @foreach($tags as $tag)
                <option value="{{  $tag->tag_id }}" {{ isset($article_tags) && in_array($tag->tag_id,$article_tags) ? 'selected' : ''  }}>{{ $tag->tag_name  }}</option>
            @endforeach
        </select>
    </div>
    <div class="custom-file">

        <input type="file" name="image" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="image">انتخاب تصویر شاخص</label>

    </div>

    <div class="form-group mt-3">
        <label for="preview">پیش نمایش تصویر</label>

        <img class="img-thumbnail" id="preview" src="{{ isset($article) ? $article->image_path: '' }}" alt="">
    </div>


    <button type="submit" name="addArticle" class="btn mt-5 btn-success">منتشر کردن نوشته</button>
    <!-- <button type="submit" name="savepost" class="btn  mt-5 mr-4 btn-primary">ذخیره کردن به صورت پیش نویس </button> !-->
</form>

