<x-layout-admin>
<div class="card-body">
    <a href="{{ route('certificate.create') }}" class="btn btn-primary d-inline-block" style="width: 10%;">Create</a>
    <table class="table mt-3" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Issued by</th>
                <th scope="col">Issued at</th>
                <th scope="col">Certificate</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certificate as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->issued_by }}</td>
                <td>{{ $row->issued_at }}</td>
                <td>
                    @if ($row->file)
                        <a href="{{ asset($row->file) }}" target="_blank" class="btn btn-info btn-sm">View Certificate</a>
                    @else
                        <span class="text-danger">No File</span>
                    @endif
                </td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('certificate.show', $row) }}" class="btn btn-secondary btn-sm">Detail</a>
                        <a href="{{ route('certificate.edit', $row) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('certificate.destroy', $row->id) }}" method="POST" id="deleteForm-{{ $row->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ $row->id }}')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            document.getElementById('deleteForm-' + id).submit();
        }
    }
</script>
</x-layout-admin>
