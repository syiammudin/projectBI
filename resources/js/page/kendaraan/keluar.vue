<template>
    <div>
                    <form >
                        <div class="form-group row">
                            <div class="col-sm-3 col-form-label">Nama Pengemudi</div>
                            <div class="col-sm-9">
                                <el-input v-model="sizeForm.nama" placeholder="Nama Pengemudi" size="normal" clearable></el-input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 col-form-label">Nomor Kendaraan</div>
                            <div class="col-sm-9">
                                <el-input v-model="sizeForm.nopol" placeholder="Contoh penulisan E 1234 B" size="normal"></el-input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 col-from-label">Penumpang</div>
                            <div class="col-sm-9">
                               <el-input v-model="sizeForm.tujuan" placeholder="isi namabila ada, isi 'None' bila tidak ada" size="normal" clearable ></el-input>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-3 col-from-label">Kilometer Awal</div>
                            <div class="col-sm-9">
                                <el-input v-model="sizeForm.kilometerakhir" placeholder="Kilometer Akhir" size="normal" clearable ></el-input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 col-from-label">Upload Kilometer Awal</div>
                            <div class="col-sm-9">
                                 <el-upload
                                action="#"
                                list-type="picture-card"
                                :auto-upload="false">
                                    <i slot="default" class="el-icon-plus"></i>
                                    <div slot="file" slot-scope="{file}">
                                    <img
                                        class="el-upload-list__item-thumbnail"
                                        :src="file.url" alt=""
                                    >
                                    <span class="el-upload-list__item-actions">
                                        <span
                                        class="el-upload-list__item-preview"
                                        @click="handlePictureCardPreview(file)"
                                        >
                                        <i class="el-icon-zoom-in"></i>
                                        </span>
                                        <span
                                        v-if="!disabled"
                                        class="el-upload-list__item-delete"
                                        @click="handleDownload(file)"
                                        >
                                        <i class="el-icon-download"></i>
                                        </span>
                                        <span
                                        v-if="!disabled"
                                        class="el-upload-list__item-delete"
                                        @click="handleRemove(file)"
                                        >
                                        <i class="el-icon-delete"></i>
                                        </span>
                                    </span>
                                    </div>
                                </el-upload>
                            </div>
                        </div>
                    
                            <el-button type="primary" @click="save" v-loading.fullscreen.lock="fullscreenLoading">Create</el-button>
                            <el-button @click="cancel">Cancel</el-button>
                    </form>
    </div>
</template>


<script>
export default {
    data() {
        return {
            form:false, sizeForm : {},
            options: [{
                        value: 'Rahasia',
                        label: 'Rahasia'
                        }, {
                        value: 'Biasa',
                        label: 'Biasa'
                        }], 
            fullscreenLoading:false,
            value:'',
            dialogImageUrl: '',
            dialogVisible: false,
            disabled: false
        }
    },
    methods: {
        save(){
            this.fullscreenLoading = true;
            setTimeout(() => {
                this.fullscreenLoading = false;
                this.$emit('saveKeluar','Success Save Kendaraan Keluar')
            }, 1000);
        }, 
        cancel(){
            this.$emit('saveKeluar','cancel')
        },
        handleRemove(file) {
            console.log(file);
        },
        handlePictureCardPreview(file) {
            this.dialogImageUrl = file.url;
            this.dialogVisible = true;
        },
        handleDownload(file) {
            console.log(file);
        }
    },
}
</script>