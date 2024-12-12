<x-layout-admin>
<form action="{{ route('skill.update', $skill) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $skill->title }}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{ $skill->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>