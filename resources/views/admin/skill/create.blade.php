<x-layout-admin>
<form action="{{ route('skill.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-admin>