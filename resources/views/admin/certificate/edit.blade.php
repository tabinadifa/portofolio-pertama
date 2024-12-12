<x-layout-admin>
<a href="{{ route('certificate.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<form action="{{ route('certificate.update', $certificate) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Title</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $certificate->name }}">
    </div>
    <div class="mb-3">
        <label for="issued_by" class="form-label">Issued by</label>
        <input type="text" class="form-control" id="issued_by" name="issued_by" value="{{ $certificate->issued_by }}">
    </div>
    <div class="mb-3">
        <label for="issued_at" class="form-label">Issued at</label>
        <input type="date" class="form-control" id="issued_at" name="issued_at" value="{{ $certificate->issued_at }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $certificate->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File</label>
        @if($certificate->file)
            <p>File saat ini: <a href="{{ asset($certificate->file) }}" target="_blank">{{ basename($certificate->file) }}</a></p>
        @endif
        <input type="file" class="form-control" id="file" name="file">
        <small class="form-text text-muted">Unggah file baru</small>
    </div>
    <button type="submit" class="btn btn-info">Update</button>
</form>
</x-layout-admin>
