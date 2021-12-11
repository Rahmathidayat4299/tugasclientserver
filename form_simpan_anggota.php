<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah anggota</title>
</head>
<body>
    <div class="container">
    <form action="aksi_tambah.php" method="post">
            <div>
                <table >

                    <div>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td><input type="number" name="id" id="id"></td>
                        </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" id="nama"><br></td>
                    </tr>
                    </div>   
                    <div>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" id="alamat"></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenis_kelamin" id="radio1" value="L">
                            <label for="radio1">
                                    Laki-Laki
                            </label>
                            <input type="radio" name="jenis_kelamin" id="radio2" value="P">
                            <label for="radio2">
                                    Perempuan
                            </label></td>
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td><label for="agama">Agama</label></td>
                        <td>:</td>
                        <td><select name="agama" id="agama"><option value="" disabled selected>Pilih Salah Satu</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="konghucu">Konghucu</option>
                            </select></td>
                            
                    </tr>
                    </div>
                    <div>
                    <tr>
                        <td>jumlah simpanan</td>
                        <td>:</td>
                        <td><input type="text" name="simpanan" id="simpanan"></td>
                    </tr>   
                    </div>
                </table>
                <input type="submit" value="Simpan" id="simpan">
                            <input type="reset" value="Reset" id="reset">
                            <input type="button" value="kembali" id="kembali">
                
        </form>
    </div>
</body>
</html>