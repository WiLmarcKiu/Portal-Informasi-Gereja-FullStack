<h2>Hapus Bacaan</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM bacaan WHERE id_bacaan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM bacaan WHERE id_bacaan='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='bacaan.php';</script>";
?>