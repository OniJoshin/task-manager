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
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
