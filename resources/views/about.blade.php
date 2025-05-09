@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if ($about)
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">{{ $about->title }}</h3>
                </div>
                <div class="card-body">
                    <p>{!! nl2br(e($about->content)) !!}</p>
                    <small class="text-muted">Terakhir diperbarui:
                        {{ \Carbon\Carbon::parse($about->updated_at)->format('d M Y') }}</small>
                </div>
            </div>
        @else
            <div class="alert alert-warning text-center">
                <strong>Data About Us belum tersedia.</strong>
            </div>
        @endif
    </div>
@endsection
