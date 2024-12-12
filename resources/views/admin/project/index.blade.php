<x-layout-admin>
<div class="card-body">
    <a href="{{ route('project.create') }}" class="btn btn-primary d-inline-block" style="width: 10%;">Create</a>
    <table class="table mt-3" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Link</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td><a href="{{ asset($row->link) }}" target="_blank" class="btn btn-info btn-sm">View Project</a></td>
                <td>{{ $row->date }}</td>
                <td>
                <div class="d-flex gap-2">
                    <a href="{{ route('project.show', $row) }}" class="btn btn-secondary d-inline">Detail</a>
                    <a href="{{ route('project.edit', $row) }}" class="btn btn-success d-inline">Edit</a>
                    <form action="{{ route('project.destroy', $row->id) }}" method="POST" class="d-inline" id="deleteForm-{{ $row->id }}">
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
