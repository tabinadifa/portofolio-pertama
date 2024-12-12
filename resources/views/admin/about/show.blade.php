<x-layout-admin>
<a href="{{ route('about.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
<tr>
    <th>Title</th> 
    <td>{{ $about->title }}</td> 
</tr>
<tr>
    <th>SubTitle</th>
    <td>{{ $about->subtitle }}</td>
</tr>
<tr>
    <th>Content</th>
    <td>{{ $about->content }}</td>
</tr>
</table>
</x-layout-admin> 