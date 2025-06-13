@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Create Task</h2>

<form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
    @csrf

    <input type="hidden" name="project_group_id" value="{{ $projectGroup->id }}">

    <div>
        <label class="block font-medium">Title</label>
        <input type="text" name="title" class="w-full p-2 border rounded" required>
    </div>

    <div>
        <label class="block font-medium">Description</label>
        <textarea name="description" class="w-full p-2 border rounded"></textarea>
    </div>

    <div>
        <label class="block font-medium">Status</label>
        <select name="status" class="w-full p-2 border rounded">
            <option value="pending">Pending</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>
    </div>

    <div>
        <label class="block font-medium">Priority</label>
        <select name="priority" class="w-full p-2 border rounded">
            <option value="0">Normal</option>
            <option value="1">High</option>
            <option value="-1">Low</option>
        </select>
    </div>

    <div>
        <label class="block font-medium">Due Date</label>
        <input type="date" name="due_date" class="w-full p-2 border rounded">
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save Task</button>
</form>
@endsection
