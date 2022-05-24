<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Andalalin extends Model
{
    use HasFactory, Notifiable;

    public function user(){
		return $this->belongsTo(User::class);
	}

    public $table = 'andalalins';
    protected $fillable = [
        'user_id',
        'nama_kategori',
        'nama_pemohon',
        'alamat_pemohon',
        'no_tlp',
        'jenis_usaha',
        'alamat_usaha',
        'luas_lahan',
        'luas_bangunan',
        'status_lahan',
        'kapasitas',
        'email_pemohon',
        'surat_pemohon',
        'ktp',
        'sertifikat_tanah',
        'ktr',
        'rencana_tapak',
        'desain_bangunan',
        'company_profile',
        'sertifikat_penyusun',
        'dokumen_andalalin',
        'verifikasi',
        'keterangan',
        'kode'
    ];
}
