<template>
    <div class="container">
        <div class="row justify-content-center">
            <el-card class="box-card col-md-10 height-card overflow-auto" style="margin-left:10px; margin-right:10px;">
            <headers />
            <!--
                <div class="col-sm-12 text-center">
                    <h1>Terimas Kasih</h1>
                </div>
            -->
            <div class="d-flex flex-wrap text-center">
                <div class="text-center m-3 p-3" style="width:180px;">
                <a href="kendaraan_dinas">
                
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-truck"></i>
                    </div>
                    Kendaraan <br> Masuk & Keluar
                </a>
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                <a href="surat_keluar">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-document-copy"></i>
                    </div>
                    Penomoran Surat Keluar
                </a>
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-message"></i>
                    </div>
                    Surat Masuk
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                <a href="surat_keluar">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-paperclip"></i>
                    </div>
                    ATK <br>
                    Alat Tulis Kantor
                </a>
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                <a href="admin_atk">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-scissors  "></i>
                    </div>
                    Admin ATK <br>
                    Approver ATK
                </a>
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-camera-solid"></i>
                    </div>
                    Laporan CCTV
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                <a href="tamu?day=1234">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-reading"></i>
                    </div>
                    Tamu dan Antrian Kas
                </a>
                </div>
                <div class="text-center m-3 p-3" style="width:180px;">
                    <div class="bg-icon" style="margin : auto;">
                        <i class="el-icon-coordinate"></i>
                    </div>
                    Laporan Security
                </div>
            </div>
            </el-card>
        </div>
    </div>
</template>
<script>
import headers from './components/header'

export default {
    components: {headers}
}
</script>

<style lang="css" scoped>
    .height-card{
        height:calc(100vh - 50px); 
    }


.bg-icon {
  padding: 5px;
  background: #005496;
  color: white;
  width: 70px;
  height: 70px;
  text-align: center;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}

.bg-icon i {
  font-size: 25pt;
  padding-top: 15px;
  transition: all 0.3s ease-in-out;
}

.bg-icon:hover {
  background: #3282b8;
  /* background: #83b9fa; */
}

.bg-icon:hover i {
  color: #fff;
}

.bg-icon i:hover {
  color: white;
}

    
</style>