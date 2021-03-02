<?php
session_start();

include('koneksi.php');

class dataRespon{}

$dr = new dataRespon();

// {'namaProduk':namaProduk, 'deksProduk':deksProduk, 'minNominal':minNominal, 'minNominal':minNominalClean, 
    // 'maxNominal':minNominalClean, 'minTempo':minTempo, 'maxTempo':maxTempo}
$namaProduk = $_POST['namaProduk'];
$deksProduk = $_POST['deksProduk'];
$minNominal = $_POST['minNominal'];
$maxNominal = $_POST['maxNominal'];
$minTempo = $_POST['minTempo'];
$maxTempo = $_POST['maxTempo'];

$link -> query("INSERT INTO tbl_produk_kredit VALUES(null, '$namaProduk','$deksProduk','$minNominal','$maxNominal','$minTempo','$maxTempo', 1);");

$dr -> status = "sukses";

echo json_encode($dr);

?>