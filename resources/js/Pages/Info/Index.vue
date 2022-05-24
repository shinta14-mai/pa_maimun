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
