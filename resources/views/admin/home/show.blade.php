<x-layout-admin>
<a href="{{ route('home.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
    <tr>
    <th>Title</th> 
    <td>{{ $home->title }}</td> 
</tr>
    <th>Content</th>
    <td>{{ $home->content }}</td>
</table>
</x-layout-admin> 