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
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
          <div
            class="
              mt-6
              space-y-12
              lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6
            "
          >
            <div
              v-for="callout in callouts"
              :key="callout.name"
              class="group relative"
            >
              <div
                class="
                  relative
                  w-full
                  h-80
                  bg-white
                  rounded-lg
                  overflow-hidden
                  group-hover:opacity-75
                  sm:aspect-w-2 sm:aspect-h-1 sm:h-64
                  lg:aspect-w-1 lg:aspect-h-1
                "
              >
                <img
                  :src="callout.imageSrc"
                  :alt="callout.imageAlt"
                  class="w-full h-full object-center object-cover"
                />
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a :href="callout.href">
                  <span class="absolute inset-0" />
                  {{ callout.name }}
                </a>
              </h3>
              <p class="text-base font-roboto font-semibold text-slate-900">
                {{ callout.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const callouts = [
  {
    name: "Bangkitan Tinggi",
    description: "Dokumen Andalalin",
    imageSrc:
      "/components/ra.jpg",
    imageAlt:
      "Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.",
    href: "/andal/create",
  },
  {
    name: "Bangkitan Sedang",
    description: "Rekomendasi Teknis",
    imageSrc:
      "/components/rt.jpg",
    imageAlt:
      "Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.",
    href: "/rt/create",
  },
  {
    name: "Bangkitan Rendah",
    description: "Standar Teknis",
    imageSrc:
      "/components/st.jpg",
    imageAlt: "Collection of four insulated travel bottles on wooden shelf.",
    href: "/st/create",
  },
];

import { defineComponent } from "vue";
import Sidebar from "@/Layouts/Sidebar.vue";

export default defineComponent({
  components: {
    Sidebar,
  },
  setup() {
    return {
      callouts,
    };
  },
});
</script>
