@extends('layouts.app')

@section('title', 'The List of tasks')

@section('content')
<nav class="mb-4">
    <a href="{{route('tasks.create')}}" class=" underline decoration-pink-500 font-medium text-gray-700">ADD TASK</a>
</nav>

    <div>
        {{-- @if (count($tasks)) --}}
            @forelse ($tasks as $task )
            <div>
               <a href="{{route('tasks.show',['task' => $task->id])}}"
                 @class(['font-bold', 'line-through' => $task->completed])>{{$task->title}}</a>
            </div>
            @empty
            <div>Thare re no tasks!</div>
            @endforelse
        {{-- @endif --}}
    </div>

    @if ($tasks->count())
    <nav class="navigation mt-4">{{$tasks->links()}}</nav>
    @endif
@endsection
