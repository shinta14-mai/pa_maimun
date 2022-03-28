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
        <div class="max-w-2xl mx-auto py-2 sm:py-6 lg:py-16 lg:max-w-none">
          <p
            class="
              text-xl
              bold
              text-slate-900
              font-extrabold font-roboto
              leading-6
              text-center
            "
          >
            PERMOHONAN PENYUSUNAN KAJIAN TEKNIS PENGENDALIAN LALU LINTAS
          </p>
          <br />
          <p
            class="
              text-md
              font-medium
              leading-6
              text-slate-900 text-justify
              mx-4
              mb-6
            "
          >
            Bersama dengan ini, kami yang bertandatangan di bawah ini mengajukan
            Kajian Teknis Pengendalian Lalu Lintas dari Dinas Perhubungan
            Kabupaten Banyuwangi. Adapun kajian ini sebagai salah satu
            kelengkapan berkas pengajuan Izin Mendirikan Bangunan (IMB). Adapun
            data dan informasi tempat usaha kami adalah sebagai berikut:
          </p>
          <form @submit.prevent="submit" enctype="multipart/form-data">
            <div class="md:grid md:gap-4 md:grid-cols-2 md:justify-center">
              <div class="px-10">
                <div>
                  <jet-label for="nama_pemohon" value="Nama Pemohon" />
                  <jet-input
                    id="nama_pemohon"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="rt.nama_pemohon"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="alamat_pemohon" value="Alamat Pemohon" />
                  <textarea
                    id="alamat_pemohon"
                    type="text"
                    class="
                      border-gray-300
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      rounded-md
                      shadow-sm
                      mt-1
                      block
                      w-full
                    "
                    v-model="rt.alamat_pemohon"
                    required
                    autofocus
                  ></textarea>
                </div>

                <div class="mt-4">
                  <jet-label for="no_tlp" value="Nomor Telepon" />
                  <jet-input
                    id="no_tlp"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="rt.no_tlp"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="jenis_usaha" value="Jenis / Nama Usaha" />
                  <jet-input
                    id="jenis_usaha"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="rt.jenis_usaha"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="alamat_usaha" value="Alamat Tempat Usaha" />
                  <textarea
                    id="alamat_usaha"
                    type="text"
                    class="
                      border-gray-300
                      focus:border-indigo-300
                      focus:ring
                      focus:ring-indigo-200
                      focus:ring-opacity-50
                      rounded-md
                      shadow-sm
                      mt-1
                      block
                      w-full
                    "
                    v-model="rt.alamat_usaha"
                    required
                    autofocus
                  ></textarea>
                </div>

                <div class="mt-4">
                  <jet-label for="luas_lahan" value="Luas Lahan" />
                  <jet-input
                    id="luas_lahan"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="rt.luas_lahan"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="luas_bangunan" value="Luas Bangunan" />
                  <jet-input
                    id="luas_bangunan"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="rt.luas_bangunan"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="status_lahan" value="Status Lahan" />
                  <jet-input
                    id="status_lahan"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="rt.status_lahan"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="kapasitas" value="Kapasitas Usaha" />
                  <jet-input
                    id="kapasitas"
                    type="number"
                    class="mt-1 block w-full"
                    v-model="rt.kapasitas"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="email_pemohon" value="Email" />
                  <jet-input
                    id="email_pemohon"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="rt.email_pemohon"
                    required
                    autofocus
                  />
                </div>
              </div>
              <div class="px-10">
                <div>
                  <jet-label for="surat_pemohon" value="Surat Permohonan" />
                  <jet-input
                    id="surat_pemohon"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.surat_pemohon = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="ktp" value="Kartu Tanda Penduduk" />
                  <jet-input
                    id="ktp"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.ktp = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="sertifikat_tanah" value="Sertifikat Tanah" />
                  <jet-input
                    id="sertifikat_tanah"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.sertifikat_tanah = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="ktr" value="Kesesuaian Tata Ruang" />
                  <jet-input
                    id="ktr"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.ktr = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="rencana_tapak" value="Rencana Tapak" />
                  <jet-input
                    id="rencana_tapak"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.rencana_tapak = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="desain_bangunan" value="Desain Bangunan" />
                  <jet-input
                    id="desain_bangunan"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.desain_bangunan = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label
                    for="company_profile"
                    value="Company Profile Penyusun"
                  />
                  <jet-input
                    id="company_profile"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.company_profile = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label
                    for="sertifikat_penyusun"
                    value="Sertifikat Penyusun"
                  />
                  <jet-input
                    id="sertifikat_penyusun"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.sertifikat_penyusun = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label
                    for="dokumen_andalalin"
                    value="Dokumen Andalalin"
                  />
                  <jet-input
                    id="dokumen_andalalin"
                    type="file"
                    class="mt-1 block w-full"
                    @input="rt.dokumen_andalalin = $event.target.files[0]"
                    required
                    autofocus
                  />
                </div>

                <div class="my-10">
                  <vue-recaptcha
                    v-if="showRecaptcha"
                    siteKey="6LeIR10cAAAAAO-_pkNp5Fl7nrUW4g52xzqUGTJZ"
                    size="normal"
                    theme="light"
                    :tabindex="0"
                    @verify="recaptchaVerified"
                    @expire="recaptchaExpired"
                    @fail="recaptchaFailed"
                    ref="vueRecaptcha"
                  >
                  </vue-recaptcha>
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
                    :disabled="!captcha_verified"
                  >
                    Ajukan
                  </button>
                </div>
              </div>
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
import { useForm } from "@inertiajs/inertia-vue3";
import Sidebar from "@/Layouts/Sidebar.vue";
import vueRecaptcha from "vue3-recaptcha2";

export default defineComponent({
  components: {
    JetInput,
    JetLabel,
    Sidebar,
    vueRecaptcha,
  },

  props: {
    status: String,
  },

  data() {
    return {
      showRecaptcha: true,
      captcha_verified: false,
    };
  },
  methods: {
    recaptchaVerified() {
      this.captcha_verified = true;
    },
    recaptchaExpired() {
      this.$refs.vueRecaptcha.reset();
    },
    recaptchaFailed() {},
  },

  setup() {
    const rt = useForm({
      nama_pemohon: null,
      alamat_pemohon: null,
      no_tlp: null,
      jenis_usaha: null,
      alamat_usaha: null,
      luas_lahan: null,
      luas_bangunan: null,
      status_lahan: null,
      kapasitas: null,
      email_pemohon: null,
      surat_pemohon: null,
      ktp: null,
      sertifikat_tanah: null,
      ktr: null,
      rencana_tapak: null,
      desain_bangunan: null,
      company_profile: null,
      sertifikat_penyusun: null,
      dokumen_andalalin: null,
    });

    function submit() {
      rt.post("/rt", this.rt);
    }
    return { rt, submit };
  },
});
</script>
