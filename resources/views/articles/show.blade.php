<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
    <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
    <br><br>

    
    <a href="{{ url('/dashboard') }}">Kembali ke Dashboard</a>
</body>
</html>