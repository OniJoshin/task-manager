@foreach ($tasks as $task)
    <li class="bg-white p-4 rounded shadow border-l-4 
        @if($task->priority == 1) border-red-500
        @elseif($task->priority == -1) border-gray-400
        @else border-blue-500 @endif">
        
        <div class="flex justify-between">
            <strong>{{ $task->title }}</strong>
            <span class="text-sm text-gray-600">{{ ucfirst($task->status) }}</span>
        </div>
        @if($task->due_date)
            <div class="text-sm text-gray-500">Due: {{ $task->due_date->format('Y-m-d') }}</div>
        @endif
    </li>
@endforeach
