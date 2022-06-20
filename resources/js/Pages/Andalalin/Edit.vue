<template>
    <form @submit.prevent="update">
        <file-input v-model="form.surat_pemohon" class="pb-8 pr-6 w-full lg:w-1/2" type="file" label="surat_pemohon" />
        <button class="btn-indigo ml-auto" type="submit">Update</button>
    </form>
</template>

<script>
// import JetInput from "@/Jetstream/Input.vue";
import FileInput from '@/Shared/FileInput'

export default{
    components:{
        FileInput,
    },
    props:{
        andal: Object
    },
    remember: 'form',
    data(){
        return{
            form: this.$inertia.form({
                _method: 'put',
                surat_pemohon: null
            }),
        }
    },
    methods:{
        update(){
            this.form.post(`/andal/${this.andal.id}`,{
                onSuccess: () => this.form.reset('photo'),
            })
        }
    }
}
</script>
