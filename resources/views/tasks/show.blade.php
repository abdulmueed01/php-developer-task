
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <p>Status: {{ $task->status }}</p>
        <p>Due Date: {{ $task->due_date }}</p>

        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>

        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Task</button>
        </form>
    </div>
@endsection
