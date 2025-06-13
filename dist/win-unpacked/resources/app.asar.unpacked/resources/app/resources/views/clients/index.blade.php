@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-2">Clients</h2>
    <ul class="space-y-2">
        @foreach ($clients as $client)
            <li class="bg-white p-4 rounded shadow">
                <strong>{{ $client->name }}</strong>
                <p class="text-sm text-gray-500">{{ $client->contact_info }}</p>
                <a href="{{ route('clients.show', $client) }}" class="text-blue-600">View Projects</a>
            </li>
        @endforeach
    </ul>
@endsection
