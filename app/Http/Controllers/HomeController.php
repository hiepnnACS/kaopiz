<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');   
    }

    /**
     * Show data Post
     */
    public function listPost()
    {
        $data_posts = DB::table('posts')->get();

        return view('client.pages.index', compact('data_posts'));
    }

    /**
     * Show detail Post
     */
    public function detailPost($id)
    {
        $detail_post = DB::table('posts')->where('id', $id)->first();

        $comment = DB::table('posts')->join('comments', 'posts.id', '=', 'comments.post_id')
                                     ->where('comments.post_id', $id)
                                     ->get('comments.*');
        $user = DB::table('users')->get();                             
        return view('client.pages.detail_post', compact('detail_post', 'comment', 'user'));
    }

    /**
     * Show form for add post
     */
    public function addPost()
    {
        return view('client.pages.add_post');
    }

    /**
     * insert before enter submit
     */
    public function insertPost(PostRequest $request)
    {
        // return 'abc';
        // dd($request);
        $data_post = $request->only('title', 'content', 'status', 'url');
        DB::table('posts')->insert($data_post);

        return redirect()->route('list')->with('success', 'Them thanh cong');
    }

    /**
     * add comment theo id
     */
    public function addComment(Request $request, $idPost)
    {

        $idUser = Auth::user()->id;
        $data_comment = [
            'idUser' => $idUser,
            'content' => $request->content,
            'post_id' => $idPost
        ];
        
        DB::table('comments')->insert($data_comment);

        return redirect()->route('detail.post', ['id' => $idPost]);
    }
}
