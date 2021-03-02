<?php
include('koneksi.php');
$qDataPengajuan = $link -> query("SELECT * FROM tbl_pengajuan_kredit;");
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 30px;">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Sebaran Data & Hasil</h1>
</div>


<!-- Content Row -->
<div class="row">

    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">
                <table class="table" id="tblSebaranData">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nasabah</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                            <th>C5</th>
                            <th>Probabilitas</th>
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

                            $cs1 = 1.059785288;
                            $cs2 = 1.589677932;
                            $cs3 = 0.026583267;
                            $cs4 = 3;
                            $cs5 = 0.201462369;

                            $nilaiC1 = ($c1 * 30 / 0.3) / 100;
                            $nilaiC2 = ($c2 * 20 / 0.2) / 100;
                            $nilaiC3 = ($c3 * 10 * 0.1) / 100;
                            $nilaiC4 = ($c4 * 10 / 0.1) / 100;
                            $nilaiC5 = ($c5 * 30 * 0.3) / 100;

                            $nProb = 0;

                            if($nilaiC1 > $cs1) {
                                $hC1 = "1";
                                $warnaBarisC1 = "#2ecc71";
                                $nProb++;
                            }else{
                                $hC1 = "0";
                                $warnaBarisC1 = "#e67e22";
                            }

                            if($nilaiC2 > $cs2) {
                                $hC2 = "1";
                                $warnaBarisC2 = "#2ecc71";
                                $nProb++;
                            }else{
                                $hC2 = "0";
                                $warnaBarisC2 = "#e67e22";
                            }

                            if($nilaiC3 > $cs3) {
                                $hC3 = "1";
                                $warnaBarisC3 = "#2ecc71";
                                $nProb++;
                            }else{
                                $hC3 = "0";
                                $warnaBarisC3 = "#e67e22";
                            }

                            if($nilaiC4 > $cs4) {
                                $hC4 = "1";
                                $warnaBarisC4 = "#2ecc71";
                                $nProb++;
                            }else{
                                $hC4 = "0";
                                $warnaBarisC4 = "#e67e22";
                            }

                            if($nilaiC5 > $cs5) {
                                $hC5 = "1";
                                $warnaBarisC5 = "#2ecc71";
                                $nProb++;
                            }else{
                                $hC5 = "0";
                                $warnaBarisC5 = "#e67e22";
                            }

                            if($nProb >= 5){
                                $statusProbabilitas = "Tercapai";
                            }else{
                                $statusProbabilitas = "Tidak Tercapai";
                            }


                        ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td>A<?=$no; ?></td>
                                <td><?=$fn -> nama; ?></td>
                                <td style="background-color: <?=$warnaBarisC1;?>;"><?=$nilaiC1; ?></td>
                                <td style="background-color: <?=$warnaBarisC2;?>;"><?=$nilaiC2; ?></td>
                                <td style="background-color: <?=$warnaBarisC3;?>;"><?=$nilaiC3; ?></td>
                                <td style="background-color: <?=$warnaBarisC4;?>;"><?=$hC4; ?></td>
                                <td style="background-color: <?=$warnaBarisC5;?>;"><?=$hC5; ?></td>
                                <td><?=$statusProbabilitas; ?></td>
                            </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$('#tblSebaranData').dataTable();
</script>
