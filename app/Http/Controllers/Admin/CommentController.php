<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/28/2018
 * Time: 8:09 AM
 */

namespace App\Http\Controllers\Admin;


use App\Article;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;


class CommentController extends Controller
{

    public function index(){
        $new_comments = Comment::all()->where('status' , Comment::NEW);
        $accepted_comments = Comment::all()->where('status' , Comment::ACCEPTED);
        $rejected_comments = Comment::all()->where('status' , Comment::REJECTED);
        $admin_comments = Comment::all()->where('status' , Comment::ADMIN_ANSWERS);
        return view('admin.comment.list' , compact('new_comments' ,'accepted_comments','rejected_comments','admin_comments'));
    }


    public function store(Request $request, $id)
    {
        $request->validate([
           'name' => 'required',
            'body' => 'required'
        ]);

        $comment = new Comment;
        $comment->body = $request->get('body');
        $comment->sender = $request->get('name');

        $article = Article::find($id);
        $article->comments()->save($comment);

        //bayad ye payam befrestim ke payamet baraye baresi reft samte admin :)
        return back();
    }


    public function verify($id,$flag){
        $commentItem = Comment::find($id);
        $num = 1;

        if($flag == 1){//accept
            $num = 2;
        }else{//reject
            $num = 3;
        }
        $commentItem->update([
            'status' => $num
        ]);

        $commentItem->touch(); // this code updates updated_at

        return back();

    }

    public function singleshow($id){
        $comment = Comment::find($id);
        return view('admin.comment.answer',compact('comment'));
    }

    public function answer(Request $request, $id){
        $comment = new Comment;
        $comment->body = $request->get('body');
        $comment->sender = 'admin';
        $comment->status = 4;//for admin answers
        $comment->parent_id = $id;

        $id2 = Comment::find($id)->commentable()->first()->id;//get Article id related to this comment
        $article = Article::find($id2);
        $article->comments()->save($comment);

        return Redirect::route('admin.comments.list');
    }


    public function edit($id){
        $comment = Comment::find($id);
        return view('admin.comment.edit',compact('comment'));
    }

    public function update(Request $request,$id)
    {
        $comment = Comment::find($id);
        $comment->update([
            'body' => $request->get('body'),
        ]);

        if($comment){
            $comment->touch(); // this code updates updated_at
            return Redirect::route('admin.comments.list');
        }

    }

    public function remove($id){
        $removeResult = Comment::destroy([$id]);

        if($removeResult){
            return Redirect::route('admin.comments.list');
        }
    }
}
