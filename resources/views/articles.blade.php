<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
        <h2>Input</h2>
        @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @endif
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
            <input type="text" name="title" placeholder="Judul Artikel" value="{{ old('title') }}" required>
            <textarea name="description" placeholder="Deskripsi Artikel" rows="5" required>{{ old('description') }}</textarea>
            <button type="submit">Simpan Artikel</button>
        </form>

        <h2>Daftar Article</h2>
        @if ($articles->isEmpty())
            <p>Tidak ada artikel yang tersedia.</p>
        @else
        @foreach ($articles as $article)
        <div class="article-item">
            <h3>{{ $article->title }}</h3>
            <p>{{ Str::limit($article->description, 100) }}</p>
            <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
        </div>
    @endforeach
        @endif
</body>
</html>