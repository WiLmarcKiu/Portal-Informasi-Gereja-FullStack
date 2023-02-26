<h2>Hapus Artikel</h2>

<?php include '../koneksi.php'; ?>
<?php
$ambil = $koneksi->query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['foto_artikel'];
if (file_exists("../img-artikel/$foto")) {
    unlink("../img-artikel/$foto");
}


$koneksi->query("DELETE FROM artikel WHERE id_artikel='$_GET[id]'");
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='artikel.php';</script>";
?>