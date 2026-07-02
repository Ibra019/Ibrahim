<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'Fungsi.php';

if (isset($_POST["submit_pertama"])) {

    if (tambahdata($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href='Mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                document.location.href='tambahdata.php';
              </script>";
    }

    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Teknologi Informasi</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="nama">nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required/></td>
            </tr>
            <tr>
                <td><label for="nim">nim</label></td>
                <td>:</td>
                <td><input type="text" id="nim" name="nim"/></td>
            </tr>
            <tr>
                <td><label for="jurusan">jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan"/></td>
            </tr>
            <tr>
                <td><label for="email">email</label></td>
                <td>:</td>
                <td><input type="email" id="Email" name="email"/></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="nohp"/></td>
            </tr>
            <tr>
                <td><label for="foto">foto</label></td>
                <td>:</td>
                <td><input type="file" id="foto" name="foto"/></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit_pertama">Tambah data</button>
                </td>
            </tr>
        </table>
    </form>

    <br><br>
    <hr> <br><br>

    <h2>Formulir Data Lengkap</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table cellpadding="5">
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: <input type="number" name="nim"></td>
            </tr>
            <tr>
            <td>Password</td>
                <td>: <input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <input type="tel" name="no_hp"></td>
            </tr>
            <tr>
                <td>Website pribadi</td>
                <td>: <input type="url" name="website"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>: <input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Warna favorit</td>
                <td>: <input type="color" name="warna"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: 
                    <input type="radio" id="pria" name="jenis_kelamin" value="Pria">
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">
                    <label for="wanita">Wanita</label>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>: 
                    <input type="checkbox" id="membaca" name="hobi[]" value="Membaca">
                    <label for="membaca">Membaca</label><br>
                    &nbsp; <input type="checkbox" id="olahraga" name="hobi[]" value="Olahraga">
                    <label for="olahraga">Olahraga</label><br>
                    &nbsp; <input type="checkbox" id="musik" name="hobi[]" value="Musik">
                    <label for="musik">Musik</label>
                </td>
            </tr>
            <tr>
                <td>Upload foto</td>
                <td>: <input type="file" name="foto"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <textarea name="alamat" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: 
                    <select name="jurusan">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit_kedua">Submit</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>


