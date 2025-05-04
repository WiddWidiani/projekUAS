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

    {{-- Link menu --}}
    <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a> <br>
    <a class="nav-link active" href="{{ router('articles') }}">Articles</a> <br>
    <a class="nav-link active" href="#">Comments</a> <br>
    <a class="nav-link active" href="#">Articles Comment</a> <br>
    <a class="nav-link active" href="#">Page Comments</a> <br>
    <a class="nav-link active" href="#">Pages</a> <br>
</body>
</html>