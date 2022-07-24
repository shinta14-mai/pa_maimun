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
                      <jet-label for="surat_pemohon" value="Surat Permohonan"/>
                      <file-input v-model="form.surat_pemohon" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label
                        for="ktp"
                        value="Kartu Tanda Penduduk"
                      />
                      <file-input v-model="form.ktp" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label for="sertifikat_tanah" value="Sertifikat Tanah"/>
                      <file-input v-model="form.sertifikat_tanah" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label for="ktr" value="Kesesuaian Tata Ruang"/>
                      <file-input v-model="form.ktr" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label
                        for="rencana_tapak"
                        value="Rencana Tapak"
                      />
                      <file-input v-model="form.rencana_tapak" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label for="desain_bangunan" value="Desain Bangunan"/>
                      <file-input v-model="form.desain_bangunan" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label for="company_profile" value="Company Profile"/>
                      <file-input v-model="form.company_profile" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label for="sertifikat_penyusun" value="Sertifikat Penyusun"/>
                      <file-input v-model="form.sertifikat_penyusun" type="file" />
                    </div>

                    <div class="mt-4">
                      <jet-label
                        for="dokumen_andalalin"
                        value="Dokumen Andalalin"
                      />
                      <file-input v-model="form.dokumen_andalalin" type="file" />
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
        surat_pemohon: null,
        ktp: null,
        sertifikat_tanah: null,
        ktr: null,
        rencana_tapak: null,
        desain_bangunan: null,
        company_profile: null,
        sertifikat_penyusun: null,
        dokumen_andalalin: null,
      }),
    };
  },
  methods: {
    update() {
      this.form.post(`/redirects/${this.andalalin.id}`, {
        onSuccess: () => this.form.reset("file"),
      });
    },
  },
};
</script>
