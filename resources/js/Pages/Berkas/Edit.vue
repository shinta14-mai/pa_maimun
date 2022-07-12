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
                  Unggah Dokumen
                </DialogTitle>
                <div class="mt-2">
                  <form @submit.prevent="update" enctype="multipart/form-data">
                    <div class="mt-4">
                      <jet-label
                        for="tracking_id"
                        value="Pilih File yang Akan Diunggah"
                      />
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
                        <option value="6">Undangan Rapat</option>
                        <option value="7">Surat Pernyataan</option>
                        <option value="8">Surat Rekomendasi</option>
                      </select>
                    </div>
                    <div class="mt-4" v-if="andalalin.tracking_id == 5">
                      <jet-label for="undangan_rapat" value="Undangan Rapat" class="hidden"/>
                      <file-input v-model="form.undangan_rapat" type="file" />
                    </div>

                    <div class="mt-4" v-if="andalalin.tracking_id == 6">
                      <jet-label
                        for="surat_pernyataan"
                        value="Surat Pernyataan"
                        class="hidden"
                      />
                      <file-input v-model="form.surat_pernyataan" type="file" />
                    </div>

                    <div class="mt-4" v-if="andalalin.tracking_id == 7">
                      <jet-label for="surat_rekom" value="Surat Rekomendasi" class="hidden"/>
                      <file-input v-model="form.surat_rekom" type="file" />
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
import JetLabel from "@/Jetstream/Label.vue";
import FileInput from "@/Shared/FileInput";

export default {
  components: {
    Dialog,
    DialogOverlay,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
    JetLabel,
    FileInput,
  },
  setup() {
    const open = ref(true);
    return {
      open,
    };
  },
  props: {
    andalalin: Object,
  },
  remember: "form",
  data() {
    return {
      form: this.$inertia.form({
        _method: "put",
        undangan_rapat: null,
        surat_pernyataan: null,
        surat_rekom: null,
        tracking_id: null,
      }),
    };
  },
  methods: {
    update() {
      this.form.post(`/berkas/${this.andalalin.id}`, {
        onSuccess: () => this.form.reset("file"),
      });
    },
  },
};
</script>
