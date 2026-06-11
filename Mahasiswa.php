<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "himweekly"); 
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
    <h1 align="center">
        WEB TI UNIMUS 2026
    </h1>
    
    <table border="1" align="center" cellspacing="5px" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="Visi-misi.php">Profile</a>
            </td>
            <td>
                <a href="Ibrahim_019.php">Keterangan</a>
            </td>
            <td>
                <a href="Mahasiswa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>
    <br>
    
    <h2 align="center">
        Data Mahasiswa
    </h2>
    <div class="table-wrapper">
        <div class="table-header">
            <a href="tambahdata.php">
                <button class="btn">tambah data</button>
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
            $no = 1; // Membuat nomor urut otomatis
            while($row = mysqli_fetch_assoc($data)) { 
            ?>
            <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td align="center"><?php echo $row['jurusan']; ?></td>
                <td align="center"><?php echo $row['email']; ?></td>
                <td align="center"><?php echo $row['no_hp']; ?></td>
                <td align="center">
                    <img src="assets/images/<?php echo $row['foto']; ?>" alt="Foto <?php echo $row['nama']; ?>" width="80px">
                </td>
                <td align="center">
                    <a href="editdata.php?id=<?php echo $row['id']; ?>"><button class="btn">Edit</button></a>
                    <a href="hapusdata.php?id=<?php echo $row['id']; ?>"><button class="btn">Hapus</button></a>
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