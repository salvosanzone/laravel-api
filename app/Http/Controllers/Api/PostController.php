<?php

namespace App\Http\Controllers\Api;

// importo in model 
use App\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // salvo in una variabile tutti i miei post
        $posts = Post::all();

        // il return adesso non mi restituirà piu una view(blade) ma un json
        // posso passsare la variabile posts con il compact
        return response()->json($posts);
    }
}
