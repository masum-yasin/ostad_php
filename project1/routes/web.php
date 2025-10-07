<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Route;

Route::get('/demo1',[DemoController::class, 'demo1']);
Route::get('/demo2',[DemoController::class, 'demo2']);
Route::get('/demo3',[DemoController::class, 'demo3']);
Route::get('/demo4',[DemoController::class, 'demo4']);
Route::get('/demo5',[DemoController::class, 'demo5']);
Route::get('/demo6',[DemoController::class, 'demo6']);
Route::get('/demo7',[DemoController::class, 'demo7']);
Route::get('/demo8',[DemoController::class, 'demo8']);
Route::get('/demo9',[DemoController::class, 'demo9']);
Route::get('/demo10',[DemoController::class, 'demo10']);
Route::get('/demo11',[DemoController::class, 'demo11']);
Route::get('demo12/{num1}/{num2}',[DemoController::class, 'demo12']);
Route::get('demo13',[DemoController::class, 'demo13']);
Route::get('demo14',[DemoController::class, 'demo14']);
Route::get('demo15',[DemoController::class, 'demo15']);
Route::get('demo16',[DemoController::class, 'demo16']);
Route::get('/',[HomeController::class, 'home']);




// queryBuilder Start

Route::get('query/check1', [QueryController::class, 'index']);
Route::get('query/check2', [QueryController::class, 'index2']);
Route::get('query/check3', [QueryController::class, 'index3']);
Route::get('query/check4', [QueryController::class, 'index4']);
Route::get('query/check5', [QueryController::class, 'index5']);
Route::get('query/check6', [QueryController::class, 'index6']);
Route::get('query/check7', [QueryController::class, 'index7']);
Route::get('query/check8', [QueryController::class, 'index8']);
Route::get('query/check9', [QueryController::class, 'index9']);
Route::get('query/check10', [QueryController::class, 'index10']);
Route::get('query/check11', [QueryController::class, 'index11']);
Route::get('query/check12', [QueryController::class, 'index12']);
Route::get('query/check13', [QueryController::class, 'index13']);
Route::get('query/check14', [QueryController::class, 'index14']);
Route::get('query/check15', [QueryController::class, 'index15']);
Route::get('query/check16', [QueryController::class, 'index16']);
