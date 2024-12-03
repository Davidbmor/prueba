<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('upload.form') }}">Subir Imagen</a></li>
            <li><a href="{{ route('images.index') }}">Ver Imágenes</a></li>
            <li><a href="{{ route('photos.index') }}">Ver Fotos</a></li>
        </ul>
    </nav>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('upload.handle') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Subir Imagen</button>
    </form>
</body>
</html>