<?php
session_start();
include('koneksi.php');
$qProduk = $link -> query("SELECT * FROM tbl_produk_kredit;");
?>
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Data Produk Kredit</h1>
     <a href="#!" id="btnTambahDataProduk" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle"></i> Tambah Data Produk</a>
 </div>

 <div class="row">
     <div class="col-12">
         <div class="card card-primary">
             <div class="card-body">
                 <table class="table" id="tblProdukKredit">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Deksripsi</th>
                            <th>Minimal - Maksimal Pengajuan</th>
                            <th>Minimal - Maksimal Tempo (Bulan)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; while($rProduk = $qProduk -> fetch_assoc()){ ?>
                        <tr>
                            <td><?=$no; ?></td>
                            <td><?=$rProduk['nama_kredit'];?></td>
                            <td><?=$rProduk['deksripsi'];?></td>
                            <td>Rp. <?=number_format($rProduk['minimal']);?> - Rp. <?=number_format($rProduk['maksimal']);?></td>
                            <td><?=$rProduk['minimal_tempo'];?> - <?=$rProduk['maksimal_tempo'];?></td>
                            <td><a href="#!" class="btn btn-warning btnHapus" id="<?=$rProduk['id']; ?>">Hapus</a></td>
                        </tr>
                    <?php $no++; }?>
                    </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>

 <script>
     $('#tblProdukKredit').dataTable();

     var rProsesHapus = server + "prosesHapusProduk.php";

     document.querySelector('#btnTambahDataProduk').addEventListener('click', function(){
        $('#divUtama').load('tambah_produk_kredit.php');
     });

     $('.btnHapus').click(function(){
        let confirmHapus = window.confirm("Yakin menghapus produk?");
        let idProduk = $(this).attr('id');
        if(confirmHapus === true){
            $.post(rProsesHapus, {'idProduk':idProduk}, function(data){
                pesanUmumApp('success', 'Sukses', 'Data produk berhasil di hapus...');
                $('#divUtama').load('produk_kredit.php');
            });
        }else{

        }
     });

     function pesanUmumApp(icon, title, text) {
         Swal.fire({
             icon: icon,
             title: title,
             text: text
         });
     }
 </script>