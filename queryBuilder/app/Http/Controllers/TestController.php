<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ReflectionFunctionAbstract;

class TestController extends Controller
{
    // get er maddhome akti table er sob data niye asa hoy
    public function test1(){
        $result = DB::table('brands')->get();
        return $result;
    }

    // find er maddhome akti table er nirdisto id niye asa hoy 
    public function test2(){
      $result = DB::table('brands')->find(4);
return $result;

    }

    public function test3(){
//  first er maddhome akti table er protom id er data niye asa hoy
        $result = DB::table('brands')->first();
        return $result;
    }


    public function test4(){
        // akti table er nirdisto column er data niye aser junno ae command
$result  = DB::table('brands')->pluck('brandImg');
return $result;
    }

    public function test5(){
        // akti table er total data count kora hoy
        $result = DB::table('products')->count();
        return $result;
    }

    public function test6(){
        //  max, min, avg, sum kora jye
        $result = DB::table('products')->sum('price');
        return $result;
    }

    public function test7(){
       // nirdisto column er data niye aser junno ae query
        $result = DB::table('products')->select('title', 'short_des', 'remark')->get();
        return $result;


    }

    public function test8(){
        $result = DB::table('products')->select('title')->distinct()->get();
        return $result ;
    }

    public function test9(){
        // inner join er maddhome different table thake nirdisto data niye asa hoy  
        $result = DB::table('products')->join('categories', 'category_id', '=', 'categories.id')->join('brands', 'brand_id', '=', 'brands.id')->get();
        return $result;
    }

    public function test10(){
        // leftjoin er maddhome left side er table  sob column er data gula chole ase onno table er shati match kore
        $result = DB::table('products')->leftJoin('categories', 'products.category_id', '=', 'categories.id')->leftJoin('brands', 'products.brand_id', '=', 'brands.id')->get();
        return $result;
    }

    public function test11(){
        // rightjoin er maddhome left side er table  sob column er data gula chole ase onno table er shati match kore
        $result  = DB::table('products')->rightJoin('categories', 'products.category_id', '=', 'categories.id')->rightJoin('brands', 'products.brand_id', '=', 'brands.id')->get();
        return $result;
    }

public function test12(){
    $result = DB::table('products')->simplePaginate(3);
    return response()->json($result);
}

public function test13(){
// Custom paginate
    $result = DB::table('products')->paginate(
        $perPage = 5,
        $columns = ["*"],
        $pageName = 'items',
    );
    return response()->json($result);
}

public function test14(){
    //  latest means first raw data fetch 
    $result = DB::table('products')->latest()->first();
return response()->json($result);


}

public function test15(){
   $result = DB::table('products')->oldest()->first();
return response()->json($result);

}

}
