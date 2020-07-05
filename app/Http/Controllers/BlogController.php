<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blogs.list',compact('blogs'));
    }
    public function create(){
        return view('blogs.create');
    }
    public function store(Request $request){
      $blog = new Blog();
      $blog->title=$request->title;
      $blog->content=$request->contentt;
      $blog->author=$request->author;
      if($request->hasFile('image')){
          $path=$request->image->store('images','public');
          $blog->image=$path;
      }
      $blog->save();
      return redirect()->route('blogs.index');
    }
}
