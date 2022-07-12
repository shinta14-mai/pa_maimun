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
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-2 py-6">
        <div class="bg-abu shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-white">
              Informasi Pengajuan Dokumen Andalalin
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
                <dt class="text-sm font-medium text-slate-500">
                  Nama Kategori
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ andal.nama_kategori }}
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
                  Kode Registrasi
                </dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ andal.kode }}
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
                <dt class="text-sm font-medium text-slate-500">Nama Lengkap</dt>
                <dd class="mt-1 text-sm text-slate-900 sm:mt-0 sm:col-span-2">
                  {{ andal.nama_pemohon }}
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
                  {{ andal.alamat_pemohon }}
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
                  {{ andal.no_tlp }}
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
                  {{ andal.jenis_usaha }}
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
                  {{ andal.alamat_usaha }}
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
                  {{ andal.luas_lahan }}
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
                  {{ andal.luas_bangunan }}
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
                  {{ andal.status_lahan }}
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
                  {{ andal.kapasitas }}
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
                  {{ andal.email_pemohon }}
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
                          {{ andal.surat_pemohon }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.surat_pemohon}`"
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
                          {{ andal.ktp }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.ktp}`"
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
                          {{ andal.sertifikat_tanah }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.sertifikat_tanah}`"
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
                          {{ andal.ktr }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.ktr}`"
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
                          {{ andal.rencana_tapak }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.rencana_tapak}`"
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
                          {{ andal.desain_bangunan }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.desain_bangunan}`"
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
                      v-if="andal.company_profile != null"
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
                          {{ andal.company_profile }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.company_profile}`"
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
                      v-if="andal.sertifikat_penyusun != null"
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
                          {{ andal.sertifikat_penyusun }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.sertifikat_penyusun}`"
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
                      v-if="andal.dokumen_andalalin != null"
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
                          {{ andal.dokumen_andalalin }}
                        </span>
                      </div>
                      <div class="ml-4 flex-shrink-0">
                        <a
                          :href="`/storage/${andal.dokumen_andalalin}`"
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
  </div>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import Sidebar from "@/Layouts/Sidebar.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";

export default defineComponent({
  components: {
    Link,
    Sidebar,
    JetInput,
    JetLabel,
  },

  props: {
    andal: Object,
  },
});
</script>
