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
      <!-- component -->
      <div class="w-10/12 md:w-7/12 lg:6/12 mx-auto relative py-20">
        <h1 class="text-2xl text-center font-bold text-slate-900">
         Informasi Detail Status Pengajuan
        </h1>
        <div class="border-l-2 mt-10">
          <!-- Card 1 -->
          <ul>
              <li v-for="ad in andal" :key="ad.id">
              <div
            class="
              transform
              transition
              cursor-pointer
              hover:-translate-y-2
              ml-10
              relative
              flex
              items-center
              px-6
              py-4
              bg-blue-600
              text-white
              rounded
              mb-10
              flex-col
              md:flex-row
              space-y-4
              md:space-y-0
            "
          >
            <!-- Dot Follwing the Left Vertical Line -->
            <div
              class="
                w-5
                h-5
                bg-birmud
                absolute
                -left-10
                transform
                -translate-x-2/4
                rounded-full
                z-10
                mt-2
                md:mt-0
              "
            ></div>

            <!-- Line that connecting the box with the vertical line -->
            <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>

            <!-- Content that showing in the box -->
            <div class="flex-auto">
              <h1 class="text-lg">{{  andal.verifikasi }}</h1>
              <h1 class="text-xl font-bold">
                Orientation and Briefing on Uniliver basics
              </h1>
              <h3>Classroom</h3>
            </div>
            <a href="#" class="text-center text-white hover:text-gray-300"
              >Download materials</a
            >
          </div>
              </li>
          </ul>
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
  props: {
      andal: Object
  }
});
</script>
