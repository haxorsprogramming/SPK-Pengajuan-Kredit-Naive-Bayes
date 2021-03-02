<?php
include('koneksi.php');
$qDataPengajuan = $link -> query("SELECT * FROM tbl_pengajuan_kredit;");
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 30px;">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Representasi Data Pinjaman</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">
                <table class="table" id="tblDataRepresentasi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Produk</th>
                            <th>Nasabah</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>C5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; while($rp = $qDataPengajuan -> fetch_assoc()){ ?> 
                        <?php
                            $idProduk = $rp['kd_produk_kredit'];
                            $idNasabah = $rp['kd_nasabah'];
                            // data produk 
                            $qProduk = $link -> query("SELECT * FROM tbl_produk_kredit WHERE id='$idProduk' LIMIT 0,1;");
                            $fp = $qProduk -> fetch_object();
                            // data nasabah 
                            $qNasabah = $link -> query("SELECT * FROM tbl_nasabah WHERE id='$idNasabah' LIMIT 0,1;");
                            $fn = $qNasabah -> fetch_object();
                        ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td>A<?=$no; ?></td>
                                <td><?=$fp -> nama_kredit; ?></td>
                                <td><?=$fn -> nama; ?></td>
                                <td><?=$rp['C1']; ?></td>
                                <td><?=$rp['C2']; ?></td>
                                <td><?=$rp['C3']; ?></td>
                                <td><?=$rp['C4']; ?></td>
                                <td><?=$rp['C5']; ?></td>
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    $('#tblDataRepresentasi').dataTable();
</script>