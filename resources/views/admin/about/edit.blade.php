<x-layout-admin>
<form action="{{ route('about.update', $about) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}">
  </div>
  <div class="mb-3">
    <label for="subtitle" class="form-label">SubTitle</label>
    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $about->subtitle }}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content">{{ $about->content }}</textarea>
  </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>