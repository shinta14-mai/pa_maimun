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
          <a
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
            "
            href="#panduan"
            >Buat Pengajuan Sekarang</a
          >
        </div>
      </div>
    </div>
  </div>
</template>

  <script>
import { defineComponent } from "vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import Sidebar from "@/Layouts/Sidebar.vue";

export default defineComponent({
  components: {
    JetDropdownLink,
    Sidebar,
  },

  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
});
</script>
