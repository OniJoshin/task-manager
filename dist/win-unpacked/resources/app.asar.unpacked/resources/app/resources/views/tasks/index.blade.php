@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-2">Tasks in {{ $projectGroup->name }}</h2>
    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="bg-white p-4 rounded shadow">
                <strong>{{ $task->title }}</strong> — <em>{{ ucfirst($task->status) }}</em><br>
                <span class="text-sm text-gray-500">Due: {{ $task->due_date?->format('Y-m-d') }}</span>
            </li>
        @endforeach
    </ul>
@endsection
