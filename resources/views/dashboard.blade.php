<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    @include('header.navbar')



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
    <a class="nav-link active" href="{{ route('articles.store') }}">Articles</a> <br>
    <a class="nav-link active" href="{{ route('about') }}">About Us</a> <br>
    @if (Auth::user()->role === 'admin')
        <a class="nav-link active" href="#">Articles Comment</a> <br>
        <a class="nav-link active" href="#">Page Comments</a> <br>
        <a class="nav-link active" href="#">Pages</a> <br>
        <a class="nav-link active" href="{{ route('comments.index') }}">Comments</a> <br>
        <a href=""> logoutc</a>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>




</html>
