<?php require 'koneksi.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="loader-container">
        <img src="img/loader6.gif" alt="">
    </div>

    <!-- NAVBAR -->
    <header>
        <a href="#" class="logo"><i class="fa-solid fa-church"></i>&nbsp;Simpta.</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#profil">Profil</a>
            <a href="#artikel">Artikel</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#MBacaan">Bacaan</a>
            <a href="#pengumuman">Pengumuman</a>
            <a href="#iklan">Iklan</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#MTanggungan">Tanggungan</a>
            <a href="#">Prediksi Umat</a>
        </nav>

        <div class="icon">
            <i class="fa-solid fa-bars" id="menu-bars"></i>
            <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
        </div>
    </header>
    <!-- END NAVBAR -->

    <!-- MODAL BACAAN -->
    <div class="modal fade text-white" id="MBacaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="background: rgba(255, 255, 255, 0.05); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(3.9px); -webkit-backdrop-filter: blur(3.9px); border: 1px solid rgba(255, 255, 255, 0.13);">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Daftar bacaan minggu ini</h2>
                    <button type="button" class="btn-close" style="background: transparent; color: #FFF; font-size: 2rem; font-weight: bold;" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table class="table text-white">
                        <thead style="text-align: center; font-size: 1.8rem; font-weight: 600;">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Bacaan</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; font-size: 1.8rem; font-weight: 600;">
                            <?php $nomor = 1; ?>
                            <?php $dataBacaan = $koneksi->query("SELECT * FROM bacaan"); ?>
                            <?php while ($bacaan = $dataBacaan->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo date("d F Y", strtotime($bacaan['tgl'])); ?></td>
                                    <td><?php echo $bacaan['bacaan']; ?></td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL BACAAN -->


    <!-- MODAL TANGGUNGAN -->
    <div class="modal fade text-white" id="MTanggungan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content" style="background: rgba(255, 255, 255, 0.05); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(3.9px); -webkit-backdrop-filter: blur(3.9px); border: 1px solid rgba(255, 255, 255, 0.13);">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Daftar tanggungan minggu ini</h2>
                    <button type="button" class="btn-close" style="background: transparent; color: #FFF; font-size: 2rem; font-weight: bold;" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table class="table text-white">
                        <thead style="text-align: center; font-size: 1.8rem; font-weight: 600;">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Tanggungan</th>
                                <th>KUB</th>
                                <th>Misa</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center; font-size: 1.8rem; font-weight: 600;">
                            <?php $nomor = 1; ?>
                            <?php $dataTanggungan = $koneksi->query("SELECT * FROM tanggungan JOIN kub ON tanggungan.id_KUB=kub.id_KUB"); ?>
                            <?php while ($tanggungan = $dataTanggungan->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo date("d F Y", strtotime($tanggungan['tgl_tanggungan'])); ?></td>
                                    <td><?php echo $tanggungan['nama_tanggungan']; ?></td>
                                    <td><?php echo $tanggungan['nama_KUB']; ?></td>
                                    <td><?php echo $tanggungan['misa']; ?></td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL TANGGUNGAN -->


    <!-- FORM CARI -->
    <form action="" id="search">
        <input type="text" name="" id="search-box" placeholder="Cari disini . . .">
        <label for="search-box" class="fa fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!-- END FORM CARI -->



    <!-- HOME -->
    <section class="home" id="home">
        <div class="row">
            <div class="home-slider">
                <div class="wrapper">
                    <div class="slide">
                        <div class="content col-md-6 col-lg-6">
                            <span>PAROKI Santa Maria Assumpta</span>
                            <h3>Kupang</h3>
                            <p>Paroki Santa Maria Assumpta adalah sebuah Paroki dalam Keuskupan Agung Kupang. Paroki ini berada di Jln. Perintis Kemerdekaan No. 9, Kupang, Nusa Tenggara Timur, Indonesia.</p>
                            <a href="#profil" class="btn-home">Selengkapnya</a>
                        </div>
                        <div class="image col-md-6 col-lg-6">
                            <img src="img/gereja.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->



    <!-- PROFIL -->
    <section class="profil" id="profil">
        <h3 class="sub-heading">Profil</h3>
        <h1 class="heading">Paroki St. Maria Assumpta</h1>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <?php
                $profil = mysqli_query($koneksi, "SELECT * FROM profil");
                $dataProfil = mysqli_fetch_assoc($profil);
                ?>
                <div class="col-lg-5 mx-4 pt-4 pb-4 mb-2">
                    <img src="img-profil/<?= $dataProfil['foto']; ?>" width="100%" height="362vh" alt="">
                </div>
                <div class="col-lg-5 mx-4 pt-5 pb-4 mb-2">
                    <p style="font-size: 1.3rem;" style="text-align: justify;"><?= $dataProfil['deskripsi']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END PROFIL -->

    <!-- ARTIKEL -->
    <section class="artikel" id="artikel">
        <h3 class="sub-heading">Artikel</h3>
        <h1 class="heading">Paroki St. Maria Assumpta</h1>

        <div class="container">
            <div class="row justify-content-center align-items-center mb-4">
                <?php
                $artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
                while ($dataArtikel = mysqli_fetch_assoc($artikel)) {
                ?>
                    <div class="col-lg-3 mt-5">
                        <div class="card" style="box-shadow: -1px 1px 10px 1px rgba(0,0,0,0.5);">
                            <img src="img-artikel/<?= $dataArtikel['foto_artikel']; ?>" class="card-img-top" alt="..." style="height: 240px; display: flex;">
                            <div class="content px-4 pt-2 pb-3">
                                <div style="font-size: 1.2rem; margin: 10px 0; font-weight: 400; color: #666;"><i class="fas fa-calendar-alt"></i> <?= date("d F Y", strtotime($dataArtikel['tgl_publikasi'])); ?></div>
                                <p style="font-size: 1.5rem; font-weight: 600; color: #192A56"><?= $dataArtikel['judul_artikel']; ?></p>
                                <p style="font-size: 1.3rem;"><?= substr($dataArtikel['isi'], 0, 60); ?> ......</p>
                                <a style="" data-bs-toggle="offcanvas" href="#OArtikel<?= $dataArtikel['id_artikel']; ?>" role="button" aria-controls="offcanvasExample" id="selengkapnya">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- OFFCANVAS ARTIKEL -->
                    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="OArtikel<?= $dataArtikel['id_artikel']; ?>" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title" id="offcanvasExampleLabel">Detail Artikel</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" style="text-align: justify;">
                            <div>
                                <img src="img-artikel/<?= $dataArtikel['foto_artikel']; ?>" class="card-img-top" alt="..." style="height: 230px; display: flex;">
                                <div class="alert alert-secondary mt-4 align-middle text-center">
                                    <p style="font-size: 1.3rem; padding-top: 2rem;"><i class="fas fa-calendar-alt"></i> <b><?= date("d F Y", strtotime($dataArtikel['tgl_publikasi'])); ?></b> &nbsp; <i class="fas fa-user"></i> <b><?= $dataArtikel['penulis']; ?></b>
                                    </p>
                                </div>
                                <h2 class="text-center my-4" style="color: #696BFD;"><?= $dataArtikel['judul_artikel']; ?></h2>
                            </div>
                            <div style="font-size: 1.5rem;">
                                <?= $dataArtikel['isi']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- END OFFCANVAS ARTIKEL -->
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END ARTIKEL -->

    <!-- PENGUMUMAN -->
    <section class="pengumuman" id="pengumuman">
        <h3 class="sub-heading">Pengumuman</h3>
        <h1 class="heading">Paroki St. Maria Assumpta</h1>

        <div class="container">
            <div class="row justify-content-center align-items-center mb-4">
                <div class="col-lg-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample" style="font-size: 1.5rem;">
                        <?php
                        $pengumuman = mysqli_query($koneksi, "SELECT * FROM pengumuman");
                        while ($dataPengumuman = mysqli_fetch_assoc($pengumuman)) {
                        ?>
                            <div class="accordion-item py-3 px-3" style="border: none; margin-bottom: 1.6rem; box-shadow: 0 0 15px rgb(0 0 0 / 8%); border-radius: 5px;">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="font-size: 1.8rem; font-weight: 600; box-shadow: none !important; background: none !important; color: #000;">
                                        <?= $dataPengumuman['judul']; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><?= $dataPengumuman['isi']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PENGUMUMAN -->

    <!-- IKLAN -->
    <section class="iklan" id="iklan">
        <h3 class="sub-heading">Iklan</h3>
        <h1 class="heading">Paroki St. Maria Assumpta</h1>

        <div class="container">
            <div class="row justify-content-center align-items-center mb-4">
                <?php
                $iklan = mysqli_query($koneksi, "SELECT * FROM iklan");
                while ($dataIklan = mysqli_fetch_assoc($iklan)) {
                ?>
                    <div class="col-lg-3 mt-5">
                        <div class="card" style="box-shadow: -1px 1px 10px 1px rgba(0,0,0,0.5); animation-delay: 5s;">
                            <img src="img-iklan/<?= $dataIklan['gambar']; ?>" class="card-img-top" alt="..." style="height: 250px; display: flex;">
                            <div class="overlay overlayPopup">
                                <div class="text">
                                    <b>
                                        <a href="#"><span><?= $dataIklan['nama_iklan']; ?></span></a>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- END IKLAN -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/943a58e089.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>