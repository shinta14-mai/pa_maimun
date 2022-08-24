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
            $table->string('nama_kategori')->nullable();
            $table->string('nama_pemohon')->nullable();
            $table->text('alamat_pemohon')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->text('alamat_usaha')->nullable();
            $table->double('luas_lahan')->nullable();
            $table->double('luas_bangunan')->nullable();
            $table->string('status_lahan')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('email_pemohon')->nullable();
            $table->string('surat_pemohon')->nullable();
            $table->string('ktp')->nullable();
            $table->string('sertifikat_tanah')->nullable();
            $table->string('ktr')->nullable();
            $table->string('rencana_tapak')->nullable();
            $table->string('desain_bangunan')->nullable();
            $table->string('company_profile')->nullable();
            $table->string('sertifikat_penyusun')->nullable();
            $table->string('dokumen_andalalin')->nullable();
            $table->boolean('isDraft')->default(0);
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
