<?php
include('koneksi.php');
$qDataPengajuan = $link -> query("SELECT * FROM tbl_pengajuan_kredit;");
$qNasabah = $link -> query("SELECT * FROM tbl_nasabah;");
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 30px;">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Data Normalisasi</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">
                <table class="table" id="tblDataNormalisasi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
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
                            $c1 = $rp['C1'];
                            $c2 = $rp['C2'];
                            $c3 = $rp['C3'];
                            $c4 = $rp['C4'];
                            $c5 = $rp['C5'];

                            $nilaiC1 = ($c1 * 30 / 0.3) / 100;
                            $nilaiC2 = ($c2 * 20 / 0.2) / 100;
                            $nilaiC3 = ($c3 * 10 * 0.1) / 100;
                            $nilaiC4 = ($c4 * 10 / 0.1) / 100;
                            $nilaiC5 = ($c5 * 30 * 0.3) / 100;

                        ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td>A<?=$no; ?></td>
                                <td><?=$nilaiC1; ?></td>
                                <td><?=$nilaiC2; ?></td>
                                <td><?=$nilaiC3; ?></td>
                                <td><?=$nilaiC4; ?></td>
                                <td><?=$nilaiC5; ?></td>
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$('#tblDataNormalisasi').dataTable();
</script>
