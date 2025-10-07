<x-layout>
    <div class="container mx-auto p-4">
        <div class="mb-6 text-center">
            <h1 class="text-4xl font-bold text-sky-700 mb-2">All Tasks</h1>
           <p class="text-lg font-semibold text-gray-700 mt-4">
    Laravel is a powerful PHP framework designed for building modern web applications. It offers elegant syntax,
    built-in tools for routing, authentication, and database management, making development fast and enjoyable.
</p>
<x-task-status :status="request()->get('status')"/>

    <p class="text-4xl font-bold text-blue-700 mt-10">Total Task  <span class="text-red-600">{{ count($tasks) }}</span></p>
        </div>

        <div class="space-y-4">
            @foreach ($tasks as $task)
                {{-- <x-task :task="$task" /> --}}
                <x-task :$task />
            @endforeach
        </div>
    </div>
</x-layout>
