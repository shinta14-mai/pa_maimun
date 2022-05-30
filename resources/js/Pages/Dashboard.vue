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
      <div class="mx-auto my-auto">
          <img
          src="/components/Hello-pana.png"
          class="sm:w-2/6 sm:h-2/6 w-1/4 h-full hidden md:block items-center mx-auto"
        />
          <h1
          class="
            text-slate-900
            font-extrabold
            text-md
            sm:text-xl
            lg:text-2xl
            tracking-tight
            text-center
            font-roboto
          "
        >
          Selamat Datang di Aplikasi Pengajuan Andalalin
          <br />Dinas Perhubungan Kabupaten Banyuwangi.
        </h1>

        <p
          class="
            mt-5
            text-sm
            sm:text-sm
            lg:text-md
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
            href="/andal/create"
            >Buat Pengajuan Sekarang</Link
          >
        </div>
      </div>
    </div>
  </div>
</template>

  <script>
import { defineComponent } from "vue";
import Sidebar from "@/Layouts/Sidebar.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Sidebar,
    Head,
    Link,
  },
});
</script>
