<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function QueryBuilder(){
        $book = DB::table('authors')->where('id', '<=', '5')->get();

        return response()->json($book);
    }
}
