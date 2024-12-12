<x-layout-admin>
<form action="{{ route('contact.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">No. WhatsApp</label>
    <input type="text" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="mb-3">
    <label for="instagram" class="form-label">Instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" required>
  </div>
  <div class="mb-3">
    <label for="github" class="form-label">Github</label>
    <input type="text" class="form-control" id="github" name="github" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-admin>