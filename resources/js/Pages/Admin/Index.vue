<template>
  <app-layout title="Admin Dashboard">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
        <div class="bg-slate-50 shadow-xl sm:rounded-lg">
          <Welcome />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Welcome from '@/Jetstream/Welcome.vue'

export default defineComponent({
  components: {
    AppLayout,
    Link,
    Welcome
  },
});
</script>
