<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Sekolah - PAUD Cendrawasi</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pelajari.css') }}">
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
</header>

<main class="pelajari-wrapper">

    <section class="pelajari-section">
        <div class="pelajari-text">
            <span class="badge">Profil sekolah</span>
            <h2>Program & Metode Pembelajaran</h2>

            <p>
                PAUD Ceria menerapkan metode pembelajaran yang menyenangkan
                dan sesuai dengan tahap perkembangan anak. Setiap kegiatan
                dirancang untuk membantu anak belajar dengan rasa aman,
                nyaman, dan penuh keceriaan.
            </p>

            <div class="feature">
                <div class="icon">✦</div>
                <div>
                    <h4>Program Unggulan</h4>
                    <p>
                        Kegiatan belajar yang mencakup seni, bahasa, motorik,
                        dan sosial.
                    </p>
                </div>
            </div>

            <div class="feature">
                <div class="icon">✦</div>
                <div>
                    <h4>Metode Belajar</h4>
                    <p>
                        Belajar sambil bermain dengan pendekatan yang ramah anak.
                    </p>
                </div>
            </div>
        </div>

        <div class="pelajari-image">
            <img src="{{ asset('images/kegiatan belajar.jpeg') }}" alt="kegiatan belajar">
        </div>
    </section>

    <section class="pelajari-section">
        <div class="pelajari-text">
            <span class="badge">Lokasi</span>
            <h2>Temukan Kami</h2>

            <p>
                PAUD Cendrawasi berlokasi di lingkungan yang aman dan nyaman,
                mudah diakses, serta mendukung kegiatan belajar anak setiap hari.
            </p>

            <div class="feature">
                <div class="icon">📍</div>
                <div>
                    <h4>Alamat</h4>
                    <p>Jl. Mawar No. 10, Kecamatan Ceria, Kota Bahagia</p>
                </div>
            </div>

            <div class="feature">
                <div class="icon">📞</div>
                <div>
                    <h4>Telepon</h4>
                    <p>0812-3456-7890</p>
                </div>
            </div>
        </div>

        <div class="pelajari-image">
            <img src="{{ asset('images/area bermain.jpeg') }}" alt="Area Bermain">
        </div>
    </section>

    <!-- BUTTON FIXED -->
   <a href="{{ route('daftar') }}" class="btn-daftar">mulai pendaftaran!</a>
</main>

</body>
</html>
