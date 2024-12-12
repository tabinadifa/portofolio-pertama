<x-layout-admin>
<form action="{{ route('contact.update', $contact) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="email" class="form-label">E-Mail</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">No. WhatsApp</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
  </div>
  <div class="mb-3">
    <label for="instagram" class="form-label">Instagram</label>
    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $contact->instagram }}">
  </div>
  <div class="mb-3">
    <label for="github" class="form-label">Github</label>
    <input type="text" class="form-control" id="github" name="github" value="{{ $contact->github }}">
  </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>