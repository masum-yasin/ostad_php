<?php

use App\Http\Controllers\QueryBuilderController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "Hello Bangladesh";
// });

Route::get('/', [QueryBuilderController::class, 'QueryBuilder']);