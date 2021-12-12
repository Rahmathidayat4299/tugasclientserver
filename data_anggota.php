<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>

<body>
    <fieldset>
        <h1> Data anggota Ksp Unilak</h1>
  
    <div>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama </th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Simpanan</th>
        </tr>
    </thead>
    
</div>
    <tbody>
        <?php

        include 'koneksi.php';
        $id=1;
        $data = mysqli_query($db, "select * from simpanan_anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $id++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['simpanan']; ?></td>
                <td>
                    <a href="edit.php?id_siswa=<?php echo $d['id_siswa']; ?>">EDIT</a>
                    <a href="hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>">HAPUS</a>
                </td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</fieldshet>
</body>

</html>