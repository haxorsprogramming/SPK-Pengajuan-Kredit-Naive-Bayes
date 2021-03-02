<?php
session_start();
include('koneksi.php');
$qNasabah = $link -> query("SELECT * FROM tbl_nasabah;");
?>
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Data Nasabah</h1>
     <a href="#!" id="btnTambahDataNasabah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle"></i> Tambah Data Nasabah</a>
 </div>

 <!-- Content Row -->
 <div class="row">

     <div class="col-12">

         <div class="card card-primary">
             <div class="card-body">
                 <table class="table" id="tblNasabah">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Nasabah</th>
                             <th>Alamat</th>
                             <th>Hp</th>
                             <th>Total Pengajuan</th>
                             <th>Aksi</th>
                         </tr>
                     </thead>
                    <tbody>
                        <?php $no=1; while($rNasabah = $qNasabah -> fetch_assoc()){ ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td><?=$rNasabah['nama']; ?></td>
                                <td><?=$rNasabah['alamat']; ?></td>
                                <td><?=$rNasabah['phone']; ?></td>
                                <td>-</td>
                                <td>
                                    <a href='#!' class="btn btn-primary btnEdit" id="<?=$rNasabah['id']; ?>">Edit</a>
                                </td>
                            </tr>
                        <?php $no++; }?>
                    </tbody>
                 </table>
             </div>

         </div>


     </div>
 </div>

 <script>
     $('#tblNasabah').dataTable();
     document.querySelector('#btnTambahDataNasabah').addEventListener('click', function(){
        $('#divUtama').load('tambah_data_nasabah.php');
     });

     $('.btnEdit').click(function(){
        let idNasabah = $(this).attr('id');
        $('#divUtama').load('edit_nasabah.php', {'idNasabah':idNasabah});
     });

 </script>