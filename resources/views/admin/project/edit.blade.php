<x-layout-admin>
<a href="{{ route('project.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<form action="{{ route('project.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Link Project</label>
        <textarea class="form-control" id="link" name="link">{{ $project->link }}</textarea>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $project->date }}">
    </div>
    <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>
