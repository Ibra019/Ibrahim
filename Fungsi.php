<?php

// Ubah "answeekly-ati" menjadi "himweekly" di sini
$koneksi = mysqli_connect("localhost", "root", "", "himweekly");

function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query); //// didepan lemari sesuai perintah
    $rows = [];

    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    
    // Pastikan return $rows; ada agar data bisa dikirim ke file mahasiswa.php
    return $rows;
}