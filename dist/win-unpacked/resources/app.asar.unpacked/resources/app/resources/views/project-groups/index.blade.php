@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-2">Projects for {{ $client->name }}</h2>
    <ul class="space-y-2">
        @foreach ($projectGroups as $group)
            <li class="bg-white p-4 rounded shadow">
                <strong>{{ $group->name }}</strong>
                <p>{{ $group->description }}</p>
                <a href="{{ route('project-groups.show', $group) }}" class="text-blue-600">View Tasks</a>
            </li>
        @endforeach
    </ul>
@endsection
