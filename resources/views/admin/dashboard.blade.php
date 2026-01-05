<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - PAUD Ceria</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<header class="admin-header">
  <a href="{{ route('home') }}" class="back">←</a>
  <div>
    <h1>dashboard admin</h1>
    <p>kelola pendaftaran siswa baru</p>
  </div>
</header>

<main class="admin-container">
  
  <div class="search-box">
    <span class="search-icon">🔍</span>
    <input id="searchInput" type="text" placeholder="cari berdasarkan nama atau no pendaftaran...." autocomplete="off">
    <button id="clearSearch" class="clear-btn" style="display: none;" title="Hapus pencarian">❌</button>
  </div>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>No. Pendaftaran</th>
          <th>Nama Siswa</th>
          <th>Program</th>
          <th>Tanggal Daftar</th>
          <th>Verifikasi</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody id="tableBody">
        @forelse ($data as $item)
            <tr class="data-row" data-no="{{ $item->No_pendaftaran }}" data-nama="{{ $item->Nama_Siswa }}">
              <td>{{ $item->No_pendaftaran }}</td>
              <td>{{ $item->Nama_Siswa }}</td>
              <td>{{ $item->Program }}</td>
              <td>{{ \Carbon\Carbon::parse($item->Tanggal_Daftar)->format('y-m-d') }}</td>
              <td>{{ $item->Vervikasi }}</td>

              <td>
                {{-- Tombol Verifikasi --}}
                <form action="{{ route('admin.pendaftaran.verifikasi', $item->id) }}" method="POST" style="display:inline;">
                  @csrf
                  <button type="submit" class="btn-action btn-verify" title="Verifikasi"
                    {{ $item->Vervikasi === 'Terverifikasi' ? 'disabled' : '' }}>
                    ✔
                  </button>
                </form>

                {{-- Tombol Hapus/Tolak --}}
                <form action="{{ route('admin.pendaftaran.hapus', $item->id) }}" method="POST" style="display:inline;"
                      onsubmit="return confirm('Yakin mau hapus data ini?');">
                  @csrf
                  <button type="submit" class="btn-action btn-delete" title="Tolak / Hapus">❌</button>
                </form>
              </td>
            </tr>

          @empty

            <tr id="emptyRow">
              <td colspan="6" style="text-align:center; padding: 40px;">
                Belum ada data pendaftaran
              </td>
            </tr>
          @endforelse
      </tbody>
    </table>
  </div>

  <!-- Baris untuk "tidak ditemukan" (akan muncul via JS) -->
   <template id="notFoundTemplate">
    <tr id="notFoundRow">
      <td colspan="6" style="text-align:center; padding: 40px; color: #999;">
        Data tidak ditemukan
      </td>
    </tr>
   </template>

</main>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>