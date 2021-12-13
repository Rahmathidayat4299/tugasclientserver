<<?php 
// koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id=$_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$simpanan = $_POST['simpanan'];
//update data ke database
mysqli_query($db,"UPDATE simpanan_anggota SET nama='$nama',jenis_kelamin='$jk',alamat='$alamat', agama='$agama', simpanan='$simpanan' where id='$id'");

header("location:data_anggota.php?daftar=sukses");
//mengalihkan halaman kembali ke data_anggota.php
 ?>