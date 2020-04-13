<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $query = Post::all();
        return PostCollection::collection($query);
    }


    public function show($slug)
    {
        $query = Post::where('slug' , $slug)->first();
        return new PostResource($query);
    }


    public function destroy($id)
    {
        return Post::where('id', $id)->delete();
    }

}