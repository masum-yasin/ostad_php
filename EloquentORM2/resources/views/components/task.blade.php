<div class="mt-10">
  <p>{{$task->title}}</p>
  <p>{{$task->description}}</p>
  <p>{{Carbon\Carbon::parse($task->due_date)->diffForHumans()}}</p>
  <p class="text-red-800">{{$task->status}}</p>
</div>