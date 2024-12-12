<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konten</title>
</head>
<body>
    <h1>Edit Konten</h1>

    <div class="form-container">
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dinamis.update', $dinami->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="konten">Konten</label>
            <input type="text" name="konten" id="konten" value="{{ old('konten', $dinami->konten) }}" required>

            <button type="submit" class="submit-button">Update</button>
            <a href="{{ route('dinamis.index') }}" class="back-button">Kembali</a>
        </form>
    </div>
</body>
</html>
