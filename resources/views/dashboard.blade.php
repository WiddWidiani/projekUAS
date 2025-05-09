<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, {{ Auth::user()->name }}</h1>

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
    @if (Auth::user()->role === 'admin')
    <a class="nav-link active" href="#">Articles Comment</a> <br>
    <a class="nav-link active" href="#">Page Comments</a> <br>
    <a class="nav-link active" href="#">Pages</a> <br>
    <a class="nav-link active" href="{{ route('comments.index') }}">Comments</a> <br>
    <a href=""> logoutc</a>
    @endif
</body>
</html>