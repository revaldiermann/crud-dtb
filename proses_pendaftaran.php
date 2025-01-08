<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum
if(isset($_POST['daftar'])){
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alumni = $_POST['alumni']; 

    // Buat query
    $sql = "INSERT INTO dtb_sma01mandau (nama, asal, alamat, jenis_kelamin, agama, alumni) 
    VALUES ('$nama', '$asal', '$alamat', '$jk', '$agama', '$alumni')";

    // Eksekusi query
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        die("Gagal menyimpan ke database: " . mysqli_error($db));
    }
} else {
    die("Akses dilarang...");
}
