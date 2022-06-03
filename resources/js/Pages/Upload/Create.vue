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
              <div class="mt-3 mx-auto sm:mt-0">
                <DialogTitle
                  as="h3"
                  class="
                    text-lg text-center
                    leading-6
                    font-extrabold
                    text-slate-900
                    uppercase
                    font-roboto
                  "
                >
                  Unggah Berkas
                </DialogTitle>
                <div class="mt-2">
                  <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="mt-6">
                      <span class="inline-flex mr-2">
                        <jet-label
                          for="undangan_rapat"
                          value="Undangan Rapat"
                        />
                      </span>
                      <span
                        class="
                          text-md
                          font-medium
                          text-sm text-green-500
                          italic
                        " v-if="andal.undangan_rapat != null"
                        >(Telah Diunggah)</span
                      >
                      <input
                        id="undangan_rapat"
                        type="file"
                        class="mt-1 block w-full"
                        @change="setUR"
                        autofocus
                      />
                    </div>
                    <div class="mt-6">
                      <span class="inline-flex mr-2">
                        <jet-label
                          for="surat_pernyataan"
                          value="Surat Pernyataan"
                        />
                      </span>
                      <span
                        class="
                          text-md
                          font-medium
                          text-sm text-green-500
                          italic
                        " v-if="andal.surat_pernyataan != null"
                        >(Telah Diunggah)</span
                      >
                      <input
                        id="surat_pernyataan"
                        type="file"
                        class="mt-1 block w-full"
                        @change="setSP"
                        autofocus
                      />
                    </div>
                    <div class="mt-6">
                      <span class="inline-flex mr-2">
                        <jet-label
                          for="surat_rekom"
                          value="Surat Rekomendasi"
                        />
                      </span>
                      <span
                        class="
                          text-md
                          font-medium
                          text-sm text-green-500
                          italic
                        " v-if="andal.surat_rekom != null"
                        >(Telah Diunggah)</span
                      >
                      <input
                        id="surat_rekom"
                        type="file"
                        class="mt-1 block w-full"
                        @change="setSR"
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
                        disabled:bg-slate-900
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
  props: {
      andal: Object,
  },
  setup() {
    const open = ref(true);
    return {
      open,
    };
  },
  data() {
    return {
      ra: {
        undangan_rapat: "",
        surat_pernyataan: "",
        surat_rekom: "",
      },
    };
  },
  methods: {
    submit() {
      let data = new FormData();
      data.append("undangan_rapat", this.ra.undangan_rapat);
      data.append("surat_pernyataan", this.ra.surat_pernyataan);
      data.append("surat_rekom", this.ra.surat_rekom);

      this.$inertia.post("/upload", data);
    },
    setUR(e) {
      this.ra.undangan_rapat = e.target.files[0];
    },
    setSP(e) {
      this.ra.surat_pernyataan = e.target.files[0];
    },
    setSR(e) {
      this.ra.surat_rekom = e.target.files[0];
    },
  },
};
</script>
