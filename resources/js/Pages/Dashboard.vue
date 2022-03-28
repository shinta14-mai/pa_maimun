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
      <div class="mx-auto my-24">
        <img
          src="/components/empty.png"
          class="sm:w-2/5 sm:h-2/5 w-full h-full block items-center mx-auto"
        />
        <p
          class="
            mt-1
            text-sm
            sm:text-md
            lg:text-lg
            text-slate-600 text-center
            max-w-3xl
            mx-auto
          "
        >
          Anda Belum Memiliki Berkas Pengajuan.
        </p>
        <div class="mt-2 flex justify-center text-base">
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
              h-12
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
            href="/buat-pengajuan"
            >Buat Pengajuan Sekarang</Link
          >
        </div>
      </div>

      <!-- component -->
      <!-- <div class="p-8 rounded-md w-full">
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
                      <p class="text-gray-900 whitespace-no-wrap">{{ ad.kode }}</p>
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
                        {{ ad.nama_pemohon}}
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
                      <p class="text-gray-900 whitespace-no-wrap">{{ ad.nama_pemohon}}</p>
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
      </div> -->
    </div>
  </div>
</template>

  <script>
import { defineComponent } from "vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import Sidebar from "@/Layouts/Sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import _ from "lodash";

export default defineComponent({
  components: {
    JetDropdownLink,
    Sidebar,
    Head,
    Link,
  },

  props:{
      andal: Object,
  },

  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
});
</script>
