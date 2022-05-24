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
            <div class="mx-auto md:px-52 px-10">
              <jet-label
                for="nama_kategori"
                class="md:text-center"
                value="Pilih Kategori"
              />
              <select
                class="
                  form-control
                  border border-gray-300
                  rounded-md
                  text-gray-600
                  h-10
                  bg-white
                  hover:border-gray-400
                  focus:outline-none
                  appearance-none
                  w-full
                "
                v-model="ra.nama_kategori"
              >
                <option value="Dokumen Andalalin">Dokumen Andalalin</option>
                <option value="Rekomendasi Teknis">Rekomendasi Teknis</option>
                <option value="Standar Teknis">Standar Teknis</option>
              </select>
            </div>
            <div class="md:grid md:gap-4 md:grid-cols-2 md:justify-center">
              <div class="px-10">
                <div class="mt-4">
                  <jet-label for="nama_pemohon" value="Nama Pemohon" />
                  <jet-input
                    id="nama_pemohon"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="ra.nama_pemohon"
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
                    v-model="ra.alamat_pemohon"
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
                    v-model="ra.no_tlp"
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
                    v-model="ra.jenis_usaha"
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
                    v-model="ra.alamat_usaha"
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
                    v-model="ra.luas_lahan"
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
                    v-model="ra.luas_bangunan"
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
                    v-model="ra.status_lahan"
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
                    v-model="ra.kapasitas"
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
                    v-model="ra.email_pemohon"
                    autofocus
                  />
                </div>
              </div>
              <div class="px-10">
                <div class="mt-4">
                  <jet-label for="surat_pemohon" value="Surat Permohonan" />
                  <jet-input
                    id="surat_pemohon"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setSP"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label for="ktp" value="Kartu Tanda Penduduk" />
                  <jet-input
                    id="ktp"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setKTP"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label for="sertifikat_tanah" value="Sertifikat Tanah" />
                  <jet-input
                    id="sertifikat_tanah"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setST"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label for="ktr" value="Kesesuaian Tata Ruang" />
                  <jet-input
                    id="ktr"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setKTR"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label for="rencana_tapak" value="Rencana Tapak" />
                  <jet-input
                    id="rencana_tapak"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setRT"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label for="desain_bangunan" value="Desain Bangunan" />
                  <jet-input
                    id="desain_bangunan"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setDB"
                    required
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label
                    for="company_profile"
                    value="Company Profile Penyusun"
                  />
                  <jet-input
                    id="company_profile"
                    type="file"
                    class="mt-1 block w-full"
                    autofocus
                    @change="setCP"
                  />
                </div>

                <div class="mt-6">
                  <jet-label
                    for="sertifikat_penyusun"
                    value="Sertifikat Penyusun"
                  />
                  <jet-input
                    id="sertifikat_penyusun"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setSPN"
                    autofocus
                  />
                </div>

                <div class="mt-6">
                  <jet-label
                    for="dokumen_andalalin"
                    value="Dokumen Andalalin"
                  />
                  <jet-input
                    id="dokumen_andalalin"
                    type="file"
                    class="mt-1 block w-full"
                    @change="setDA"
                    autofocus
                  />
                </div>

                <p
                  class="
                    text-sm
                    font-medium
                    leading-6
                    text-red-500 text-justify
                    mx-auto
                    mt-4
                  "
                >
                  NB. Untuk pemohon yang melakukan pengajuan Standar Teknis
                  tidak perlu mengirimkan file Company Profile Penyusun,
                  Sertifikat Penyusun, dan Dokumen Andalalin.
                </p>

                <div class="my-4">
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

                <div class="flex items-center justify-start mt-4">
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
import Sidebar from "@/Layouts/Sidebar.vue";
import vueRecaptcha from "vue3-recaptcha2";

export default defineComponent({
  components: {
    JetInput,
    JetLabel,
    Sidebar,
    vueRecaptcha,
  },

  props: {},

  data() {
    return {
      showRecaptcha: true,
      captcha_verified: false,
      ra: {
        nama_kategori: "",
        nama_pemohon: "",
        alamat_pemohon: "",
        no_tlp: "",
        jenis_usaha: "",
        alamat_usaha: "",
        luas_lahan: "",
        luas_bangunan: "",
        status_lahan: "",
        kapasitas: "",
        email_pemohon: "",
        surat_pemohon: "",
        ktp: "",
        sertifikat_tanah: "",
        ktr: "",
        rencana_tapak: "",
        desain_bangunan: "",
        company_profile: "",
        sertifikat_penyusun: "",
        dokumen_andalalin: "",
      },
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
    submit() {
      let data = new FormData();
      data.append("nama_kategori", this.ra.nama_kategori);
      data.append("nama_pemohon", this.ra.nama_pemohon);
      data.append("alamat_pemohon", this.ra.alamat_pemohon);
      data.append("no_tlp", this.ra.no_tlp);
      data.append("jenis_usaha", this.ra.jenis_usaha);
      data.append("alamat_usaha", this.ra.alamat_usaha);
      data.append("luas_lahan", this.ra.luas_lahan);
      data.append("luas_bangunan", this.ra.luas_bangunan);
      data.append("status_lahan", this.ra.status_lahan);
      data.append("kapasitas", this.ra.kapasitas);
      data.append("email_pemohon", this.ra.email_pemohon);
      data.append("surat_pemohon", this.ra.surat_pemohon);
      data.append("ktp", this.ra.ktp);
      data.append("sertifikat_tanah", this.ra.sertifikat_tanah);
      data.append("ktr", this.ra.ktr);
      data.append("rencana_tapak", this.ra.rencana_tapak);
      data.append("desain_bangunan", this.ra.desain_bangunan);
      data.append("company_profile", this.ra.company_profile);
      data.append("sertifikat_penyusun", this.ra.sertifikat_penyusun);
      data.append("dokumen_andalalin", this.ra.dokumen_andalalin);

      this.$inertia.post("/andal", data);
    },
    setSP(e) {
      this.ra.surat_pemohon = e.target.files[0];
    },
    setKTP(e) {
      this.ra.ktp = e.target.files[0];
    },
    setST(e) {
      this.ra.sertifikat_tanah = e.target.files[0];
    },
    setKTR(e) {
      this.ra.ktr = e.target.files[0];
    },
    setRT(e) {
      this.ra.rencana_tapak = e.target.files[0];
    },
    setDB(e) {
      this.ra.desain_bangunan = e.target.files[0];
    },
    setCP(e) {
      this.ra.company_profile = e.target.files[0];
    },
    setSPN(e) {
      this.ra.sertifikat_penyusun = e.target.files[0];
    },
    setDA(e) {
      this.ra.dokumen_andalalin = e.target.files[0];
    },
  },
});
</script>
