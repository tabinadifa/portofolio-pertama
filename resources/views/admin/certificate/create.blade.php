<x-layout-admin>
<form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="issued_by" class="form-label">Issued by</label>
        <input type="text" class="form-control" id="issued_by" name="issued_by" required>
    </div>
    <div class="mb-3">
        <label for="issued_at" class="form-label">Issued at</label>
        <input type="date" class="form-control" id="issued_at" name="issued_at" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Certificate File</label>
        <input type="file" class="form-control" id="file" name="file" accept=".pdf,.jpg,.jpeg,.png" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout-admin>
