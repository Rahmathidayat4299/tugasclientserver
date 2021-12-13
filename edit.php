<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT</title>
</head>

<body>
    <fieldset>
    <h1> FORM EDIT DATA ANGGOTA </h1>
    <div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="data_anggota.php">DATA ANGGOTA</a></li>
            <li><a href="form_simpan_anggota.php">SIGN UP MEMBER</a></li>
        </ul>
    </div>
    <div>
        <h2>EDIT DATA ANGGOTA</h2>
    </div>
    <div>
        <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($db,"SELECT * FROM simpanan_anggota WHERE id='$id'");

                while($d= mysqli_fetch_array($data)){
            ?>
    </div>

    <div>
        <form action="aksi_edit.php" method="post">
            <div>
                <input type="hidden" name="id" id="id" value="<?= $d['id'] ?>">
                <table >
                    
                    <div>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama" value="<?= $d['nama'] ?>"><br></td>
                    </tr>
                    </div>   
                    <div>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat" value="<?= $d['alamat'] ?>"></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?php if($d['jenis_kelamin']=='L') { ?>
                            <input type="radio" name="jenis_kelamin" id="radio1" value="L" checked/>
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P">
                            <label for="radio2">
                                    Perempuan
                            </label>

                            <?php } else { ?>
                            <input type="radio" name="jenis_kelamin" id="radio1" value="L"/>
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P" checked/>
                            <label for="radio2">
                                    Perempuan
                            </label>
                            <?php } ?>
                        </td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td><label for="agama">Agama</label></td>
                        <td>:</td>
                        <td><select name="agama" id="agama">
                                <option disabled selected>Pilih Salah Satu</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select></td>
                            
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>simpanan Asal</td>
                        <td>:</td>
                        <td><input type="text" name="simpanan" id="simpanan" value="<?= $d['simpanan'] ?>"></td>
                    </tr>   
                    </div>
                </table>
                <input type="submit" value="Simpan" id="simpan">
                            <input type="reset" value="Reset" id="reset">
                            <input type="button" value="kembali" id="kembali">
                
        </form>
        <?php
    }
    ?>
    </div>
</fieldset>
</body>
</html>