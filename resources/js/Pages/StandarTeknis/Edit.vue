<template>
  <app-layout title="Admin Dashboard">
    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
        <div class="bg-slate-50 shadow-xl sm:rounded-lg">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto py-2 sm:py-6 lg:py-16 lg:max-w-none">
              <form @submit.prevent="submit" enctype="multipart/form-data">
                <div class="md:grid md:gap-4 md:grid-cols-2 md:justify-center">
                  <div class="bg-slate-100 rounded-lg shadow-xl">
                    <div class="py-8 px-10">
                      <p
                        class="
                          text-xl
                          bold
                          text-slate-900
                          font-extrabold font-roboto
                          leading-6
                          text-center
                          uppercase
                        "
                      >
                        edit status verifikasi
                      </p>
                      <div class="mt-4">
                        <jet-label for="verifikasi" value="Ubah Status" />
                        <select
                          class="
                            form-control
                            border border-gray-300
                            rounded-md
                            text-gray-600
                            h-10
                            px-20
                            bg-white
                            hover:border-gray-400
                            focus:outline-none
                            appearance-none
                          "
                          v-model="form.verifikasi"
                        >
                          <option>Diperiksa</option>
                          <option value="Diterima">Diterima</option>
                          <option value="Ditolak">Ditolak</option>
                        </select>
                      </div>

                      <div class="flex items-center justify-end mt-4">
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
                            bg-biru
                            hover:bg-blue-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-blue-500
                            disabled:bg-slate-900
                          "
                        >
                          Simpan
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="bg-slate-100 rounded-lg shadow-xl">
                    <div class="py-8 px-10">
                      <p
                        class="
                          text-xl
                          bold
                          text-slate-900
                          font-extrabold font-roboto
                          leading-6
                          text-center
                          uppercase
                        "
                      >
                        edit jadwal tinjau lapang
                      </p>
                      <div class="mt-4">
                        <jet-label for="tgl_tl" value="Atur Tanggal" />
                        <jet-input
                          id="tgl_tl"
                          type="date"
                          class="mt-1 block w-1/2"
                          v-model="form.tgl_tl"
                          autofocus
                        />
                      </div>

                      <div class="mt-4">
                        <jet-label for="waktu_tl" value="Atur Waktu" />
                        <jet-input
                          id="waktu_tl"
                          type="time"
                          class="mt-1 block w-1/2"
                          v-model="form.waktu_tl"
                          autofocus
                        />
                      </div>

                      <div class="flex items-center justify-end mt-4">
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
                            bg-biru
                            hover:bg-blue-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-blue-500
                            disabled:bg-slate-900
                          "
                        >
                          Simpan
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";

export default defineComponent({
  components: {
    AppLayout,
    Link,
    JetInput,
    JetLabel,
  },
  data() {
    return {
      form: {
        verifikasi: this.st.verifikasi,
        tgl_tl: this.st.tgl_tl,
        waktu_tl: this.st.waktu_tl,
      },
    };
  },
  props: {
    st: Object,
  },
  methods: {
    submit() {
      this.$inertia.put("/st/" + this.st.id, this.form);
    },
  },
});
</script>
