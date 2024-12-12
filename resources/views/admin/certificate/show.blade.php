<x-layout-admin>
<a href="{{ route('certificate.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
<tr>
    <th>Name</th> 
    <td>{{ $certificate->name }}</td> 
</tr>
<tr>
    <th>Issued by</th>
    <td>{{ $certificate->issued_by }}</td>
</tr>
<tr>
    <th>Issued at</th>
    <td>{{ $certificate->issued_at }}</td>
</tr>
<tr>
    <th>Certificate</th>
    <td>
        @if ($certificate->file)
            <a href="{{ asset($certificate->file) }}" target="_blank" class="btn btn-info btn-sm">View Certificate</a>
        @else
            <span class="text-danger">No File</span>
        @endif
    </td>
</tr>
<tr>
    <th>Description</th>
    <td>{{ $certificate->description }}</td>
</tr>
</table>
</x-layout-admin> 