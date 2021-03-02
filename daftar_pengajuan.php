<?php
session_start();
include('koneksi.php');
$qPengajuan = $link->query("SELECT * FROM tbl_pengajuan_kredit;");

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Data Pengajuan</h1>
    <a href="#!" id="btnPengajuanBaru" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle"></i> Tambah pengajuan baru</a>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">
                <table class="table" id="tblPengajuan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kd Pengajuan</th>
                            <th>Nasabah</th>
                            <th>Produk</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; while ($rPengajuan = $qPengajuan->fetch_assoc()) {
                            $idNasabah = $rPengajuan['kd_nasabah'];
                            $kdProduk = $rPengajuan['kd_produk_kredit'];
                            // cari nasabah 
                            $qDataNasabah = $link -> query("SELECT * FROM tbl_nasabah WHERE id='$idNasabah' LIMIT 0,1;");   
                            $fNasabah = $qDataNasabah -> fetch_assoc();
                            $namaNasabah = $fNasabah['nama']; 
                            // cari data kredit 
                            $qKredit = $link -> query("SELECT * FROM tbl_produk_kredit WHERE id='$kdProduk' LIMIT 0,1;");
                            $fKredit = $qKredit -> fetch_assoc();
                            $namaProduk = $fKredit['nama_kredit'];
                        ?>

                            <tr>
                                <td><?=$no; ?></td>
                                <td><?=$rPengajuan['kd_pengajuan']; ?></td>
                                <td><?=$namaNasabah; ?></td>
                                <td><?=$namaProduk; ?></td>
                                <td>Rp. <?=number_format($rPengajuan['nominal']); ?></td>
                               
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>

<?php 
include('data_representasi.php');
include('data_normalisasi.php');
include('mean_median.php');
include('sebaran_data.php');

?>

<script>
    $('#tblPengajuan').dataTable();
</script>