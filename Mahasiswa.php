<?php
// 1. Panggil file fungsi.php yang berisi alat/fungsi kita
require 'fungsi.php';

// 2. Gunakan fungsi tampildata() untuk mengambil data dari database
$data_mahasiswa = tampildata("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<h1 align="center">WEB TI UNIMUS 2026</h1>

<table border="1" align="center" cellspacing="5px" cellpadding="10px">
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="Visi-misi.php">Profile</a></td>
        <td><a href="Ibrahim_019.php">Keterangan</a></td>
        <td><a href="Mahasiswa.php">Data Mahasiswa</a></td>
    </tr>
</table>

<br>

<h2 align="center">Data Mahasiswa</h2>

<div class="table-wrapper">

    <div class="table-header">
        <a href="tambahdata.php">
            <button class="btn">Tambah Data</button>
        </a>
    </div>

    <table align="center" border="1" cellpadding="5px" style="color: black;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;

        // 3. Ubah perulangan 'while' menjadi 'foreach' karena datanya sudah berbentuk array dari fungsi
        foreach($data_mahasiswa as $row) {
        ?>
        <tr>
            <td align="center"><?php echo $no++; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['no_hp']; ?></td>
            <td align="center">
                <img src="asset/image/<?php echo $row['foto']; ?>" width="80">
            </td>
            <td align="center">
            <a href="editdata.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="deletedata.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
       </td>
        </tr>
        <?php } ?>

    </table>

    <hr>

    <h2 align="center">Latihan</h2>

    <table class="tabel-latihan" align="center" border="2" cellspacing="10px">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" align="center">?</td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</div>

</body>
</html>