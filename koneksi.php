<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data";

$db = mysqli_connect($server, $user, $password, $ksp_unilak);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>