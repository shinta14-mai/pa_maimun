<template>
  <app-layout title="Detail Standar Teknis">
    <div class="py-4">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-2">
        <div class="bg-abu shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-white">
              Informasi Pengajuan Standar Teknis
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-slate-50">
              Detail Identitas dan Persyaratan.
            </p>
          </div>
          <div class="border-t border-slate-900">
            <dl>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Nama Lengkap</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.nama_pemohon }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">
                  Alamat Lengkap
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.alamat_pemohon }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">
                  Nomor Telepon
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.no_tlp }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">
                  Jenis / Nama Usaha
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.jenis_usaha }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Alamat Usaha</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.alamat_usaha }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Luas Lahan</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.luas_lahan }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">
                  Luas Bangunan
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.luas_bangunan }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Status Lahan</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.status_lahan }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Kapasitas</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.kapasitas }}
                </dd>
              </div>
              <div
                class="
                  bg-slate-100
                  px-4
                  py-4
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Email</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ st.email_pemohon }}
                </dd>
              </div>
              <div
                class="
                  bg-white
                  px-4
                  py-5
                  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6
                "
              >
                <dt class="text-sm font-medium text-slate-500">Persyaratan</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  <ul
                    role="list"
                    class="
                      border border-gray-200
                      rounded-md
                      divide-y divide-slate-200
                    "
                  >
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.surat_pemohon }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.surat_pemohon}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.ktp }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.ktp}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                         Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.sertifikat_tanah }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.sertifikat_tanah}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.ktr }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.ktr}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.rencana_tapak }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.rencana_tapak}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                    <li
                      class="
                        pl-3
                        pr-4
                        py-3
                        flex
                        items-center
                        justify-between
                        text-sm
                      "
                    >
                      <div class="w-0 flex-1 flex items-center">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <span class="ml-2 flex-1 w-0 truncate">
                          {{ st.desain_bangunan }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/file_pemohon/${st.desain_bangunan}`"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="
                            font-medium
                            text-indigo-600
                            hover:text-indigo-500
                          "
                        >
                          Lihat Selengkapnya
                        </a>
                      </div>
                    </li>
                  </ul>
                </dd>
              </div>
            </dl>
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
// import { PaperClipIcon } from '@heroicons/vue/solid'

export default defineComponent({
  components: {
    AppLayout,
    Link,
    // PaperClipIcon,
  },
  props: {
    st: Object,
  },
});
</script>
