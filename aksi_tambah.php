<?php
include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$simpanan = $_POST['simpanan'];

mysqli_query($db,"insert into simpanan_anggota values('$id_siswa','$nama','$alamat','$jeniskelamin','$agama','$simpanan') ");

header("location:index.php");
?>