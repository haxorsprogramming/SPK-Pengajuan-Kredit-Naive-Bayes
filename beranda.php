<?php
session_start();
include('koneksi.php');
$qNasabah = $link ->query("SELECT * FROM tbl_nasabah ORDER BY id DESC LIMIT 0, 5;");
?>
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Dashboard</h1>
     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
 </div>

 <!-- Content Row -->
 <div class="row">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             Total Nasabah</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                             Total Pengajuan</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-marker fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengajuan Diterima
                         </div>
                         <div class="row no-gutters align-items-center">
                             <div class="col-auto">
                                 <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">13</div>
                             </div>
                         </div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
             <div class="card-body">
                 <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                         <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                             Total Pencairan Kredit</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 251.500.000</div>
                     </div>
                     <div class="col-auto">
                         <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Content Row -->

 <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-primary">
            <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Nasabah terbaru</h6>
            </div>
            <div class="card-body">
            <table class="table">
                <?php while($rNasabah = $qNasabah -> fetch_assoc()){ 
                    $bahanImg = "123456789";
                    $acak = str_shuffle($bahanImg);
                    $img = substr($acak, 0,1);    
                ?> 
                <tr>
                    <td>
                        <img src="img/ava/<?=$img; ?>.png" style="width: 80px;" class="img-responsive">
                    </td>
                    <td style="vertical-align: middle;"><?=$rNasabah['nama']; ?></td>
                    <td style="vertical-align: middle;">Pekanbaru</td>
                </tr>
                <?php } ?>
            </table>
            </div>
        </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-12">
     
     </div>
 </div>

 <script src="js/beranda.js"></script>