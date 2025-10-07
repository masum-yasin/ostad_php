<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\User;
use Dom\Comment;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo1(){
// model orm relational table er data fetch korar process 
     $result = User::with('profile')->get();
     return $result;


    }

    public function demo2(){
        // multiple table er data fetch korar process
         //data gula show kore embeded process

        $result = User::with('profile', 'post', 'comment')->first();
        return $result;

    }

    public function demo3(){

        $result  = Post::with('posttag')->get();
        return $result;
    }

    public function demo4(){
        $result = Post::with('user', 'comment', 'posttag')->get();
        return $result;
    }
    
// public function demo5(){

// $result = Comment::with('post', 'user')->get();
// return $result;
    
// }



    
}
