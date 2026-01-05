<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function daftar(Request $request)
{
    $validated = $request->validate([
        'nama_lengkap' => 'required|string',
        'nama_panggilan' => 'nullable|string',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'agama' => 'required',
        'anak_ke' => 'required',
        'jumlah_saudara' => 'nullable',
        'nama_ayah' => 'required',
        'pekerjaan_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ibu' => 'required',
        'no_wa' => 'required',
        'email' => 'nullable|email',
        'alamat' => 'required',
        'program_pilihan' => 'required',
        'golongan_darah' => 'required',
        'riwayat_penyakit' => 'required',
        'alergi' => 'required',
        'keterangan' => 'nullable',
    ]);

    try {
        $pendaftaran = Pendaftaran::create([
            'No_pendaftaran' => 'PD-' . now()->format('YmdHis'),
            'Nama_Siswa' => $request->nama_lengkap,
            'Program' => $request->program_pilihan,
            'Tanggal_Daftar' => now(),
            'Vervikasi' => 'Belum Diverifikasi',
        ]);

        // Redirect ke halaman sukses terpisah
        return view('daftar-sukses');
        
    } catch (\Exception $e) {
        return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
    }
}
}