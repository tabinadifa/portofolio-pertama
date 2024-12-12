<x-layout-admin>
<form action="{{ route('home.update', $home) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $home->title }}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content">{{ $home->content }}</textarea>
  </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>