<template>
  <Head title="Andalalin Dishub Banyuwangi" />

  <header class="relative mb-10">
      <!-- ini nav -->
    <div class="px-4 sm:px-6 md:px-8">
      <div class="absolute inset-0 bottom-10 bg-slate-50">
        <div class="absolute inset-0"></div>
      </div>
      <div
        class="
          relative
          pt-6
          lg:pt-8
          flex
          items-center
          justify-between
          text-slate-700
          font-semibold
          text-sm
          leading-6
        "
      >
        <img src="/components/logo-dishub.png" class="w-14 h-14 block" />
        <h1 class="sm:flex sm:ml-36 hidden">Dinas Perhubungan Kabupaten Banyuwangi</h1>
        <div class="flex items-center">
          <div class="-my-1 ml-2 -mr-1 md:hidden">
            <button
              type="button"
              class="
                text-slate-500
                w-8
                h-8
                flex
                items-center
                justify-center
                hover:text-slate-600
              "
            >
              <span class="sr-only">Navigation</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                />
              </svg>
            </button>
          </div>
          <div class="hidden md:flex items-center">
            <nav>
              <ul class="flex items-center space-x-8">
                <li>
                  <a
                    class="
                      bg-slate-700
                      hover:bg-slate-400
                      focus:outline-none
                      focus:ring-2
                      focus:ring-slate-200
                      focus:ring-offset-2
                      focus:ring-offset-slate-50
                      text-white
                      h-8
                      px-6
                      rounded-md
                      w-full
                      flex
                      items-center
                      justify-center
                      sm:w-auto
                    "
                    href="/register"
                    >Daftar</a
                  >
                </li>
                <li>
                  <a
                    href="/login"
                    class="
                      bg-slate-50
                      hover:border-2 hover:border-slate-700
                      focus:ring-2
                      focus:ring-slate-500
                      focus:ring-offset-2
                      focus:ring-offset-slate-700
                      h-8
                      px-6
                      rounded-md
                      w-full
                      flex
                      items-center
                      justify-center
                      sm:w-auto
                    "
                    >Masuk</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="relative max-w-5xl mx-auto pt-20 sm:pt-24 lg:pt-32">
        <h1
          class="
            text-slate-900
            font-extrabold
            text-2xl
            sm:text-4xl
            lg:text-5xl
            tracking-tight
            text-center
            font-roboto
          "
        >
          Pengajuan Analisis Dampak Lalu Lintas
          <span class="text-birmud mb-3"> (Andalalin) </span>
          <br />Dinas Perhubungan Kabupaten Banyuwangi.
        </h1>
        <p
          class="
            mt-6
            text-sm
            sm:text-md
            lg:text-lg
            text-slate-600 text-center
            max-w-3xl
            mx-auto
          "
        >
          Analisis Dampak Lalu Lintas (Andalalin) adalah serangkaian kegiatan
          kajian mengenai dampak lalu lintas dari pembangunan pusat kegiatan,
          permukiman, dan infrastruktur yang hasilnya dituangkan dalam bentuk
          dokumen hasil analisis dampak lalu lintas.
        </p>
        <div class="mt-6 sm:mt-10 flex justify-center bg-slate-50 text-base">
          <a
            class="
              bg-slate-900
              hover:bg-slate-700
              focus:outline-none
              focus:ring-2
              focus:ring-slate-400
              focus:ring-offset-2
              focus:ring-offset-slate-50
              text-white
              font-semibold
              h-12
              px-6
              rounded-lg
              w-full
              flex
              items-center
              justify-center
              sm:w-auto
            "
            href="#panduan"
            >Panduan</a
          >
        </div>
      </div>
    </div>
  </header>

  <section class="h-screen p-5 bg-slate-50" id="panduan">
    <div class="my-20 sm:my-24 md:my-8 text-center">
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
      <img src="/components/panduan.png" class="w-full sm:w-1/2 mx-auto" />
    </div>
  </section>

  <section class="bg-slate-50">
    <div class="container mx-auto py-9 md:py-12 lg:py-24">
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
              Kriteria Ukuran Wajib <span class="text-birmud mb-3"> Andalalin </span>
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
              href="/components/Kriteria.pdf"
              target="_blank"
                class="
                  bg-slate-900
                  text-white
                  block
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

    <div class="container mx-auto py-9 md:py-12 lg:py-24">
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
              href="/components/surat_permohonan.pdf"
              target="_blank"
                class="
                  bg-slate-900
                  text-white
                  block
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
              Surat Permohonan Pengajuan <span class="text-birmud mb-3"> Andalalin </span>
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
              Surat Permohonan ini digunakan sebagai salah satu persyaratan dalam mengajukan Analisis Dampak Lalu Lintas
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container mx-auto py-9 md:py-12 lg:py-24">
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
              "
            >
              Surat Rekomendasi <span class="text-birmud mb-3"> Andalalin </span>
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
              Surat Rekomendasi Andalalin yang sudah jadi dapat digunakan sebagai salah satu kelengkapan berkas pengajuan Izin
    Mendirikan Bangunan (IMB). Berikut ini contoh surat rekomendasi Andalalin yang sudah terbit.
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
              href="/components/surat_rekom.pdf"
              target="_blank"
                class="
                  bg-slate-900
                  text-white
                  block
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
  </section>
</template>

<script>
import {defineComponent} from 'vue';
import { Head } from '@inertiajs/inertia-vue3';
export default defineComponent({
  components:{
      Head
  }
})
</script>
