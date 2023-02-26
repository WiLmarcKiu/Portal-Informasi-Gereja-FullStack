<h2>Hapus Tanggungan</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM tanggungan WHERE id_tanggungan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tanggungan WHERE id_tanggungan='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='tanggungan.php';</script>";
?>