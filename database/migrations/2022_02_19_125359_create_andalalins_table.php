<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAndalalinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andalalins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('tracking_id')->constrained();
            $table->string('nama_kategori');
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
            $table->string('company_profile')->nullable();
            $table->string('sertifikat_penyusun')->nullable();
            $table->string('dokumen_andalalin')->nullable();
            $table->string('kode');
            $table->string('keterangan')->nullable();
            $table->timestamp('tgl_tl')->nullable();
            $table->string('undangan_rapat')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->string('surat_rekom')->nullable();
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
        Schema::dropIfExists('andalalins');
    }
}
