<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $data = Pendaftaran::latest()->get();
        return view('admin.dashboard', compact('data'));
    }

        public function verifikasi($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->Vervikasi = 'Terverifikasi';
        $pendaftaran->save();

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diverifikasi.');
    }

    public function hapus($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus.');
    }
}