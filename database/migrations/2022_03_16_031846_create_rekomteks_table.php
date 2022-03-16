<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomteksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomteks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon');
            $table->text('alamat_pemohon');
            $table->string('no_tlp');
            $table->string('jenis_usaha');
            $table->text('alamat_usaha');
            $table->double('luas_lahan');
            $table->double('luas_bangunan');
            $table->string('status_lahan');
            $table->string('kapasitas');
            $table->string('email_pemohon');
            $table->string('surat_pemohon');
            $table->string('ktp');
            $table->string('sertifikat_tanah');
            $table->string('ktr');
            $table->string('rencana_tapak');
            $table->string('desain_bangunan');
            $table->string('company_profile');
            $table->string('sertifikat_penyusun');
            $table->string('dokumen_andalalin');
            $table->string('kode');
            $table->string('verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomteks');
    }
}
