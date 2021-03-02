<?php
include('koneksi.php');
$qDataPengajuan = $link -> query("SELECT * FROM tbl_pengajuan_kredit;");
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: 30px;">
    <h1 class="h3 mb-0 text-gray-800" id="txtJudulHero">Mean & Median</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">
                <table class="table">
                <tr>
                <td colspan="5" style="text-align: center;">Mean</td><td colspan="5" style="text-align: center;">Median</td>
                </tr>
                <tr>
                <td>1.725</td><td>2.55</td><td>0.041</td><td>0.195</td>
                <td>1.5</td><td>1.5</td><td>0.03</td><td>0.75</td><td>0.18</td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>

