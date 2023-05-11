<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        $posts = Post::select('title','excerpt','content','image')->get();
        return view('admin.postingan', compact('posts'));
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_review()
    {
        return view('admin.review');
    }

    public function show_teams()
    {
        return view('admin.teams');
    }

    public function show_settings()
    {
        return view('admin.settings');
    }
    public function show_invoice()
    {
        return view('admin.invoice');
    }
    public function logout()
    {
        return view('admin.logout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_post()
    {
        return view('admin.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_post(Request $request)
    {
        $validated = $request->validate([
            'title' =>"required|min:5|max:100",
            'excerpt' =>"required|min:20|max:150",
            'content' =>"required|min:50",
            'image' =>"image|mimes:jpeg,jpg,png|max:4096"
        ]);

        $new_post = new Post;
        $new_post ->title = $request->title;
        $new_post ->excerpt = $request->excerpt;
        $new_post ->content = $request->content;
        $new_post ->author_id = $request->author_id;

        if($request->hasFile('image')){
            //define image location in local path
            $location = public_path('gambar/');

            //ambil file image dan simpan ke local server
            $request->file('image')->move($location,$request->file('image')->getClientOriginalName());

            //simpan nama file di database
            $new_post->image = $request->file('image')->getClientOriginalName();
        }
        

        $new_post->save();

        return redirect('admin/postingan')->with('status','Postingan Berhasil!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
