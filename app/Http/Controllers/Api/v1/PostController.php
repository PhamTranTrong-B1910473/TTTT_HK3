<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::with('category')->orderBy('id','DESC')->get();
        return view('layouts.baigiang.index')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPost::all();
        return view('layouts.baigiang.create')->with(compact('category'));
        // return view('layouts.baigiang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'noidung' => 'required',
            'category_id' => 'required', 
        ]);

        $post = new Post();
        $post->title = $data['title'];
        $post->noidung = $data['noidung'];
        $post->category_id = $data['category_id'];
        
        $post->save();
       
        return redirect()->route('post.index')->with('success','Thêm bài giảng thành công!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = Post::find($post);
        $category = CategoryPost::all();
        return view('layouts.baigiang.show')->with(compact('category','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'noidung' => 'required',
            'category_id' => 'required', 
        ]);

        $post = Post::find($post);
        $post->title = $data['title'];
        $post->noidung = $data['noidung'];
        $post->category_id = $data['category_id'];
        
        $post->save();
       
        return redirect()->route('post.index')->with('success','Cập nhật bài giảng thành công!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->back()->with('success','Xóa bài giảng thành công!!');
    }
}
