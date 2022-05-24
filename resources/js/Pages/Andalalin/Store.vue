<template>
  <div class="max-w-auto">
    <div class="sm:text-center lg:text-center text-lg">
      <div class="mx-auto my-2">
        <img
          src="/components/ok.png"
          class="sm:w-2/5 sm:h-2/5 w-1/6 h-1/6 block items-center mx-auto"
        />
        <p
          class="
            mt-1
            text-sm
            sm:text-md
            lg:text-2xl
            font-extrabold font-roboto
            text-slate-900 text-center
            max-w-3xl
            mx-auto
          "
        >
          Terimakasih
        </p>
        <p
          class="
            mt-1
            text-sm
            sm:text-md
            lg:text-lg
            font-extrabold
            text-slate-900 text-center
            max-w-3xl
            mx-auto
          "
        >
          Pengajuan Anda Sedang Diproses <br />
          <span class="block xl:inline text-black"
            >Nomor Registrasi Anda : {{ code }}
          </span>
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
            href="/redirects"
            >Kembali ke Dashboard</Link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    title: Array,
    code: String,
  },
  components: {
    Link,
  },
};
</script>

<style>
</style>
