<h2>Hapus KUB</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM kub WHERE id_KUB='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM kub WHERE id_KUB='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='kub.php';</script>";
?>