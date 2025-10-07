<?php

use App\Http\Controllers\ResourseFullTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dosomething', [TaskController::class, 'doSomething']);
// Route::get('/task1', [TaskController::class, 'task1']);
// Route::get('/task2', [TaskController::class, 'task2']);
// Route::get('/task3', [TaskController::class, 'task3']);
// Route::get('/task3', [TaskController::class, 'task3']);
// Route::get('/task4', [TaskController::class, 'task4']);
// Route::get('/task5', [TaskController::class, 'task5']);
// Route::get('/task6/{task}', [TaskController::class, 'task6']);
// Route::get('/task7', [TaskController::class, 'task7']);
// Route::get('/task8', [TaskController::class, 'task8']);
// Route::get('/task9', [TaskController::class, 'task9']);
// Route::get('/task10', [TaskController::class, 'task10']);
// Route::get('/task11/{task}', [TaskController::class, 'task11']);
 Route::get('/task12', [TaskController::class, 'task12']);

Route::resource('task/', ResourseFullTaskController::class);