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
        <img
          src="/components/logo-dishub.png"
          class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 block"
        />
        <h1 class="md:flex md:mx-auto md:text-base md:uppercase hidden">
          aplikasi Pengajuan Surat Rekomendasi Analisis Dampak Lalu Lintas
        </h1>
        <div class="flex items-center">
          <div class="md:flex items-center">
            <nav>
              <ul class="flex items-center space-x-2 sm:space-x-6 md:space-x-8">
                <li>
                  <a
                    class="
                      bg-slate-900
                      hover:bg-slate-700
                      focus:outline-none
                      focus:ring-2
                      focus:ring-slate-400
                      focus:ring-offset-2
                      focus:ring-offset-slate-50
                      text-slate-50
                      sm:h-8 sm:px-6
                      h-6
                      px-4
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
                      sm:h-8 sm:px-6
                      h-6
                      px-4
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
    </div>
  </header>

  <section
    class="h-screen p-5 bg-slate-50"
    id="panduan"
    v-for="ad in welcome"
    :key="ad.id"
  >
    <div class="my-4 sm:my-16 md:my-1 text-center">
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
  </section>

  <section class="bg-slate-50" v-for="ad in welcome" :key="ad.id">
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
  </section>
  <footers />
</template>

<script>
import { defineComponent } from "vue";
import { Head } from "@inertiajs/inertia-vue3";
import Footers from "@/Layouts/Footer.vue";
export default defineComponent({
  components: {
    Head,
    Footers,
  },
  props: {
    welcome: Object,
  },
});
</script>
