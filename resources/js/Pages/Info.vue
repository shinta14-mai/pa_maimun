<template>
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
                    <button class="inline-block my-8 font-bold text-gray-800">
                    </button>
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
                    <button class="inline-block my-8 font-bold text-gray-800">
                    </button>
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
                    <button class="inline-block my-8 font-bold text-gray-800">
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="my-20 sm:my-24 md:my-8 text-center">
      <h1
        class="
          text-xl
          sm:text-3xl
          md:text-4xl
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

      <div class="p-8 rounded-md w-full">
        <div class="flex items-center justify-between pb-6">
          <div class="hidden md:block">
            <h2 class="text-gray-600 font-semibold">
              Daftar Pengajuan Andalalin
            </h2>
          </div>
          <div class="flex items-center justify-between">
            <div class="lg:ml-40 ml-10 space-x-8">
              <Link
                href="/buat-pengajuan"
                class="
                  bg-slate-900
                  relative
                  flex flex-row
                  items-center
                  px-4
                  py-2
                  rounded-md
                  text-sm text-white
                  font-semibold
                  tracking-wide
                  cursor-pointer
                "
              >
                <span class="inline-flex justify-center items-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 my-auto"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                    />
                  </svg>
                </span>
                <span class="text-slate-50 ml-2 text-sm tracking-wide truncate"
                  >Pengajuan Baru</span
                >
              </Link>
            </div>
          </div>
        </div>
        <div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div
              class="inline-block min-w-full shadow rounded-lg overflow-hidden"
            >
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="
                        px-5
                        py-3
                        border-b-2 border-slate-900
                        bg-abu
                        text-left text-xs
                        font-semibold
                        text-slate-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Kode Registrasi
                    </th>
                    <th
                      class="
                        px-5
                        py-3
                        border-b-2 border-slate-900
                        bg-abu
                        text-left text-xs
                        font-semibold
                        text-slate-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Kategori Pengajuan
                    </th>
                    <th
                      class="
                        px-5
                        py-3
                        border-b-2 border-slate-900
                        bg-abu
                        text-left text-xs
                        font-semibold
                        text-slate-50
                        uppercase
                        tracking-wider
                      "
                    >
                      identitas
                    </th>
                    <th
                      class="
                        px-5
                        py-3
                        border-b-2 border-slate-900
                        bg-abu
                        text-left text-xs
                        font-semibold
                        text-slate-50
                        uppercase
                        tracking-wider
                      "
                    >
                      Status pengajuan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="ad in andal" :key="ad.id">
                    <td
                      class="
                        px-5
                        py-5
                        border-b border-gray-200
                        bg-white
                        text-sm
                      "
                    >
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ ad.kode }}
                      </p>
                    </td>
                    <td
                      class="
                        px-5
                        py-5
                        border-b border-gray-200
                        bg-white
                        text-sm
                      "
                    >
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ ad.nama_pemohon }}
                      </p>
                    </td>
                    <td
                      class="
                        px-5
                        py-5
                        border-b border-gray-200
                        bg-white
                        text-sm
                      "
                    >
                      <p class="text-gray-900 whitespace-no-wrap">
                        {{ ad.nama_pemohon }}
                      </p>
                    </td>
                    <td
                      class="
                        px-5
                        py-5
                        border-b border-gray-200
                        bg-white
                        text-sm
                      "
                    >
                      <span
                        class="
                          relative
                          inline-block
                          px-3
                          py-1
                          font-semibold
                          text-green-900
                          leading-tight
                        "
                      >
                        <span
                          aria-hidden
                          class="
                            absolute
                            inset-0
                            bg-green-200
                            opacity-50
                            rounded-full
                          "
                        ></span>
                        <span class="relative">Detail</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div
                class="
                  px-5
                  py-5
                  bg-white
                  border-t
                  flex flex-col
                  xs:flex-row
                  items-center
                  xs:justify-between
                "
              >
                <span class="text-xs xs:text-sm text-gray-900">
                  Showing 1 to 4 of 50 Entries
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                  <button
                    class="
                      text-sm text-indigo-50
                      transition
                      duration-150
                      hover:bg-indigo-500
                      bg-indigo-600
                      font-semibold
                      py-2
                      px-4
                      rounded-l
                    "
                  >
                    Prev
                  </button>
                  &nbsp; &nbsp;
                  <button
                    class="
                      text-sm text-indigo-50
                      transition
                      duration-150
                      hover:bg-indigo-500
                      bg-indigo-600
                      font-semibold
                      py-2
                      px-4
                      rounded-r
                    "
                  >
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const callouts = [
  {
    name: "Bangkitan Tinggi",
    description: "Dokumen Andalalin",
    imageSrc: "/components/ra.jpg",
    imageAlt:
      "Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.",
    href: "#",
  },
  {
    name: "Bangkitan Sedang",
    description: "Rekomendasi Teknis",
    imageSrc: "/components/rt.jpg",
    imageAlt:
      "Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.",
    href: "#",
  },
  {
    name: "Bangkitan Rendah",
    description: "Standar Teknis",
    imageSrc: "/components/st.jpg",
    imageAlt: "Collection of four insulated travel bottles on wooden shelf.",
    href: "#",
  },
];
import { defineComponent } from "vue";
import Sidebar from "@/Layouts/Sidebar.vue";

export default defineComponent({
  components: {
    Sidebar,
  },

  props: {
    andal: Object,
  },

  setup() {
    return {
      callouts,
    };
  },
});
</script>
