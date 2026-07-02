<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Fungsi.php';

$id = $_GET["id"];
$mhs = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit_pertama"])) {

    if (editdata($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href='Mahasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href='editdata.php?id=$id';
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
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<h2>Edit Data Mahasiswa</h2>

<form action="" method="post">

    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <table>

        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="<?= $mhs['nama']; ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td>
                <input
                    type="text"
                    id="nim"
                    name="nim"
                    value="<?= $mhs['nim']; ?>">
            </td>
        </tr>

        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td>
                <input
                    type="text"
                    id="jurusan"
                    name="jurusan"
                    value="<?= $mhs['jurusan']; ?>">
            </td>
        </tr>

        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= $mhs['email']; ?>">
            </td>
        </tr>

        <tr>
            <td><label for="nohp">Nomor HP</label></td>
            <td>:</td>
            <td>
                <input
                    type="text"
                    id="nohp"
                    name="nohp"
                    value="<?= $mhs['no_hp']; ?>">
            </td>
        </tr>

        <tr>
            <td><label for="foto">Foto</label></td>
            <td>:</td>
            <td>
                <input
                    type="text"
                    id="foto"
                    name="foto"
                    value="<?= $mhs['foto']; ?>">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <button type="submit" name="submit_pertama">
                    Edit Data
                </button>
            </td>
        </tr>

    </table>

</form>

</body>
</html>