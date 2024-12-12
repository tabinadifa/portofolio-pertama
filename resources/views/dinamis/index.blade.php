<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Konten</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            position: relative;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .success-message {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .add-button, .edit-button, .delete-button, .back-button {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            text-align: center;
        }

        .add-button {
            background-color: #007bff;
        }

        .edit-button {
            background-color: #28a745;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .back-button {
            background-color: #6c757d;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .add-button:hover {
            background-color: #0056b3;
        }

        .edit-button:hover {
            background-color: #218838;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .back-button:hover {
            background-color: #5a6268;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>

    <!-- Tombol Back -->
    <a href="/admin/dashboard" class="back-button">Back</a>

    <h1>Daftar Konten</h1>
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Konten</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($konten as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->konten }}</td>
                    <td>
                        <a href="{{ route('dinamis.edit', $item->id) }}" class="edit-button">Edit</a>
                        <form action="{{ route('dinamis.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('dinamis.create') }}" class="add-button">Tambah Konten Baru</a>

</body>
</html>
