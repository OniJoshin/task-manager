@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">🗂️ Task Manager Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($clients as $client)
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">{{ $client->name }}</h2>

                @foreach ($client->projectGroups as $group)
                    <div class="mb-4 border-l-4 pl-3 border-blue-400">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-medium">{{ $group->name }}</h3>
                            <a href="{{ route('project-groups.show', $group) }}" class="text-blue-600 text-sm underline">View</a>
                        </div>

                        @if($group->tasks->count())
                            <ul class="mt-1 ml-3 list-disc text-sm text-gray-700">
                                @foreach ($group->tasks->take(3) as $task)
                                    <li>
                                        {{ $task->title }} 
                                        <span class="text-xs text-gray-500">({{ $task->status }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-gray-400 italic mt-1">No tasks yet</p>
                        @endif
                    </div>
                    <!-- Existing group display -->

                    

                @endforeach
                <!-- Inline Task Creation Form -->
                    <form action="{{ route('tasks.store') }}" method="POST" class="mt-3 space-y-2">
                        @csrf
                        <input type="hidden" name="project_group_id" value="{{ $group->id }}">

                        <input type="text" name="title" placeholder="New task title" class="w-full border rounded p-2 text-sm" required>

                        <div class="flex gap-2">
                            <select name="status" class="border p-1 rounded text-sm">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>

                            <select name="priority" class="border p-1 rounded text-sm">
                                <option value="0">Normal</option>
                                <option value="1">High</option>
                                <option value="-1">Low</option>
                            </select>

                            <input type="date" name="due_date" class="border p-1 rounded text-sm" />
                            
                            <button type="submit" class="bg-green-600 text-white px-3 py-1 text-sm rounded">
                                Add
                            </button>
                        </div>
                    </form>
            </div>
        @endforeach
    </div>
@endsection
