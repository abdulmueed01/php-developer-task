@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="mb-4">
            <a href="{{ route('tasks.create') }}" class="btn btn-success">Create Task</a>
        </div>

        <h3>Your Tasks</h3>

        @if($tasks->isEmpty())
            <p>No tasks found.</p>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    <span class="badge 
                                        @if($task->status == 'Pending') badge-warning
                                        @elseif($task->status == 'In Progress') badge-info
                                        @elseif($task->status == 'Completed') badge-success
                                        @endif">
                                        {{ $task->status }}
                                    </span>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
