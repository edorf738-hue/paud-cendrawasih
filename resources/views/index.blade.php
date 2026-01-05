<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PAUD Cendrawasi</title>
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
   <link rel="stylesheet" href="https://paud-cendrawasih-production.up.railway.app/css/main.css">
</head>
<body>

<header class="navbar">
    <div class="logo">
    <img src="{{ asset('images/logo paud cendrawasi.jpeg') }}" alt="logo paud cendrawasi">
        <span>
            <strong>PAUD Cendrawasi</strong><br>
            <small>pendidikan anak usia dini</small>
        </span>
    </div>

   <a href="{{ route('login') }}"  class="admin-link">DASHBOARD ADMIN</a>

</header>

<section class="hero">
    <div class="hero-content">
        <span class="badge">Tahun Ajaran 2025/2026</span>
        <h1>Selamat Datang di PAUD Cendrawasi</h1>
        <p>
            Memberikan pendidikan terbaik untuk anak usia dini dengan pembelajaran
            yang menyenangkan, kreatif, dan berkarakter.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('daftar') }}" class="btn primary">Daftar Sekarang</a>
            <a href="{{ route('pelajari') }}" class="btn secondary">
                Pelajari Lebih Lanjut
            </a>
        </div>
    </div>

    <div class="hero-image">
           <img src="{{ asset('images/foto kegiatan.jpeg') }}" alt="foto kegiatan">
    </div>
</section>

</body>
</html>
