<template>
  <TransitionRoot as="template" :show="open">
    <Dialog
      as="div"
      class="fixed z-10 inset-0 overflow-y-auto"
      @close="open = false"
    >
      <div
        class="
          flex
          items-end
          justify-center
          min-h-screen
          pt-4
          px-4
          pb-20
          text-center
          sm:block sm:p-0
        "
      >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in duration-200"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <DialogOverlay
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
          />
        </TransitionChild>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span
          class="hidden sm:inline-block sm:align-middle sm:h-screen"
          aria-hidden="true"
          >&#8203;</span
        >
        <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          enter-to="opacity-100 translate-y-0 sm:scale-100"
          leave="ease-in duration-200"
          leave-from="opacity-100 translate-y-0 sm:scale-100"
          leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
          <div
            class="
              relative
              my-auto
              inline-block
              align-bottom
              bg-slate-50
              rounded-lg
              text-left
              overflow-hidden
              shadow-xl
              transform
              transition-all
              sm:my-8 sm:align-middle sm:max-w-lg sm:w-full
            "
          >
            <div class="bg-white px-4 pt-5 pb-4 mx-auto sm:p-6 sm:pb-4">
              <div class="mt-3 mx-auto text-center sm:mt-0">
                <DialogTitle
                  as="h3"
                  class="
                    text-lg
                    leading-6
                    font-extrabold
                    text-slate-900
                    uppercase
                    font-roboto
                  "
                >
                  Edit Status Verifikasi
                </DialogTitle>
                <div class="mt-2">
                  <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="mt-4">
                      <select
                        class="
                          form-control
                          border border-gray-300
                          rounded-full
                          text-gray-600
                          h-10
                          px-20
                          bg-white
                          hover:border-gray-400
                          focus:outline-none
                          appearance-none
                        "
                        v-model="form.tracking_id"
                      >
                        <option value="1" disabled>Pengajuan Baru</option>
                        <option value="2" v-show="andal.tracking_id != 9 && andal.tracking_id != 10">Konfirmasi Pengajuan</option>
                        <option value="3">Diterima</option>
                        <option value="4">Ditolak</option>
                      </select>
                    </div>
                    <div class="mt-8" v-show="form.tracking_id == 4">
                      <jet-label
                        for="keterangan"
                        value="Tambahkan Keterangan Penolakan"
                      />
                      <jet-input
                        id="keterangan"
                        type="text"
                        class="mt-1 block mx-auto w-1/2"
                        v-model="form.keterangan"
                        autofocus
                      />
                    </div>
                    <button
                      type="submit"
                      class="
                        mt-10
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
                      "
                    >
                      Simpan
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </TransitionChild>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script>
import { ref } from "vue";
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
// import { ExclamationIcon } from '@heroicons/vue/outline'
export default {
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    JetInput,
    JetLabel,
    // ExclamationIcon,
  },
  setup() {
    const open = ref(true);
    return {
      open,
    };
  },
  data() {
    return {
      form: {
        tracking_id: this.andal.tracking_id,
        keterangan: this.andal.keterangan,
      },
    };
  },
  props: {
    andal: Object,
  },
  methods: {
    submit() {
      this.$inertia.put("/andal/" + this.andal.id, this.form);
    },
  },
};
</script>
