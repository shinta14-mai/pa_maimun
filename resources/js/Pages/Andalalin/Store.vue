<template>
  <div class="max-w-auto">
    <div class="p-4 sm:px-26 bg-white border-b border-blue-900">
      <div class="sm:text-center lg:text-center text-lg">
        <div class="shadow border-2 overflow-hidden sm:rounded-md py-6">
          <span class="block xl:inline text-black">Terimakasih</span><br>
          <span class="block xl:inline text-black">Pengajuan Anda Sedang Kami Proses</span><br>
          <span class="block xl:inline text-black">Nomor Registrasi Anda : {{ code }} </span>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
            <div class="rounded-md shadow">
              <a href="/dashboard" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-900 hover:bg-blue-700 md:py-2 md:text-lg md:px-8">
                Home
              </a>
            </div>
          </div>
        </div><br><br>
        <h5 class="text-4xl tracking-tight font-extrabold sm:text-3xl md:text-4xl">
          <span class="block xl:inline text-gold">Dinas Perhubungan</span>
        </h5>
        <h3 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
          <span class="block xl:inline text-gold">Kabupaten Banyuwangi</span>
        </h3>

        <!-- Timeline -->
        <div class="container mx-auto w-full h-full">
          <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-blue-900 h-96 border" style="left: 50%">

            </div>
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
              <div class="order-1 w-5/12">
              </div>
              <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-10 h-10 rounded-full">

              </div>
              <div class="order-1 bg-gray-300 rounded-lg shadow-xl w-5/12 px-6 py-4">
                <h3 class="mb-3 font-bold text-blue-900 text-xl">Sekilas Tentang Kami</h3>
                <p class="text-sm leading-snug tracking-wide text-blue-900 text-opacity-100">Dinas Perhubungan Kabupaten Banyuwangi adalah penyedia layanan pengajuan rekomendasi analisa dampak lalu lintas, rekomendasi teknis dan standar teknis berbasis web untuk mempermudah pemohon baik perusahaan atau perseorangan.</p>
              </div>
            </div>
            <!-- left timeline -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
              <div class="order-1 w-5/12">
              </div>
              <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-10 h-10 rounded-full">

              </div>
              <div class="order-1 bg-blue-900 rounded-lg shadow-xl w-5/12 px-6 py-4">
                <h3 class="mb-3 font-bold text-gray-300 text-xl">Singkat Cerita</h3>
                <p class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100">Sistem ini diciptakan untuk menjawab keresahan pemohon selama pandemi covid-19 yang mengharuskan membatasi interaksi sehingga banyak permohonan yang tertunda. Dengan hadirnya website ini pemohon dapat mengakses pengajuan dengan mudah, aman dan nyaman.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    props: {
        title: Array,
        code: String,
    },
    components: {
        Link,
    }
}
</script>

<style>
</style>
