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
                  Edit Jadwal Tinjau Lapang
                </DialogTitle>
                <div class="mt-2">
                  <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="mt-4">
                      <jet-label for="tgl_tl" value="Atur Tanggal" />
                      <jet-input
                        id="tgl_tl"
                        type="date"
                        class="mt-1 block w-1/2 text-center mx-auto"
                        v-model="form.tgl_tl"
                        autofocus
                      />
                    </div>

                    <div class="mt-4">
                      <jet-label for="waktu_tl" value="Atur Waktu" />
                      <jet-input
                        id="waktu_tl"
                        type="time"
                        class="mt-1 block w-1/2 text-center mx-auto"
                        v-model="form.waktu_tl"
                        autofocus
                      />
                    </div>

                    <div class="mt-4 hidden">
                      <jet-label for="tracking_id" value="Atur Waktu" />
                      <jet-input
                        id="tracking_id"
                        type="number"
                        class="mt-1 block w-1/2 text-center mx-auto"
                        v-model="form.tracking_id"
                        value="5"
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
        tgl_tl: this.andal.tgl_tl,
        waktu_tl: this.andal.waktu_tl,
        tracking_id: this.andal.tracking_id,
      },
    };
  },
  props: {
    andal: Object,
  },
  methods: {
    submit() {
      this.$inertia.put("/tl/" + this.andal.id, this.form);
    },
  },
};
</script>
