<x-layout-admin>
<a href="{{ route('contact.index') }}" class="btn btn-secondary d-inline-block" style="width: 10%;">Back</a>
<table class="table mt-4">
<tr>
    <th>E-Mail</th> 
    <td>{{ $contact->email }}</td> 
</tr>
<tr>
    <th>No. WhatsApp</th>
    <td>{{ $contact->phone }}</td>
</tr>
<tr>
    <th>Instagram</th>
    <td>{{ $contact->instagram }}</td>
</tr>
<tr>
    <th>Github</th>
    <td>{{ $contact->github }}</td>
</tr>
</table>
</x-layout-admin> 