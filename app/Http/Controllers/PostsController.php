<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function listPosts(){
        $data = DB::select('select * from posts');
        return view('/posts/all',['data' => $data]);
    }

    public function createPost(){
        return view('/posts/create');
    }

    public function editPost($id){
        $data = DB::select('select * from posts where `id`=:id',[$id]);
        return view('/posts/edit',['posts' => $data]);
    }

    public function updatePost(Request $req){
        $req->validate(
            [
                'title' => 'required |  max:50',
                'body' => 'required'
            ]
        );
        DB::table('posts')
        ->where('id',$req->id)
        ->update(
            [
                'title'=>$req->title,
                'body' => $req->body
            ]
        );
        return redirect('/posts/all');
}

    public function storePost(Request $req){
        $req->validate(
            [
                'title' => 'required |  max:50 | unique:posts',
                'body' => 'required'
            ]
        );
        DB::table('posts')
        ->insert(
            [
                'title'=>$req->title,
                'body' => $req->body
            ]
        );
        return redirect('/posts/all');
    }

    public function deletePost($id){
        DB::table('posts')
        ->where('id',['id'=>$id])
        ->delete();
        return redirect('/posts/all');
    }
}