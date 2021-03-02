<?php
session_start();

include('koneksi.php');

class dataRespon{}

$dr = new dataRespon();

$username_p = $_POST['username'];
$password_p = $_POST['password'];
$pass_hash = md5($password_p);

$qUser = $link -> query("SELECT * FROM tbl_user WHERE username='$username_p' AND password='$pass_hash';");
$total = mysqli_num_rows($qUser);

if($total > 0){
    $dr -> status = 'sukses';
}else{
    $dr -> status = 'gagal';
}

echo json_encode($dr);

?>