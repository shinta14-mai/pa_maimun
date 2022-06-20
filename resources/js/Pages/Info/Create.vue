<template>
  <Head title="Buat Pengajuan" />
  <div
    class="
      min-h-screen
      flex flex-col flex-auto flex-shrink-0
      antialiased
      bg-slate-50
      text-black
    "
  >
    <div class="h-screen ml-14 md:ml-64">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto py-2 sm:py-6 lg:py-16 lg:max-w-none">
          <form @submit.prevent="submit" enctype="multipart/form-data">
            <div class="mx-auto md:px-52 px-10">
              <div class="mt-4">
                <jet-label for="panduan" value="Panduan Pengajuan Andalalin" />
                <jet-input
                  id="panduan"
                  type="file"
                  class="mt-1 block w-full"
                  @change="setP"
                  required
                  autofocus
                />
              </div>
              <div class="mt-4">
                <jet-label
                  for="kriteria"
                  value="Ukuran Kriteria Wajib Andalalin"
                />
                <jet-input
                  id="kriteria"
                  type="file"
                  class="mt-1 block w-full"
                  @change="setK"
                  required
                  autofocus
                />
              </div>
              <div class="mt-4">
                <jet-label
                  for="permohonan"
                  value="Surat Permohonan Pengajuan Andalalin"
                />
                <jet-input
                  id="permohonan"
                  type="file"
                  class="mt-1 block w-full"
                  @change="setPR"
                  required
                  autofocus
                />
              </div>
              <div class="mt-4">
                <jet-label for="rekom" value="Surat Rekomendasi Andalalin" />
                <jet-input
                  id="rekom"
                  type="file"
                  class="mt-1 block w-full"
                  @change="setR"
                  required
                  autofocus
                />
              </div>
              <button
                type="submit"
                class="
                  inline-flex
                  justify-center
                  py-2
                  px-4
                  border border-transparent
                  shadow-sm
                  text-sm
                  font-medium
                  rounded-md
                  text-white
                  bg-blue-700
                  hover:bg-blue-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-blue-500
                  disabled:bg-gray-500
                "
              >
                Simpan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import vueRecaptcha from "vue3-recaptcha2";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    JetInput,
    JetLabel,
    vueRecaptcha,
    Head,
  },

  data() {
    return {
      ra: {
        panduan: "",
        kriteria: "",
        permohonan: "",
        rekom: "",
      },
    };
  },
  methods: {
    submit() {
      let data = new FormData();
      data.append("panduan", this.ra.panduan);
      data.append("kriteria", this.ra.kriteria);
      data.append("permohonan", this.ra.permohonan);
      data.append("rekom", this.ra.rekom);
      this.$inertia.post("/info", data);
    },
    setP(e) {
      this.ra.panduan = e.target.files[0];
    },
    setK(e) {
      this.ra.kriteria = e.target.files[0];
    },
    setPR(e) {
      this.ra.permohonan = e.target.files[0];
    },
    setR(e) {
      this.ra.rekom = e.target.files[0];
    },
  },
});
</script>
