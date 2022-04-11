<template>
  <app-layout title="Admin Dashboard">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
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
                        persyaratan
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
                        aksi
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
                        <div class="text-slate-900 uppercase whitespace-no-wrap">
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
                        <div class="text-slate-900 uppercase whitespace-no-wrap">
                          {{ ad.jenis_usaha }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.status_lahan }}
                        </div>
                        <div class="text-slate-500 whitespace-no-wrap">
                          {{ ad.alamat_usaha }}
                        </div>
                      </td>
                      <td class="px-5 py-5 border-b border-gray-200
                          bg-white
                          text-sm">
                          <span
                            class="
                              px-2
                              py-1
                              inline-flex
                              text-sm
                              leading-5
                              font-semibold
                              rounded-lg
                              bg-slate-700
                              text-white
                            "
                          >
                            <Link :href="`/andal/${ad.id}`">Details</Link>
                          </span>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200
                          bg-white
                          text-sm">
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
                              text-black
                            "
                          >
                            <Link :href="`/andal/${ad.id}/edit`">Edit</Link>
                          </span>
                          <span
                            class="
                              px-2
                              py-1
                              ml-2
                              inline-flex
                              text-sm
                              leading-5
                              font-semibold
                              rounded-lg
                              bg-abu
                              text-white
                            "
                          >
                            <Link :href="`/andal/${ad.id}`">Unggah</Link>
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
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  components: {
    AppLayout,
    Link,
  },
  props: {
    andal: Object,
  },
});
</script>
