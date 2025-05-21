@extends('layouts.app')
@section('title', 'About Us')


@section('content')
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .profile-card {
            transition: all 0.3s ease;
            background-color: white;
            color: #000;
            /* Warna teks normal */
        }

        .profile-card:hover {
            background-color: #21008b !important;
            /* Biru tua */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            color: white !important;
            /* Teks jadi putih */
        }

        .profile-card:hover h5,
        .profile-card:hover p {
            color: white !important;
        }

        .profile-card:hover .profile-img {
            transform: scale(1.1);
        }
    </style>

    <div class="container mt-5">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="row justify-content-center g-4">
            @php
                $anggota = [
                    ['foto' => 'foto3.jpg', 'nama' => 'I Putu Ananta Adi Wijaya', 'nim' => '2355201009'],
                    ['foto' => 'foto1.jpg', 'nama' => 'Timotius March Saputra', 'nim' => '2355201020'],
                    ['foto' => 'foto2.jpg', 'nama' => 'Krisna Adi Kusuma', 'nim' => '2355201008'],
                    ['foto' => 'anggota1.jpg', 'nama' => 'Sinta Yunika Sari', 'nim' => '2355201017'],
                    ['foto' => 'foto4.jpg', 'nama' => 'Ni Ketut Widiani', 'nim' => '2355201018'],
                ];
            @endphp

            @foreach ($anggota as $index => $person)
                <div class="col-md-4 col-sm-6 text-center fade-in">
                    <div class="profile-card p-3 shadow rounded bg-white">
                        <img src="{{ asset('image/' . $person['foto']) }}" alt="Foto {{ $person['nama'] }}"
                            class="profile-img mb-3">
                        <h5>{{ $person['nama'] }}</h5>
                        <p class="text-muted">NIM: {{ $person['nim'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Efek animasi ketika halaman di-load
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.fade-in');
            cards.forEach((card, i) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, i * 200); // Delay antar kartu 200ms
            });
        });
    </script>
@endsection
