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
          <form @submit.prevent="update" enctype="multipart/form-data">
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
                    autofocus
                  />
                </div>

                <div class="mt-4">
                  <jet-label for="kapasitas" value="Kapasitas Usaha" />
                  <jet-input
                    id="kapasitas"
                    type="text"
                    class="mt-1 block w-full text-sm"
                    v-model="ra.kapasitas"
                    autofocus
                    placeholder="contoh: 500 kamar, 100 kursi"
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
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="surat_pemohon" value="Surat Permohonan" />
                  </span>
                  <span class="ml-1" v-show="draft.surat_pemohon != null">
                    <a
                      :href="`/storage/${draft.surat_pemohon}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.surat_pemohon" type="file" />
                  <a
                    href="/components/surat permohonan.docx"
                    class="text-birmud text-sm underline"
                    >Download template surat permohonan</a
                  >
                </div>

                <div class="mt-4">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="ktp" value="Kartu Tanda Penduduk" />
                  </span>
                  <span class="ml-1" v-show="draft.ktp != null">
                    <a
                      :href="`/storage/${draft.ktp}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.ktp" type="file" />
                </div>

                <div class="mt-4">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="sertifikat_tanah" value="Sertifikat Tanah" />
                  </span>
                  <span class="ml-1" v-show="draft.sertifikat_tanah != null">
                    <a
                      :href="`/storage/${draft.sertifikat_tanah}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.sertifikat_tanah" type="file" />
                </div>

                <div class="mt-4">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="ktr" value="Kesesuaian Tata Ruang" />
                  </span>
                  <span class="ml-1" v-show="draft.ktr != null">
                    <a
                      :href="`/storage/${draft.ktr}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.ktr" type="file" />
                </div>

                <div class="mt-4">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="rencana_tapak" value="Rencana Tapak" />
                  </span>
                  <span class="ml-1" v-show="draft.rencana_tapak != null">
                    <a
                      :href="`/storage/${draft.rencana_tapak}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.rencana_tapak" type="file" />
                </div>

                <div class="mt-4">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="desain_bangunan" value="Desain Bangunan" />
                  </span>
                  <span class="ml-1" v-show="draft.desain_bangunan != null">
                    <a
                      :href="`/storage/${draft.desain_bangunan}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.desain_bangunan" type="file" />
                </div>

                <div class="mt-4" v-show="ra.nama_kategori != 'Standar Teknis'">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="company_profile" value="Company Profile Penyusun" />
                  </span>
                  <span class="ml-1" v-show="draft.company_profile != null">
                    <a
                      :href="`/storage/${draft.company_profile}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.company_profile" type="file" />
                </div>

                <div class="mt-4" v-show="ra.nama_kategori != 'Standar Teknis'">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="sertifikat_penyusun" value="Sertifikat Penyusun" />
                  </span>
                  <span class="ml-1" v-show="draft.sertifikat_penyusun != null">
                    <a
                      :href="`/storage/${draft.sertifikat_penyusun}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.sertifikat_penyusun" type="file" />
                </div>

                <div class="mt-4" v-show="ra.nama_kategori != 'Standar Teknis'">
                  <span class="inline-flex justify-center items-center">
                    <jet-label for="dokumen_andalalin" value="Dokumen Andalalin" />
                  </span>
                  <span class="ml-1" v-show="draft.dokumen_andalalin != null">
                    <a
                      :href="`/storage/${draft.dokumen_andalalin}`"
                      target="_blank"
                      rel="noopener noreferrer"
                      class="italic text-green-500 text-sm"
                    >
                      Lihat File
                    </a></span
                  >
                  <file-input v-model="ra.dokumen_andalalin" type="file" />
                </div>

                <div class="block mt-4">
                  <label class="flex items-center">
                    <input
                      type="checkbox"
                      v-model="ra.isDraft"
                      true-value="1"
                      false-value="0"
                    />
                    <span class="ml-2 text-sm text-gray-600">Apakah Anda ingin menyimpannya sebagai draft?</span>
                  </label>
                </div>
                <p class="text-red-400 whitespace-no-wrap text-xs">
                  *Abaikan jika data Anda sudah lengkap
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
                      disabled:bg-gray-500
                    "
                    :disabled="!captcha_verified"
                  >
                    Simpan
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
import { Head, Link } from "@inertiajs/inertia-vue3";
import { ref } from "vue";
import FileInput from "@/Shared/FileInput";

export default defineComponent({
  components: {
    JetInput,
    JetLabel,
    Sidebar,
    vueRecaptcha,
    Head,
    Link,
    FileInput,
  },

  setup() {
    const open = ref(true);
    return {
      open,
    };
  },
  remember: "form",
  data() {
    return {
      showRecaptcha: true,
      captcha_verified: false,
      ra: this.$inertia.form({
        _method: "put",
        nama_kategori: this.draft.nama_kategori,
        nama_pemohon: this.draft.nama_pemohon,
        alamat_pemohon: this.draft.alamat_pemohon,
        no_tlp: this.draft.no_tlp,
        jenis_usaha: this.draft.jenis_usaha,
        alamat_usaha: this.draft.alamat_usaha,
        luas_lahan: this.draft.luas_lahan,
        luas_bangunan: this.draft.luas_bangunan,
        status_lahan: this.draft.status_lahan,
        kapasitas: this.draft.kapasitas,
        email_pemohon: this.draft.email_pemohon,
        surat_pemohon: null,
        ktp: null,
        sertifikat_tanah: null,
        ktr: null,
        rencana_tapak: null,
        desain_bangunan: null,
        company_profile: null,
        sertifikat_penyusun: null,
        dokumen_andalalin: null,
        isDraft: 0,
      }),
    };
  },
  props: {
    draft: Object,
  },
  methods: {
    recaptchaVerified() {
      this.captcha_verified = true;
    },
    recaptchaExpired() {
      this.$refs.vueRecaptcha.reset();
    },
    recaptchaFailed() {},
    update() {
      this.ra.post(`/isDraft/${this.draft.id}`, {
        onSuccess: () => this.ra.reset("file"),
      });
    },
  },
});
</script>
