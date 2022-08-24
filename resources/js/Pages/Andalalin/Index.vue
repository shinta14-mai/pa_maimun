<template>
  <app-layout title="Admin Dashboard">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
        <div class="p-4">
          <span class="inline-flex justify-center items-center">
            <jet-label for="search" value="Search" />
          </span>
          <span class="text-slate-900 ml-2 text-sm tracking-wide truncate"
            ><input
              id="search"
              type="text"
              v-model="term"
              @keyup="search"
              class="ml-2 px-2 py-1 text-sm rounded border"
          /></span>
        </div>
        <div class="bg-slate-50 shadow-xl sm:rounded-lg">
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
                        identitas pemohon
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
                        identitas bangunan
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
                        status
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
                        edit
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
                        <p class="text-slate-900 whitespace-no-wrap">
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
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                        >
                          {{ ad.nama_pemohon }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.email_pemohon }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.no_tlp }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.alamat_pemohon }}
                        </div>
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
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                        >
                          {{ ad.jenis_usaha }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.status_lahan }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.alamat_usaha }}
                        </div>
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
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 1"
                        >
                          PENGAJUAN BARU
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 2"
                        >
                          DIPERIKSA
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 3"
                        >
                          DITERIMA
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 4"
                        >
                          DITOLAK
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 5"
                        >
                          TINJAU LAPANG
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 6"
                        >
                          UNDANGAN RAPAT
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 7"
                        >
                          SURAT PERNYATAAN
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 8"
                        >
                          PENGAJUAN SELESAI
                        </div>
                        <div
                          class="text-slate-900 whitespace-no-wrap"
                          v-if="ad.tracking_id == 9"
                        >
                          PENGAJUAN TELAH DIEDIT <br>
                          <div class="text-slate-500 whitespace-no-wrap text-xs">
                          Terakhir diubah : {{ ad.updated_at }}
                        </div>
                        </div>
                        <div
                          class="text-slate-900 uppercase whitespace-no-wrap"
                          v-if="ad.tracking_id == 10"
                        >
                          DRAFT
                        </div>
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
                            bg-biru
                            hover:bg-slate-500
                            text-white
                            hover:text-slate-50
                          " v-if="ad.tracking_id > 1 && ad.tracking_id < 10"
                        >
                          <Link :href="`/andal/${ad.id}`">Details</Link>
                        </span>
                      </td>
                      <td
                        class="
                          px-5
                          py-5
                          border-b border-gray-200
                          bg-white
                          text-sm text-center
                        "
                      >
                        <span
                          class="
                            px-2
                            py-1
                            sm:ml-2
                            mt-2
                            inline-flex
                            text-sm
                            leading-5
                            font-semibold
                            rounded-lg
                            bg-gold
                            hover:bg-amber-300
                            text-white
                            hover:text-slate-900
                          "
                          v-if="ad.tracking_id == 1 || ad.tracking_id == 2 || ad.tracking_id == 4 || ad.tracking_id == 9 || ad.tracking_id == 10"
                        >
                          <Link :href="`/andal/${ad.id}/edit`">Status</Link>
                        </span>
                        <span
                          class="
                            px-2
                            py-1
                            sm:ml-2
                            mt-2
                            inline-flex
                            text-sm
                            leading-5
                            font-semibold
                            rounded-lg
                            bg-gold
                            hover:bg-amber-300
                            text-white
                            hover:text-slate-900
                          "
                          v-else-if="ad.tracking_id == 3"
                        >
                          <Link :href="`/tl/${ad.id}/edit`">Tinjau Lapang</Link>
                        </span>
                        <span
                          class="
                            px-2
                            py-1
                            sm:ml-2
                            mt-2
                            inline-flex
                            text-sm
                            leading-5
                            font-semibold
                            rounded-lg
                            bg-gold
                            hover:bg-amber-300
                            text-white
                            hover:text-slate-900
                          "
                          v-else
                        >
                          <Link :href="`/berkas/${ad.id}/edit`">Unggah</Link>
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
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import JetLabel from "@/Jetstream/Label.vue";
import __ from "lodash";

export default defineComponent({
  components: {
    AppLayout,
    Link,
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
      this.$inertia.get("/andal/", { term: this.term });
    }),
  },
});
</script>
