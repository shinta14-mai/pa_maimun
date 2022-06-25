<template>
  <Head title="Informasi" />
  <div
    class="
      min-h-screen
      flex flex-col flex-auto flex-shrink-0
      antialiased
      bg-slate-50
      text-black
    "
  >
    <Sidebar />

    <div class="h-screen ml-14 md:ml-64">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto py-2 sm:py-6 lg:py-16 lg:max-w-none">
          <h1
            class="
              text-slate-900
              font-extrabold
              text-xl
              sm:text-3xl
              lg:text-4xl
              tracking-tight
              text-center
              font-roboto
            "
          >
            Kategori dan Syarat Pengajuan
            <span class="text-birmud mb-3"> Andalalin </span>
          </h1>
          <div
            class="
              mt-6
              space-y-12
              lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6
            "
          >
            <div class="group relative">
              <div class="py-12">
                <div
                  class="
                    bg-slate-100
                    w-full
                    pt-4
                    rounded-xl
                    space-y-6
                    overflow-hidden
                    transition-all
                    duration-500
                    transform
                    hover:-translate-y-6 hover:scale-105
                    shadow-xl
                    hover:shadow-2xl
                    cursor-auto
                  "
                >
                  <div class="px-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-slate-900 font-roboto">
                      Dokumen Andalalin
                    </h1>
                  </div>
                  <ol class="list-decimal list-inside px-2">
                    <li>Surat Permohonan</li>
                    <li>Scan Kartu Tanda Penduduk (KTP)</li>
                    <li>Scan Sertifikat Tanah</li>
                    <li>Kesesuaian Tata Ruang</li>
                    <li>Rencana Tapak</li>
                    <li>Desain Bangunan</li>
                    <li>Company Profile Penyusun</li>
                    <li>Sertifikat Penyusun</li>
                    <li>Dokumen Andalalin</li>
                  </ol>
                  <div class="text-center bg-abu">
                    <button
                      class="inline-block my-8 font-bold text-gray-800"
                    ></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="group relative">
              <div class="py-12">
                <div
                  class="
                    bg-slate-100
                    w-full
                    pt-4
                    rounded-xl
                    space-y-6
                    overflow-hidden
                    transition-all
                    duration-500
                    transform
                    hover:-translate-y-6 hover:scale-105
                    shadow-xl
                    hover:shadow-2xl
                    cursor-auto
                  "
                >
                  <div class="px-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-slate-900 font-roboto">
                      Rekomendasi Teknis
                    </h1>
                  </div>
                  <ol class="list-decimal list-inside px-2">
                    <li>Surat Permohonan</li>
                    <li>Scan Kartu Tanda Penduduk (KTP)</li>
                    <li>Scan Sertifikat Tanah</li>
                    <li>Kesesuaian Tata Ruang</li>
                    <li>Rencana Tapak</li>
                    <li>Desain Bangunan</li>
                    <li>Company Profile Penyusun</li>
                    <li>Sertifikat Penyusun</li>
                    <li>Dokumen Andalalin</li>
                  </ol>
                  <div class="text-center bg-abu">
                    <button
                      class="inline-block my-8 font-bold text-gray-800"
                    ></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="group relative">
              <div class="py-12">
                <div
                  class="
                    bg-slate-100
                    w-full
                    pt-4
                    rounded-xl
                    space-y-6
                    overflow-hidden
                    transition-all
                    duration-500
                    transform
                    hover:-translate-y-6 hover:scale-105
                    shadow-xl
                    hover:shadow-2xl
                    cursor-auto
                  "
                >
                  <div class="px-8 flex justify-between items-center">
                    <h1 class="text-3xl font-bold text-slate-900 font-roboto">
                      Standar Teknis
                    </h1>
                  </div>
                  <ol class="list-decimal list-inside px-2">
                    <li>Surat Permohonan</li>
                    <li>Scan Kartu Tanda Penduduk (KTP)</li>
                    <li>Scan Sertifikat Tanah</li>
                    <li>Kesesuaian Tata Ruang</li>
                    <li>Rencana Tapak</li>
                    <li>Desain Bangunan</li>
                  </ol>
                  <div class="text-center bg-abu">
                    <button
                      class="inline-block my-8 font-bold text-gray-800"
                    ></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="my-20 sm:my-24 md:my-8 text-center"
        v-for="ad in info"
        :key="ad.id"
      >
        <h1
          class="
            text-2xl
            sm:text-4xl
            md:text-5xl
            tracking-tight
            font-bold font-roboto
            text-center text-slate-900
            mb-4
            sm:mb-8
          "
        >
          Panduan Pengajuan
          <span class="text-birmud mb-3"> Andalalin </span>
        </h1>
        <img :src="`/storage/${ad.panduan}`" class="w-full sm:w-1/2 mx-auto" />
      </div>

      <div
        class="container mx-auto py-9 md:py-12 lg:py-24"
        v-for="ad in info"
        :key="ad.id"
      >
        <div class="flex flex-col lg:flex-row justify-center items-strech mx-4">
          <div class="lg:w-4/12 flex justify-center items-center">
            <div>
              <h1
                class="
                  sm:text-4xl
                  text-2xl
                  md:text-5xl
                  xl:text-6xl
                  font-semibold font-roboto
                  text-gray-900
                  w-7/12
                  leading-8
                "
              >
                Kriteria Ukuran Wajib
                <span class="text-birmud mb-3"> Andalalin </span>
              </h1>
              <p
                class="
                  md:w-7/12
                  lg:w-11/12
                  xl:w-10/12
                  mt-4
                  lg:mt-5
                  sm:text-base
                  text-sm
                  leading-normal
                  text-gray-600
                "
              >
                Kriteria ini digunakan untuk menentukan kategori pengajuan
                Analisis Dampak Lalu Lintas yang didasarkan pada jenis rencana
                pembangunan, ukuran minimal, dan bangkitan lalu lintas.
              </p>
            </div>
          </div>
          <div class="lg:w-6/12 mt-6 md:mt-8 lg:mt-0">
            <div class="relative w-full h-full">
              <img
                src="/components/kriteria.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  relative
                  hidden
                  lg:block
                "
              />
              <img
                src="/components/kriteria.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  lg:hidden
                "
              />
              <div
                class="
                  lg:block
                  absolute
                  bottom-0
                  inset-x-0
                  w-full
                  mx-auto
                  rounded-lg
                "
              >
                <a
                  :href="`/storage/${ad.kriteria}`"
                  target="_blank"
                  class="
                    bg-slate-900
                    text-slate-50
                    rounded-sm
                    font-bold
                    py-6
                    px-6
                    w-full
                    flex
                    items-center
                    hover:bg-slate-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-slate-400
                    focus:ring-offset-2
                    focus:ring-offset-slate-50
                  "
                >
                  Lihat Selengkapnya
                  <span class="ml-2">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="container mx-auto py-9 md:py-12 lg:py-24"
        v-for="ad in info"
        :key="ad.id"
      >
        <div class="flex flex-col lg:flex-row justify-center items-strech mx-4">
          <div class="lg:w-6/12 flex justify-center items-center">
            <div class="relative w-full h-full">
              <img
                src="/components/surat_permohonan1.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  relative
                  hidden
                  lg:block
                "
              />
              <img
                src="/components/surat_permohonan1.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  lg:hidden
                "
              />
              <div
                class="
                  lg:block
                  absolute
                  bottom-0
                  inset-x-0
                  w-full
                  mx-auto
                  rounded-lg
                "
              >
                <a
                  :href="`/storage/${ad.permohonan}`"
                  target="_blank"
                  class="
                    bg-slate-900
                    text-slate-50
                    rounded-sm
                    font-bold
                    py-6
                    px-6
                    w-full
                    flex
                    items-center
                    hover:bg-slate-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-slate-400
                    focus:ring-offset-2
                    focus:ring-offset-slate-50
                  "
                >
                  Lihat Selengkapnya
                  <span class="ml-2">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="lg:w-4/12 sm:ml-20 md:mt-8 lg:my-auto">
            <div>
              <h1
                class="
                  sm:text-4xl
                  text-2xl
                  md:text-5xl
                  xl:text-6xl
                  font-semibold font-roboto
                  text-gray-900
                  w-7/12
                "
              >
                Surat Permohonan Pengajuan
                <span class="text-birmud mb-3"> Andalalin </span>
              </h1>
              <p
                class="
                  md:w-7/12
                  lg:w-11/12
                  xl:w-10/12
                  mt-4
                  lg:mt-5
                  sm:text-base
                  text-sm
                  leading-normal
                  text-gray-600
                "
              >
                Surat Permohonan ini digunakan sebagai salah satu persyaratan
                dalam mengajukan Analisis Dampak Lalu Lintas
              </p>
            </div>
          </div>
        </div>
      </div>

      <div
        class="container mx-auto py-9 md:py-12 lg:py-24"
        v-for="ad in info"
        :key="ad.id"
      >
        <div class="flex flex-col lg:flex-row justify-center items-strech mx-4">
          <div class="lg:w-4/12 flex justify-center items-center">
            <div>
              <h1
                class="
                  sm:text-4xl
                  text-2xl
                  md:text-5xl
                  xl:text-6xl
                  font-semibold font-roboto
                  text-gray-900
                  w-7/12
                  mr-10
                "
              >
                Surat Rekomendasi
                <span class="text-birmud mb-3"> Andalalin </span>
              </h1>
              <p
                class="
                  md:w-7/12
                  lg:w-11/12
                  xl:w-10/12
                  mt-4
                  lg:mt-5
                  sm:text-base
                  text-sm
                  leading-normal
                  text-gray-600
                "
              >
                Surat Rekomendasi Andalalin yang sudah jadi dapat digunakan
                sebagai salah satu kelengkapan berkas pengajuan Izin Mendirikan
                Bangunan (IMB). Berikut ini contoh surat rekomendasi Andalalin
                yang sudah terbit.
              </p>
            </div>
          </div>
          <div class="lg:w-6/12 mt-6 md:mt-8 lg:mt-0">
            <div class="relative w-full h-full">
              <img
                src="/components/surat_rekom1.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  relative
                  hidden
                  lg:block
                "
              />
              <img
                src="/components/surat_rekom1.png"
                alt=""
                class="
                  w-full
                  h-full
                  border-slate-900 border-4
                  rounded-lg
                  mx-auto
                  lg:hidden
                "
              />
              <div
                class="
                  lg:block
                  absolute
                  bottom-0
                  inset-x-0
                  w-full
                  mx-auto
                  rounded-lg
                "
              >
                <a
                  :href="`/storage/${ad.rekom}`"
                  target="_blank"
                  class="
                    bg-slate-900
                    text-slate-50
                    rounded-sm
                    font-bold
                    py-6
                    px-6
                    w-full
                    flex
                    items-center
                    hover:bg-slate-700
                    focus:outline-none
                    focus:ring-2
                    focus:ring-slate-400
                    focus:ring-offset-2
                    focus:ring-offset-slate-50
                  "
                >
                  Lihat Selengkapnya
                  <span class="ml-2">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import Sidebar from "@/Layouts/Sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Sidebar,
    Head,
  },
  props: {
    info: Object,
  },
});
</script>
