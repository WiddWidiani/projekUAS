@extends('layouts.app')
@section('title', 'Dashboard')


@section('content')



    <h2>Daftar Artikel</h2> <br>
    @if ($articles->isEmpty())
        <p>Tidak ada artikel yang tersedia.</p>
    @else
        <div class="container-md">
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $article->title }}
                                        </h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">
                                            <small>Dibuat pada: {{ $article->created_at->format('d-m-y') }}</small>
                                        </h6>
                                        <p class="card-text">{{ $article->description }}</p>
                                        <a href="{{ route('articles.show', $article->id) }}" class="card-link">Show
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>


@endsection
