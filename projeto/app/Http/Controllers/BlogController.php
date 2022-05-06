<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blog = Blog::all();
        return view('home', ['blogs' => $blog]);
    }

    public function create() {
        return view('/create/blog');
    }

    public function store(Request $request) {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;

        // Image
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $requestImage->move(public_path('img/blogs'), $imageName);
            $blog->image = $imageName; }

        if(Str::length($blog->title) < 3) {
            return redirect('/create/blog')->with('msg', 'Titulo muito curto!');
        }

        if(Str::length($blog->description) < 10) {
            return redirect('/create/blog')->with('msg', 'Descrição muito curta!');
        }

        $blog->save();
        return redirect('/create/blog')->with('msg', 'Blog criado com sucesso!');
    }
}