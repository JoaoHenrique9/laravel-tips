<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function showForm()
    {
    	return view ('form');
    }

    public function debug(Request $request)
    {
    	var_dump($request->all());

    	$post = new Post();
    	/*$post->title = $request->title;
    	$post->subtitle = $request->subtitle;
    	$post->content = $request->content;
    	$post->save();*/
    	$post->create($request->except(['_token']));
    }
}
