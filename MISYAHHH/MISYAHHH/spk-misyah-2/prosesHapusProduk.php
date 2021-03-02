<?php
session_start();

include('koneksi.php');

class dataRespon{}

$dr = new dataRespon();

$idProduk = $_POST['idProduk'];

$link -> query("DELETE FROM tbl_produk_kredit WHERE id='$idProduk';");

$dr -> status = 'sukses';

echo json_encode($dr);

?>