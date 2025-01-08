<?php
include("config.php");

if (isset($_GET['id'])) {
    // Ambil ID dari query string
    $id = $_GET['id'];

    // Buat query hapus
    $sql = "DELETE FROM dtb_sma01mandau WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil?
    if ($query) {
        header('Location: list.php');
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>

<script>
      function confirmDelete(id) {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
          window.location.href = "hapus.php?id=" + id;
        }
      }
      </script>
