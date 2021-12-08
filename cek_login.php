<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
			$user	= isset($_POST['user']) ? $_POST['user'] : "";
			$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";
			$qry	= mysqli_query($db,"SELECT * FROM login WHERE username = '$user' AND password = '$pass'");
			$sesi	= mysqli_num_rows($qry);
            echo "<script>alert('Anda berhasil Log In');</script>";
			echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi'>";
            
          
		
		
	}else{
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        echo "<script>alert('Anda Gagal Log In');</script>";
        header("location:index.php?pesan=gagal");
    }

?>