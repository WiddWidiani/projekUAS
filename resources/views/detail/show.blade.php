@php
    $title = $article->title;
@endphp
@extends('layouts.app')
@section('title', $title)
@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->description }}</p>
    <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
    <br><br>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
@endsection
