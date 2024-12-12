<x-layout-admin>
<form action="{{ route('about.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="subtitle" class="form-label">SubTitle</label>
    <input type="text" class="form-control" id="subtitle" name="subtitle">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-admin>