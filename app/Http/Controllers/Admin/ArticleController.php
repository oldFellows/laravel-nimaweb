<?php

namespace App\Http\Controllers\Admin;


use App\Article;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{

    public function index(){
        $articles = Article::all()->sortKeysDesc();
        return view('admin.article.index' , compact('articles'));
    }


    public function addArticle()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.article.create' , compact('categories' , 'tags'));
    }


    public function storeArticle(Request $request){


        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);


        $imagePath = null;
        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$imageName;

        }

        $new_article = Article::create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
            'meta_description' => $request->meta_description,
            'keywords' => $request->keywords,
            'image_path' => $imagePath
        ]);

        if($new_article){
            if($request->has('categories')) {
                $new_article->categories()->sync($request->input('categories'));
            }
            if($request->has('tags')) {
                $new_article->tags()->sync($request->input('tags'));
            }
            return redirect()->route('admin.articles.list');
        }



    }


    public function edit(Request $request , $id)
    {

        $article = Article::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $article_categories = $article->categories()->get()->pluck('category_id')->toArray();
        $article_tags = $article->tags()->get()->pluck('tag_id')->toArray();
        return view('admin.article.edit',compact('article','categories','tags','article_categories' ,'article_tags'));

    }

    public function update(Request $request, $id)
    {



        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $article = Article::find($id);

        $public_path = public_path();
        $imagePath = null;
        if($request->hasFile('image')){

            $result = File::delete($public_path.$article->image_path);


            if ($result){

                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $imageName);
                $imagePath = DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$imageName;


                $updateResult = $article->update([
                    'user_id' => 1,
                    'title' => $request->title,
                    'body' => $request->body,
                    'meta_description' => $request->meta_description,
                    'keywords' => $request->keywords,
                    'image_path' => $imagePath
                ]);
            }

        }else{
            $updateResult = $article->update([
                'user_id' => 1,
                'title' => $request->title,
                'body' => $request->body,
                'meta_description' => $request->meta_description,
                'keywords' => $request->keywords
            ]);
        }






        if($updateResult){

            if($request->has('categories')) {
                $article->categories()->sync($request->input('categories'));
            }
            if($request->has('tags')) {
                $article->tags()->sync($request->input('tags'));
            }
            return redirect()->route('admin.articles.list')->with('success','اطلاعات با موفقیت به روز رسانی شد');

        }
    }


    public function delete($id)
    {
        $article_id = intval($id);
        $article = Article::find($article_id);
        //Plan::destroy([$plan_id]);
        if ($article) {
            $result = $article->delete();
            if ($result){
                $article->categories()->sync([]);
                $article->tags()->sync([]);

                $result = File::delete(public_path().$article->image_path);
                if ($result){

                    return redirect()->route('admin.articles.list')->with('success','پکیج مورد نظر با موفقیت حذف گردید.');
                }
            }
        }
    }


}