<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->timestamps();
        });

        DB::table('trackings')->insert([
            'id' => '1',
            'keterangan' => 'Pengajuan Anda telah terkirim.'
        ]);

        DB::table('trackings')->insert([
            'id' => '2',
            'keterangan' => 'Petugas telah mengonfirmasi pengajuan Anda. Selanjutnya petugas dapat menerima atau menolak pengajuan Anda.'
        ]);

        DB::table('trackings')->insert([
            'id' => '3',
            'keterangan' => 'Pengajuan Anda diterima. Selanjutnya petugas akan menjadwalkan tinjau lapang ke lokasi anda.'
        ]);

        DB::table('trackings')->insert([
            'id' => '4',
            'keterangan' => 'Mohon maaf, pengajuan Anda ditolak. Harap melakukan perbaikan terlebih dahulu sesuai dengan keterangan di bawah tanpa membuat pengajuan baru.'
        ]);

        DB::table('trackings')->insert([
            'id' => '5',
            'keterangan' => 'Berikut jadwal untuk tinjau lapang ke lokasi Anda.'
        ]);

        DB::table('trackings')->insert([
            'id' => '6',
            'keterangan' => 'Petugas telah melakukan tinjau lapang ke lokasi Anda. Dimohon untuk menghadiri rapat pemaparan dokumen Andalalin di Dinas Perhubungan Kabupaten Banyuwangi sesuai dengan jadwal undangan berikut.'
        ]);

        DB::table('trackings')->insert([
            'id' => '7',
            'keterangan' => 'Petugas mengirimkan dokumen surat pernyataan. Harap dokumen ini diserahkan ke Dinas Perhubungan Kabupaten Banyuwangi setelah surat rekomendasi Andalalin terbit.'
        ]);

        DB::table('trackings')->insert([
            'id' => '8',
            'keterangan' => 'Selamat, pengajuan Anda berhasil. Anda dapat mengambil surat rekomendasi Andalalin di Kantor Dinas Perhubungan Kabupaten Banyuwangi dengan membawa hardfile persyaratan pengajuan dan surat pernyataan bermatrai.'
        ]);

        DB::table('trackings')->insert([
            'id' => '9',
            'keterangan' => 'Pengajuan Anda saat ini sedang diverifikasi kembali oleh Petugas.'
        ]);

        DB::table('trackings')->insert([
            'id' => '10',
            'keterangan' => 'Draft berhasil disimpan.'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trackings');
    }
}
