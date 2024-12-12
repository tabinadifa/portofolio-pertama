<x-layout-admin>
<a href="{{ route('skill.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
    <tr>
    <th>Title</th> 
    <td>{{ $skill->title }}</td> 
</tr>
    <th>Description</th>
    <td>{{ $skill->description }}</td>
</table>
</x-layout-admin> 