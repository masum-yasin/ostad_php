<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test1', [TestController::class, 'test1']);
Route::get('test2', [TestController::class, 'test2']);
Route::get('test3', [TestController::class, 'test3']);
Route::get('test4', [TestController::class, 'test4']);
Route::get('test5', [TestController::class, 'test5']);
Route::get('test6', [TestController::class, 'test6']);
Route::get('test7', [TestController::class, 'test7']);
Route::get('test8', [TestController::class, 'test8']);
Route::get('test9', [TestController::class, 'test9']);
Route::get('test10', [TestController::class, 'test10']);
Route::get('test11', [TestController::class, 'test11']);
Route::get('test12', [TestController::class, 'test12']);
Route::get('test13', [TestController::class, 'test13']);
Route::get('test14', [TestController::class, 'test14']);
Route::get('test15', [TestController::class, 'test15']);
