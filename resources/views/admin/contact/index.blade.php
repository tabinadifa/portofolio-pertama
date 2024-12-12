<x-layout-admin>
<div class="card-body">
    <a href="{{ route('contact.create') }}" class="btn btn-primary d-inline-block" style="width: 10%;">Create</a>
    <table class="table mt-3" id="myTable">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Instagram</th>
                <th scope="col">Github</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $row)
            <tr>
                <td>{{ $row->email }}</td>
                <td><a href="{{ asset($row->phone) }}" target="_blank" class="btn btn-info btn-sm">WhatsApp</a></td>
                <td><a href="{{ asset($row->instagram) }}" target="_blank" class="btn btn-info btn-sm">Instagram</a></td>
                <td><a href="{{ asset($row->github) }}" target="_blank" class="btn btn-info btn-sm">Github</a></td>
                <td>
                <div class="d-flex gap-2">
                    <a href="{{ route('contact.show', $row) }}" class="btn btn-secondary d-inline">Detail</a>
                    <a href="{{ route('contact.edit', $row) }}" class="btn btn-success d-inline">Edit</a>
                    <form action="{{ route('contact.destroy', $row->id) }}" method="POST" class="d-inline" id="deleteForm-{{ $row->id }}">
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
