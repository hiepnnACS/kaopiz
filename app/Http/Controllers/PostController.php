<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
    *   Show view all post
    */
    public function listPost()
    {
    	$data_posts = DB::table('posts')->get();
    	
    	return view('admin.pages.list-post', compact('data_posts'));
    }

    /**
    *   Show form edit post
    */
    public function editPost(Request $request, $id)
    {
    	$data_post = DB::table('posts')->where('id', $id)->first();

    	return view('admin.pages.edit-post', compact('data_post'));
    }

    /**
    * show form insert
    */  
    public function createPost(PostRequest $request)
    {   
        return view('admin.pages.insert_post');
    }

    /**
    *
    */
    public function savePost(PostRequest $request)
    {   
        $data_post = $request->only('title', 'content', 'status', 'url');
        dd($data_post);

        DB::table('posts')->insert($data_post);

        return redirect()->route('list.post')->with('success', 'Them thanh cong');
    }

    /**
    *   Save post 
    */
    public function updatePost(Request $request, $id)
    {
    	$data_post = $request->only('title', 'content', 'status');
        DB::table('posts')->where('id', $id)
                          ->update($data_post);

        return redirect()->route('list.post')->with('success', 'Sửa thành công');
    }

    /**
    *   Delete 
    */
    public function deletePost($id)
    {
        DB::table('comments')->where('post_id', $id)
                             ->delete();
        DB::table('posts')->where('id', $id)
                          ->delete();

        return back()->with('success', 'Xóa thành công');
    }
}
