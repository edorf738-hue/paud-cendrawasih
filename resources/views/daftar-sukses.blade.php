<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil - PAUD Cendrawasi</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar-sukses.css') }}">
</head>
<body>

<header class="navbar">
    <div class="logo">
        <img src="{{ asset('images/logo paud cendrawasi.jpeg') }}" alt="logo paud cendrawasi"> 
        <span>
            <strong>PAUD Cendrawasi</strong><br>
            <small>Pendidikan Anak Usia Dini</small>
        </span>
    </div>
</header>

<section class="form-wrapper">
    <div class="finish-card">
        <div class="finish-icon">✓</div>
        <h2>Pendaftaran Berhasil</h2>
        <p class="tekss">Terima kasih telah mendaftar di PAUD Cendrawasi. Formulir pendaftaran Anda telah berhasil diterima dan akan segera kami proses. <br><br>
            Informasi selanjutnya akan kami sampaikan melalui WhatsApp ke nomor telepon orang tua yang telah didaftarkan.
        </p>

        <a href="{{ route('home') }}" class="btn primary">Kembali ke Beranda</a>
    </div>
</section>

</body>
</html>