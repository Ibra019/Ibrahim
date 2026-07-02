<?php

$koneksi = mysqli_connect("localhost", "root", "", "himweekly");

function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahdata($data)
{
    global $koneksi;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);
    $no_hp = htmlspecialchars($data['nohp']);

    $foto = upload();

    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO mahasiswa
              (nama, nim, jurusan, email, no_hp, foto)
              VALUES
              ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek ekstensi file
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>
                alert('Yang diupload harus gambar!');
              </script>";
        return false;
    }

    // cek ukuran maksimal 2 MB
    if ($ukuranFile > 2000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // buat nama file baru agar tidak bentrok
    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'asset/image/' . $namaBaru);

    return $namaBaru;
}
function editdata($data)
{
    global $koneksi;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                jurusan = '$jurusan',
                email = '$email',
                no_hp = '$no_hp',
                foto = '$foto'
              WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function deletedata( $id )
{
    global $koneksi;
    $query ="DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}