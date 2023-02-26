<h2>Hapus Pengumuman</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id_pengumuman='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pengumuman WHERE id_pengumuman='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='pengumuman.php';</script>";
?>