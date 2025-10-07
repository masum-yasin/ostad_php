<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function index(){

        $books = DB::table('authors')->limit(2)->offset(2)->get();

        // return $books;
        return response()->json($books);
    }

    public function index2(){

        $books = DB::table('authors')->get()->count();
        return $books;
    }


    public function index3(){

      $books = DB::table('books')->where('id' , "<=",5)->get();
      return $books;
    }

    public function index4(){

      $books = DB::table('authors')->where('id', "<=", 5)->where('price', "<=", 210)->get();
      return $books;
    }

    public function index5(){
        $books = DB::table('books')->where('id', '<=', 2)->where('price', 210)->get();
        return $books;

    }


    // index6, index7, index8 same condition 


    public function index6(){
        $books = DB::table('books')->whereBetween('id', [3, 7])->get();

        return $books;
    }                                               
    public function index7(){
        $books = DB::table('books')->whereIn('id', [3, 7])->get();
        return $books;
    }
    public function index8(){
      $books = DB::table('books')->where('id', 3)->orWhere('id', 7)->get();
      return $books;
    }


    public function index9(){
      $max = DB::table('books')->max('price');
      $bookMaxPrice = DB::table('books')->wherePrice($max)->get();
      return $bookMaxPrice;
    }

    public function index10(){
   
      $books = DB::table('books')->orderBy('price', 'desc')->get();
      return $books;
    }

    public function index11(){
   
    //   $books = DB::table('books')->orderBy('price', 'asc')->get();
    $books = DB::table('books')->orderBy('price', 'desc')->first();
      return $books;
    }


    public function index12(){
   
   $books = DB::table('books')
    ->join('authors', 'books.author_id', '=', 'authors.id')
    ->select('books.title as Book_title', 'authors.name as author_name')->where('author_id',1);
    $sql = $books->toSql();

   return $sql;
    }

    public function index13(){

        $books = DB::table('books')->join('authors', 'books.author_id', '=', 'authors.id')->select('books.title as Book_Title', 'authors.name as Auther_Name', 'books.author_id', 'books.id')->whereNotIn('author_id', [2])->get();
        return $books;
    }

    public function index14(){
$max = DB::table('books')->max('price');

$books = DB::table('books')
    ->join('authors', 'books.author_id', '=', 'authors.id')
    ->select('books.title', 'authors.name', 'books.author_id', 'authors.id', 'books.price')
    ->where(function($query) use ($max) {
        $query->where('books.price', $max)
              ->orWhereBetween('books.price', [270,320]);
    })
    ->toSql();

return $books;

    }

    public function index15(){
        $books = DB::table('authors')->leftJoin('books', 'books.author_id', '=', 'authors.id')->select('books.title', 'books.id', 'authors.name', 'authors.id')->get();
        return $books;
    }
    public function index16(){
        $books = DB::table('books')->rightJoin('authors', 'books.author_id', '=', 'authors.id')->select('books.title', 'books.id', 'authors.name', 'authors.id')->get();
        return $books;
    }

}
