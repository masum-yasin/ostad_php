<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function demo1(){
    return "Response Type String";
   }
   public function demo2(){
    return "100";
   }
   public function demo3(){
    return null;
   }
   public function demo4(){
    return true;
   }
   public function demo5(){
    return array('a', 'b','c','d','e');
   }
   public function demo6(){
    return array(['a'=>'apple','b'=>"banana",'o'=>"orange", 'j'=>"jackfurit"]);
   }
   public function demo7(){
    $array = ["a" => "apple", "b"=> "banana","G"=>"guava"];
    return response()->json([
        "status" => 200,
        "message" => "insert Product Successfully",
        'array' => $array,
    ]);
   }

   public function demo8(){
    $data = [
        "name"=> "masum", 
        "age"=> 25, 
        "email"=> "masum@gmail.com",
        "phone"=> "01945643876"];
   return response()->json([

    "message" => "Registration Successfully",
    'data'=> $data,
    "status" =>201
    
   ]);
   }
   public function demo9(){
    $path = "img.jpg";
    return response()->file($path);
   }
   public function demo10(){
    $path = "img.jpg";
    return response()->download($path);
   }

   public function demo11()
{
    return response("Hello Header")
        ->header("my-header", "1234567");
}

   public function demo12(Request $request)
{
    $a = $request->num1;
    $b = $request->num2;
   
    $sum = $a + $b;
   
    return $sum;
}

public function demo13(Request $request){
$wholeBody = $request->input();

return $wholeBody;

}

public function demo14(Request $request){
    $a = $request->header(key:"my_header");
    return $a;
}
public function demo15(Request $request){
   return $request->ip();
}
public function demo16(Request $request){
   $storeCookie = $request->cookie();
   return $storeCookie;
}

}
