<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, {{ Auth::user()->name }}</h1>

    {{-- articles --}}
    <h2>Daftar Artikel</h2>
    @if ($articles->isEmpty())
        <p>Tidak ada artikel yang tersedia.</p>
    @else
        <ul>
            @foreach ($articles as $article)
                <li>
                    <h3>
                        <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                    </h3>
                </li>
            @endforeach
        </ul>
    @endif

    {{-- Link menu --}}
    <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a> <br>
    <a class="nav-link active" href="{{ route('articles.store') }}">Articles</a> <br>
    <a class="nav-link active" href="#">Comments</a> <br>
    <a class="nav-link active" href="#">Articles Comment</a> <br>
    <a class="nav-link active" href="#">Page Comments</a> <br>
    <a class="nav-link active" href="#">Pages</a> <br>
</body>
</html>