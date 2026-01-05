<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Pendaftaran - PAUD Cendrawasi</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
    
    <script src="{{ asset('js/daftar.js') }}"></script>
</head>
<body>

<header class="navbar">
    <div class="teks">
        <span>
            <strong>Formulir Pendaftaran Siswa Baru</strong><br>
            <small>PAUD Ceria - Tahun Ajaran 2025/2026</small>
        </span>
    </div>
</header>

<section class="form-wrapper">
    
    <!-- PETUNJUK PENGISIAN -->
    <div class="petunjuk-box">
        <strong>Petunjuk Pengisian:</strong>
        <ul>
            <li>Isi semua kolom yang bertanda <span class="wajib">(*)</span> wajib diisi</li>
            <li>Pastikan data yang dimasukkan benar dan sesuai dengan dokumen asli</li>
            <li>Formulir dapat disimpan sementara dengan klik "Sebelumnya"</li>
            <li>Periksa kembali data Anda sebelum mengirim di tahap Review</li>
        </ul>
    </div>


    <!-- progres bar -->
    <div class="form-controls">
        <div class="steps">
            <div class="step active">Data Anak</div>
            <div class="step">Data Orang Tua</div>
            <div class="step">Info Tambahan</div>
        </div>
    </div>

    <!-- FORM -->
    <form method="POST" action="{{ route('daftar') }}" class="form-box">
    @csrf

        <!-- STEP 1 -->
        <div class="form-step active">
            <h3>Data Anak</h3>

            <div class="form-grid">
                <div class="field">
                    <label>Nama Lengkap <span class="wajib">*</span></label>
                    <input type="text" name="nama_lengkap" required>
                </div>

                <div class="field">
                    <label>Nama Panggilan</label>
                    <input type="text" name="nama_panggilan">
                </div>
                
                <div class="field">
                    <label>Jenis Kelamin <span class="wajib">*</span></label>
                    <select name="jenis_kelamin" required>
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                
                <div class="field">
                    <label>Tempat Lahir <span class="wajib">*</span></label>
                    <input type="text" name="tempat_lahir" required>
                </div>

                <div class="field">
                    <label>Tanggal Lahir <span class="wajib">*</span></label>
                    <input type="date" name="tanggal_lahir" required>
                </div>
                
                <div class="field">
                    <label>Agama <span class="wajib">*</span></label>
                    <input type="text" name="agama" required>
                </div>
                <div class="field">
                    <label>Anak ke- <span class="wajib">*</span></label>
                    <input type="text" name="anak_ke" required>
                </div>
                <div class="field">
                    <label>Jumlah Saudara</label>
                    <input type="text" name="jumlah_saudara">
                </div>
            </div>

            <div class="form-action">
                <button type="button" class="btn primary btn-next">Selanjutnya</button>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="form-step">
            <h3>Data Orang Tua</h3>
            <div class="form-grid">
                <div class="field">
                    <label>Nama Ayah <span class="wajib">*</span></label>
                    <input type="text" name="nama_ayah" required>
                </div>
                <div class="field">
                    <label>Pekerjaan Ayah <span class="wajib">*</span></label>
                    <input type="text" name="pekerjaan_ayah" required>
                </div>
                <div class="field">
                    <label>Nama Ibu <span class="wajib">*</span></label>
                    <input type="text" name="nama_ibu" required>
                </div>
                <div class="field">
                    <label>Pekerjaan Ibu <span class="wajib">*</span></label>
                    <input type="text" name="pekerjaan_ibu" required>
                </div>
                <div class="field">
                    <label>Nomor Whatsapp <span class="wajib"></span>*</span></label>
                    <input type="text" name="no_wa" required>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="field">
                    <label>Alamat Lengkap <span class="wajib">*</span></label>
                    <input type="text" name="alamat" required>
                </div>
            </div>

            <div class="form-action">
                <button type="button" class="btn secondary btn-prev">Kembali</button>
                <button type="button" class="btn primary btn-next">Selanjutnya</button>
            </div>
        </div>

        <!-- STEP 3 -->
        <div class="form-step">
            <h3>Informasi Tambahan</h3>
            <div class="form-grid">

                <div class="field">
                    <label>Program Pilihan <span class="wajib">*</span></label>
                    <input type="text" name="program_pilihan" required>
                </div>

                <div class="field">
                    <label>Golongan Darah <span class="wajib">*</span></label>
                    <input type="text" name="golongan_darah" required>
                </div>

                <div class="field">
                    <label>Riwayat Penyakit <span class="wajib">*</span></label>
                    <input type="text" name="riwayat_penyakit" required>
                </div>

                <div class="field">
                    <label>alergi <span class="wajib">*</span></label>
                    <input type="text" name="alergi" required>
                </div>

                <div class="field full">
                    <label>Keterangan Tambahan</label>
                    <textarea name="keterangan">Contoh: alergi makanan, kebutuhan khusus, dll</textarea>
                </div>
                
            </div>

            <div class="form-action">
                <button type="button" class="btn secondary btn-prev">Kembali</button>
                <button type="submit" class="btn primary btn-next">Selesai</button>
            </div>
        </div>

    </form>
</section>

<script src="{{ asset('javascript/daftar.js') }}"></script>
</body>
</html>
