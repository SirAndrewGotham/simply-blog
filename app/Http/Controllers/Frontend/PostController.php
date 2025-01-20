<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $posts = DB::table('posts')
//            ->orderBy('id', 'asc', 1)
//            ->value('body');
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(5);

        return view('frontend.'. config('simply-blog.front.theme').'.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.'. config('simply-blog.front.theme').'.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        dd($request);
        if($request->image)
        {
//            TODO: swap $request->title with a real slug
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
//            TODO: use drivers herebelow and some kind of user or blog subfolders
            $request->image->move(public_path('images'), $newImageName);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('frontend.'. config('simply-blog.front.theme').'.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
