<h2>Hapus Jumlah Umat</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM jumlah_umat WHERE id_jumlah_umat='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM jumlah_umat WHERE id_jumlah_umat='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='jumlah_umat.php';</script>";
?>