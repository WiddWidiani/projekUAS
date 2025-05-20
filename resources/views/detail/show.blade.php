@php
    $title = $article->title;
@endphp
@extends('layouts.app')
@section('title', $title)
@section('content')
    <h1>Ketika Kucing dan Anjing Tinggal Satu Atap: {{ $article->title }}</h1>
    <small>Ditulis pada: {{ $article->created_at->format('d M Y') }}</small>
    <p>Kucing dan anjing sering dianggap musuh bebuyutan. Tapi kenyataannya, ketika mereka tinggal bersama, justru banyak kejadian lucu yang terjadi. Mari kita intip kisah si Meong (kucing) dan si Doggo (anjing) yang tinggal di rumah yang sama.
{{ $article->description }}</p>
    <br><br>
    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
@endsection
