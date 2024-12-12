<x-layout-admin>
<div class="card-body">
<a href="{{ route('about.create') }}" class="btn btn-primary d-inline-block" style="width: 10%;">Create</a>
<table class="table mt-3" id="myTable">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Subtitle</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($about as $row)
    <tr>
      <td>{{ $row->title }}</td>
      <td>{{ $row->subtitle }}</td>
      <td>{{ $row->content }}</td>
      <td>
      <div class="d-flex gap-2">
      <a href="{{ route('about.show', $row) }}" class="btn btn-secondary d-inline">Detail</a>
        <a href="{{ route('about.edit', $row) }}" class="btn btn-success d-inline">Edit</a>
<form action="{{ route('about.destroy', $row->id) }}" method="POST" class="d-inline" id="deleteForm-{{ $row->id }}">
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
</x-layout-admin>