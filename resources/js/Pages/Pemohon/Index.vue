<template>
  <Head title="Dashboard" />
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
                  href="/andal/create"
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
                  <span
                    class="text-slate-50 ml-2 text-sm tracking-wide truncate"
                    >Pengajuan Baru</span
                  >
                </Link>
              </div>
            </div>
          </div>
          <div>
            <span class="inline-flex justify-center items-center">
              <jet-label for="search" value="Search" />
            </span>
            <span class="text-slate-50 ml-2 text-sm tracking-wide truncate"
              ><input
                id="search"
                type="text"
                v-model="term"
                @keyup="search"
                class="ml-2 px-2 py-1 text-sm rounded border"
            /></span>
          </div>
          <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div
                class="
                  inline-block
                  min-w-full
                  shadow
                  rounded-lg
                  overflow-hidden
                "
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
                        nama
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
                        persyaratan
                      </th>
                      <th
                        class="
                          px-5
                          py-3
                          border-b-2 border-slate-900
                          bg-abu
                          text-center text-xs
                          font-semibold
                          text-slate-50
                          uppercase
                          tracking-wider
                        "
                      >
                        status pengajuan
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="ad in andal.data" :key="ad.id">
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
                          {{ ad.nama_kategori }}
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
                            px-2
                            py-1
                            inline-flex
                            text-sm
                            leading-5
                            font-semibold
                            rounded-lg
                            bg-gold
                            hover:bg-yellow-400
                            text-black
                            hover:text-slate-900
                          "
                        >
                          <Link :href="`/redirects/${ad.id}`">Details</Link>
                        </span>
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
                        <p class="text-slate-700 text-xs whitespace-no-wrap">
                          {{ ad.updated_at }}
                        </p>
                        <p class="text-green-700 mb-2 whitespace-no-wrap">
                          {{ ad.tracking.keterangan }}
                        </p>
                        <Link
                          class="text-blue-600 hover:text-blue-500 text-xs"
                          :href="`/redirects/${ad.id}/edit`"
                          v-if="ad.tracking_id == 4"
                          >Edit Pengajuan</Link
                        >
                        <p
                          class="text-blue-600 text-xs whitespace-no-wrap mt-2"
                          v-if="ad.tracking_id == 5"
                        >
                          {{ ad.tgl_tl }} WIB
                        </p>
                        <a
                          :href="`/storage/${ad.undangan_rapat}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-blue-600 hover:text-blue-500 text-xs"
                          v-if="ad.tracking_id == 6"
                        >
                          Lihat Undangan Rapat
                        </a>
                        <a
                          :href="`/storage/${ad.surat_pernyataan}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-blue-600 hover:text-blue-500 text-xs"
                          v-if="ad.tracking_id == 7"
                        >
                          Lihat Surat Pernyataan
                        </a>
                        <a
                          :href="`/storage/${ad.surat_rekom}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-blue-600 hover:text-blue-500 text-xs"
                          v-if="ad.tracking_id == 8"
                        >
                          Lihat Surat Rekomendasi Andalalin
                        </a>
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
                    Menampilkan {{ andal.from }} - {{ andal.to }} dari
                    {{ andal.total }} Pengajuan
                  </span>
                  <div class="inline-flex mt-2 xs:mt-0">
                    <Link
                      :href="andal.prev_page_url"
                      class="
                        text-sm text-slate-50
                        transition
                        duration-150
                        hover:bg-slate-500
                        bg-biru
                        font-semibold
                        py-2
                        px-4
                        rounded-l
                      "
                    >
                      Prev
                    </Link>
                    &nbsp; &nbsp;
                    <Link
                      :href="andal.next_page_url"
                      class="
                        text-sm text-slate-50
                        transition
                        duration-150
                        hover:bg-slate-500
                        bg-biru
                        font-semibold
                        py-2
                        px-4
                        rounded-r
                      "
                    >
                      Next
                    </Link>
                  </div>
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
import { defineComponent } from "vue";
import Sidebar from "@/Layouts/Sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import __ from "lodash";

export default defineComponent({
  components: {
    Sidebar,
    Link,
    Head,
    JetInput,
    JetLabel,
  },
  data() {
    return {
      term: "",
    };
  },
  props: {
    andal: Object,
  },
  methods: {
    search: _.throttle(function () {
      this.$inertia.get("/redirects/", { term: this.term });
    }),
  },
});
</script>
