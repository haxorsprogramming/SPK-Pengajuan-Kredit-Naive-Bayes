<?php
session_start();

include('koneksi.php');

class dataRespon{}

$dr = new dataRespon();

// {'nama':namaNasabah, 'tempatLahir':tempatLahir, 'tanggalLahir':tanggalLahir, 'noHp':noHp, 'noKtp':noKtp, 'alamat':alamat, 
// 'noKk':noKk, 'namaAyah':namaAyah, 'namaIbu':namaIbu, 'noHpOrtu':noHpOrtu, 'alamatOrtu':alamatOrtu}
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$noHp = $_POST['noHp'];
$noKtp = $_POST['noKtp'];
$alamat = $_POST['alamat'];
$noKk = $_POST['noKk'];
$namaAyah = $_POST['namaAyah'];
$namaIbu = $_POST['namaIbu'];
$noHpOrtu = $_POST['noHpOrtu'];
$alamatOrtu = $_POST['alamatOrtu'];

$link -> query("INSERT INTO tbl_nasabah VALUES(null, '$nama','$noHp','$alamat','$tempatLahir','$tanggalLahir','$noKtp','$noKk','$namaAyah','$namaIbu','$noHpOrtu','$alamatOrtu');");

$dr -> status = $nama;

echo json_encode($dr);


?>