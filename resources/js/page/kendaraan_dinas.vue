<template>
    <div class="container">
        <div class="row justify-content-center">
            <el-card class="box-card col-md-8 height-card" style="margin-left:10px; margin-right:10px;">
                <headers />

                <div v-if="form == false" class="text-center">
                    <el-button type="primary" round @click="form = true, kend_masuk = true" icon="el-icon-plus" >Kendaraan Masuk</el-button>
                    <br>
                    <br>
                    <el-button type="success" round @click="form = true, kend_keluar = true" icon="el-icon-plus" >Kendaraan Keluar</el-button>
                </div>
                
                <kendaraan_masuk @saveMasuk="kendMasuk"  v-if="kend_masuk == true" />
                <kendaraan_keluar @saveKeluar="kendKeluar"  v-if="kend_keluar == true" />
            </el-card>
        </div>
    </div>
</template>

<script>

import kendaraan_masuk from './kendaraan/masuk' ;
import kendaraan_keluar from './kendaraan/keluar' ;
import headers from '../components/header' 

export default {
    components: { kendaraan_masuk, kendaraan_keluar, headers }, 
    data() {
        return {
            form:false, sizeForm : {},
            kend_masuk : false, kend_keluar : false
        }
    },
    methods: {
        save(){
            this.fullscreenLoading = true;
            setTimeout(() => {
                this.fullscreenLoading = false;
                this.form = false
            }, 1000);
        },
        kendMasuk(d){

            if(d == 'cancel'){
                this.form = false
                this.kend_masuk = false

                return
            }
            this.form = false
            this.kend_masuk = false
            this.$message({
            message: d,
            type: 'success'
            });
        },
        kendKeluar(d){
            if(d == 'cancel'){
                this.form = false
                this.kend_keluar = false

                return
            }

            this.form = false
            this.kend_keluar = false
            this.$message({
            message: d,
            type: 'success'
            });
        }
        
    },
}
</script>


<style lang="css" scoped>
    .height-card{
        min-height:calc(100vh - 50px); 
    }
</style>