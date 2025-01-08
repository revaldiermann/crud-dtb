<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
// ambil data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$alamat = $_POST['alamat']; 
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alumni= $_POST['alumni'];
// buat query update
$sql = "UPDATE dtb_sma01mandau SET nama='$nama',asal='$asal',alamat='$alamat', jenis_kelamin='$jk', agama='$agama', alumni='$alumni' WHERE id=$id";
$query = mysqli_query($db, $sql);
// apakah query update berhasil?
if($query) {
// kalau berhasil alihkan ke halaman list-siswa.php
header('Location: list.php');
} else {
// kalau gagal tampilkan pesan
die("Gagal menyimpan perubahan...");
}
} else {
die("Akses dilarang...");
}
?>
