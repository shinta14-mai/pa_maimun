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
                    <tr v-for="ad in info" :key="ad.id">
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-biru
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          uppercase
                          tracking-wider
                        "
                      >
                        Panduan Pengajuan Andalalin
                      </th>
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-slate-50
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          tracking-wider
                        "
                      >
                        <a
                          :href="`/storage/${ad.panduan}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            tracking-wider text-sm
                            text-slate-900
                            hover:text-indigo-500
                          "
                        >
                          {{ ad.panduan }}
                        </a>
                      </th>
                    </tr>

                    <tr v-for="ad in info" :key="ad.id">
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-biru
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          uppercase
                          tracking-wider
                        "
                      >
                        Kriteria Ukuran Wajib Andalalin
                      </th>
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-slate-50
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          tracking-wider
                        "
                      >
                        <a
                          :href="`/storage/${ad.kriteria}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            tracking-wider text-sm
                            text-slate-900
                            hover:text-indigo-500
                          "
                        >
                          {{ ad.kriteria }}
                        </a>
                      </th>
                    </tr>

                    <tr v-for="ad in info" :key="ad.id">
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-biru
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          uppercase
                          tracking-wider
                        "
                      >
                        Surat Permohonan Pengajuan Andalalin
                      </th>
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-slate-50
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          tracking-wider
                        "
                      >
                        <a
                          :href="`/storage/${ad.permohonan}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            tracking-wider text-sm
                            text-slate-900
                            hover:text-indigo-500
                          "
                        >
                          {{ ad.permohonan }}
                        </a>
                      </th>
                    </tr>

                    <tr v-for="ad in info" :key="ad.id">
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-biru
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          uppercase
                          tracking-wider
                        "
                      >
                        Surat Rekomendasi Andalalin
                      </th>
                      <th
                        class="
                          px-5
                          py-5
                          border-b-2 border-slate-900
                          bg-slate-50
                          text-left text-xs
                          font-semibold
                          text-slate-50
                          tracking-wider
                        "
                      >
                        <a
                          :href="`/storage/${ad.rekom}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            tracking-wider text-sm
                            text-slate-900
                            hover:text-indigo-500
                          "
                        >
                          {{ ad.rekom }}
                        </a>
                      </th>
                    </tr>
                  </thead>
                </table>
                <div
                  class="mt-2 flex justify-center text-base"
                  v-for="ad in info"
                  :key="ad.id"
                >
                  <Link
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
                      h-10
                      mb-3
                      px-6
                      rounded-lg
                      w-full
                      flex
                      items-center
                      justify-center
                      sm:w-auto
                      text-xs
                      md:text-base
                    "
                    :href="`/info/${ad.id}/edit`"
                    >Edit</Link
                  >
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

export default defineComponent({
  components: {
    AppLayout,
    Link,
  },
  props: {
    info: Object,
  },
});
</script>
