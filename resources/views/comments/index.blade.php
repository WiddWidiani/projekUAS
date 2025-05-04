<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
</head>
<body>
    <h1>Daftar Komentar</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    @if ($comments->isEmpty())
        <p>Tidak ada komentar yang tersedia.</p>
    @else
        <ul>
            @foreach ($comments as $comment)
                <li>
                    <p>{{ $comment->content }}</p>
                    <small>Ditulis oleh: {{ $comment->user->name }} pada {{ $comment->created_at->format('d M Y') }}</small>
                    @if (Auth::user()->role === 'admin' || Auth::id() === $comment->user_id)
                        <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

    <h2>Tambah Komentar</h2>
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <textarea name="content" rows="4" placeholder="Tulis komentar..." required></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>