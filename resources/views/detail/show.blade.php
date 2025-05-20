@php
    $title = $article->title;
@endphp
@extends('layouts.app')
@section('title', $title)
@section('content')
    <h1>{{ $article->title }}</h1>
    <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
    <p>{{ $article->description }}</p>
    <br>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
@endsection
