<x-layout-admin>
<a href="{{ route('project.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
<tr>
    <th>Name</th> 
    <td>{{ $project->name }}</td> 
</tr>
<tr>
    <th>Description</th>
    <td>{{ $project->description }}</td>
</tr>
<tr>
    <th>Date</th>
    <td>{{ $project->date }}</td>
</tr>
<tr>
    <th>Link Project</th>
    <td>
            <a href="{{ asset($project->link) }}" target="_blank" class="btn btn-info btn-sm">View Project</a>
    </td>
</tr>
</table>
</x-layout-admin> 