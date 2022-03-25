<template>
  <!-- Sidebar -->
  <div
    class="
      fixed
      flex flex-col
      left-0
      w-14
      hover:w-64
      md:w-64
      bg-biru
      h-full
      text-white
      transition-all
      duration-300
      border-none
      z-10
      sidebar
    "
  >
    <div
      class="
        overflow-y-auto overflow-x-hidden
        flex flex-col
        justify-between
        flex-grow
      "
    >
      <span
        class="
          hidden
          md:block
          mx-auto
          justify-center
          items-center
          py-8
        "
      >
        <jet-dropdown-link :href="route('profile.show')">
          <img
            class="sm:h-20 sm:w-20 h-10 w-10 rounded-full object-cover"
            :src="$page.props.user.profile_photo_url"
            :alt="$page.props.user.name"
          />
          <div class="text-slate-50 font-medium text-base">
            {{ $page.props.user.name }}
          </div>
        </jet-dropdown-link>
      </span>

      <ul class="flex flex-col py-4 mb-24 space-y-1">
        <li>
          <Link
            href="/dashboard"
            class="
              relative
              flex flex-row
              items-center
              h-11
              focus:outline-none
              hover:bg-blue-800
              text-white-600
              hover:text-white-800
              border-l-4 border-transparent
              hover:border-blue-500
              pr-6
            "
          >
            <span class="inline-flex justify-center items-center ml-4">
              <svg
                class="w-5 h-5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                ></path>
              </svg>
            </span>
            <span class="text-slate-50 ml-2 text-sm tracking-wide truncate">Dashboard</span>
          </Link>
        </li>
        <li>
          <Link
            href="/info"
            class="
              relative
              flex flex-row
              items-center
              h-11
              focus:outline-none
              hover:bg-blue-800
              text-white-600
              hover:text-white-800
              border-l-4 border-transparent
              hover:border-blue-500
              pr-6
            "
          >
            <span class="inline-flex justify-center items-center ml-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </span>
            <span class="text-slate-50 ml-2 text-sm tracking-wide truncate">Info</span>
            <span
              class="
                hidden
                md:block
                px-2
                py-0.5
                ml-auto
                text-xs
                font-medium
                tracking-wide
                text-blue-500
                bg-indigo-50
                rounded-full
              "
              >New</span
            >
          </Link>
        </li>
        <li>
          <Link
            href="/buat-pengajuan"
            class="
              relative
              flex flex-row
              items-center
              h-11
              focus:outline-none
              hover:bg-blue-800
              text-white-600
              hover:text-white-800
              border-l-4 border-transparent
              hover:border-blue-500
              pr-6
            "
          >
            <span class="inline-flex justify-center items-center ml-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                />
              </svg>
            </span>
            <span class="text-slate-50 ml-2 text-sm tracking-wide truncate"
              >Buat Pengajuan</span
            >
          </Link>
        </li>
        <li>
          <form @submit.prevent="logout">
            <button
              type="submit"
              href="/logout"
              class="
                relative
                flex flex-row
                items-center
                h-11 w-full
                focus:outline-none
                hover:bg-blue-800
                text-white-600
                hover:text-white-800
                border-l-4 border-transparent
                hover:border-blue-500
                pr-6
              "
            >
              <span class="inline-flex justify-center items-center ml-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                  />
                </svg>
              </span>
              <span class="ml- text-slate-50 sm:ml-2 text-sm tracking-wide truncate"
                >Logout
              </span>
            </button>
          </form>
        </li>
      </ul>
      <p class="text-slate-50 mb-14 px-5 py-3 hidden md:block text-center text-xs">
        Aplikasi Pengajuan Surat Rekomendasi Analisis Dampak Lalu Lintas @2022
      </p>
    </div>
  </div>
  <!-- ./Sidebar -->
</template>

  <script>
import { defineComponent } from "vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  components: {
    JetDropdownLink,
    Link,
  },

  methods: {
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
});
</script>
