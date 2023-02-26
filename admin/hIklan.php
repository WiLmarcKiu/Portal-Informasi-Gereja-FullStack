<h2>Hapus iklan</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM iklan WHERE id_iklan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if (file_exists("../img-iklan/$foto")) {
    unlink("../img-iklan/$foto");
}


$koneksi->query("DELETE FROM iklan WHERE id_iklan='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='iklan.php';</script>";
?>