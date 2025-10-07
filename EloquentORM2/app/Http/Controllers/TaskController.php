<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class TaskController extends Controller
{
  public function doSomething(){

    //    Task::create([
    //     'title' => 'This is Sample title',
    //     'description' => 'This is Sample Description',
    //     'due_date' => '2025-06-12'
    //    ]);
    //    return 'Data Store Successfully';

    Task::create([
        'title' => fake()->sentence(20),
        'description' => fake()->sentence(30),
        'due_date' => now()->addDays(rand(1,7)),
    ]);
    return 'Data Store Successfully';
    }
    

    public function task1(){
        $result = Task::limit(2)->get();
        return response()->json($result);
    }
    public function task2(){
       $result = Task::where('status', 'pending')->get();
       return $result;
    }
    public function task3(){
       $result = Task::whereStatus('pending')->get();
       return $result;
    }

    public function task4(){
        $result = Task::where('status', 'completed')->get();
        return $result;
    }


    public function task5(){
        $result = Task::whereStatus('completed')->get();
        return $result;
    }
    public function task6($id){
      $result = Task::find($id);
      return $result; 
    }

    public function task7(){
        $result = Task::where('status', 'pending')->count();
        return $result;
    }

    public function task8(){
        $result = Task::orderBy('id', 'desc')->get();
        return $result;
    }

    public function task9(){
        Task::find(1)->update(['status' => 'completed']);
        return  'Data Update Successfully';
    }

   public function task10()
{
    Task::insert([
        [
            'title' => fake()->sentence(20),
            'description' => fake()->sentence(30),
            'due_date' => now()->addDays(rand(1, 7)),
        ],
        [
            'title' => fake()->sentence(20),
            'description' => fake()->sentence(30),
            'due_date' => now()->addDays(rand(1, 7)),
        ]
    ]);

    return 'Multiple Data Inserted Successfully';
}

public function task11(Request $request, Task $task){
    // laravel Route model Budding

    return $task;
}

public function task12(Request $request){
    $status = $request->get('status');

    if(!$status){
        $task = Task::all();
    }
    elseif( $status=='completed'){
        $task = Task::where('status', 'completed')->get();
    }
    else{
        $task = Task::where('status', 'pending')->get();
    }
    return $task;
}

}
