<?php
session_start();

include('koneksi.php');

class dataRespon{}

$dr = new dataRespon();
// {'nasabah':nasabah, 'produk':produk, 'tanggal':tanggal, 'nominal':nominal, 
    // 'pendapatan':pendapatan, 'jaminan':jaminan, 'pekerjaan':pekerjaan, 'keperluan':keperluan, 'jangka':jangka}
$bahanKd = "123456789012345678901234567890123456789012345678901234567890";
$acak = str_shuffle($bahanKd);
$kdPengajuan = substr($acak, 0, 20);

$nasabah = $_POST['nasabah'];
$produk = $_POST['produk'];
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];
$pendapatan = $_POST['pendapatan'];
$jaminan = $_POST['jaminan'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];
$jangka = $_POST['jangka'];

$querySimpan = "INSERT INTO tbl_pengajuan_kredit VALUES(null, '$kdPengajuan','$nasabah','$tanggal','$produk','$nominal','$pendapatan','$jaminan','$pekerjaan','$keperluan','$jangka','tunda');";
$link -> query($querySimpan);
$dr -> status = "diana";

echo json_encode($dr);

?>