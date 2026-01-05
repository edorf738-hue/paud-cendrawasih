<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';

    protected $fillable = [
            'No_pendaftaran',
            'Nama_Siswa',
            'Program',
            'Tanggal_Daftar',
            'Vervikasi',
        ];
        public $timestamps = true;
}
