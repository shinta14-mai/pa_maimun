<template>
    <form @submit.prevent="submit" enctype="multipart/form-data">
    <div class="grid gap-4 grid-cols-2 justify-center">
      <div class="px-10">
        <div>
          <jet-label for="nama_pemohon" value="Nama Pemohon" />
          <jet-input
            id="nama_pemohon"
            type="text"
            class="mt-1 block w-full"
            v-model="form.nama_pemohon"
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
            v-model="form.alamat_pemohon"
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
            v-model="form.no_tlp"
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
            v-model="form.jenis_usaha"
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
            v-model="form.alamat_usaha"
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
            v-model="form.luas_lahan"
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
            v-model="form.luas_bangunan"
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
            v-model="form.status_lahan"
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
            v-model="form.kapasitas"
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
            v-model="form.email_pemohon"
            required
            autofocus
          />
        </div>
      </div>
      <div class="px-10">
        <div>
          <jet-label for="surat_pemohon" value="Surat Permohonan" />
          <input
            id="surat_pemohon"
            type="file"
            class="mt-1 block w-full"
            @change="surat_pemohon = this.$refs.surat_pemohon.files[0];"
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
            @input="form.ktp = $event.target.files[0]"
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
            @input="form.sertifikat_tanah = $event.target.files[0]"
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
            @input="form.ktr = $event.target.files[0]"
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
            @input="form.rencana_tapak = $event.target.files[0]"
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
            @input="form.desain_bangunan = $event.target.files[0]"
            required
            autofocus
          />
        </div>

        <div class="mt-4">
          <jet-label for="company_profile" value="Company Profile Penyusun" />
          <jet-input
            id="company_profile"
            type="file"
            class="mt-1 block w-full"
            @input="form.company_profile = $event.target.files[0]"
            required
            autofocus
          />
        </div>

        <div class="mt-4">
          <jet-label for="sertifikat_penyusun" value="Sertifikat Penyusun" />
          <jet-input
            id="sertifikat_penyusun"
            type="file"
            class="mt-1 block w-full"
            @input="form.sertifikat_penyusun = $event.target.files[0]"
            required
            autofocus
          />
        </div>

        <div class="mt-4">
          <jet-label for="dokumen_andalalin" value="Dokumen Andalalin" />
          <jet-input
            id="dokumen_andalalin"
            type="file"
            class="mt-1 block w-full bg-birmud"
            @input="form.dokumen_andalalin = $event.target.files[0]"
            required
            autofocus
          />
        </div>

        <div class="flex items-center justify-end mt-4">
          <jet-button class="ml-4"> Masuk </jet-button>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
    import { defineComponent } from 'vue'
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";


    export default defineComponent({
        components: {
    JetButton,
    JetInput,
    JetLabel,
  },

            data(){
        return{
            form: this.$inertia.form({
                    _method: 'PUT',
                    nama_pemohon: this.andal.nama_pemohon,
                alamat_pemohon: this.andal.alamat_pemohon,
                no_tlp: this.andal.no_tlp,
                jenis_usaha: this.andal.jenis_usaha,
                alamat_usaha: this.andal.alamat_usaha,
                luas_lahan: this.andal.luas_lahan,
                luas_bangunan: this.andal.luas_bangunan,
                status_lahan: this.andal.status_lahan,
                kapasitas: this.andal.kapasitas,
                email_pemohon: this.andal.email_pemohon,
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
            form: {

            }
        }
    },
    props: {
        andal: Object
    },
    // methods: {
    //     submit(){
    //         this.$inertia.put('/andal/' + this.andal.id, this.form)
    //     },
    // }
    }
    )
</script>

