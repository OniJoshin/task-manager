<form action="{{ route('project-groups.files.store', $projectGroup) }}" method="POST" enctype="multipart/form-data" class="space-y-4 mt-4">
    @csrf
    <input type="file" name="file" required class="block border p-2 rounded" />
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Upload File</button>
</form>

@if($projectGroup->files->count())
    <h3 class="text-lg font-semibold mt-6">Uploaded Files</h3>
    <ul class="list-disc pl-5">
        @foreach($projectGroup->files as $file)
            <li>
                <a href="{{ Storage::url($file->path) }}" target="_blank">{{ $file->filename }}</a>
            </li>
        @endforeach
    </ul>
@endif
