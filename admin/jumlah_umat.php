<?php
require '../koneksi.php';
if (!isset($_SESSION["admin"]) or empty($_SESSION["admin"])) {
    echo "<script> alert('Silakan Login');</script>";
    echo "<script> location='login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Admin SIMPTA</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php require 'navTop.php'; ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <?php require 'navSide.php'; ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="jumlah_umat.php">Jumlah Umat</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah"><i class="fas fa-plus"></i></a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Opsi</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Jumlah Umat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $dJumlahUmat = mysqli_query($koneksi, "SELECT * FROM jumlah_umat"); ?>
                                        <?php while ($jumlahUmat = $dJumlahUmat->fetch_assoc()) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="btn btn-group">
                                                        <a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalUbah<?php echo $jumlahUmat['id_jumlah_umat']; ?>"><i class="fas fa-edit"></i></a>
                                                        <a href="hJumlahUmat.php?id=<?php echo $jumlahUmat['id_jumlah_umat']; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </th>
                                                <td><?php echo $jumlahUmat["tahun"] ?></td>
                                                <td><?php echo $jumlahUmat["jumlah_umat"] ?></td>
                                            </tr>


                                            <!-- Modal Ubah Data -->
                                            <div class="modal fade" id="ModalUbah<?php echo $jumlahUmat['id_jumlah_umat']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="ModalLabel">Ubah Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; outline: none;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data" action="jumlah_umat.php?id=<?php echo $jumlahUmat['id_jumlah_umat']; ?>">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Tahun :</label>
                                                                    <input type="number" class="form-control" name="tahun" value="<?php echo $jumlahUmat["tahun"] ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Jumlah Umat :</label>
                                                                    <input type="number" class="form-control" name="jumlah_umat" value="<?php echo $jumlahUmat["jumlah_umat"] ?>">
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
                                                            <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                        </form>
                                                        <?php
                                                        if (isset($_POST['ubah'])) {
                                                            $sql = "UPDATE jumlah_umat SET tahun = '$_POST[tahun]', jumlah_umat = '$_POST[jumlah_umat]' WHERE id_jumlah_umat = '$_GET[id]'";

                                                            $koneksi->query($sql);
                                                            if ($koneksi) {

                                                                echo "<script>alert('Data Berhasil Diubah');</script>";
                                                                echo "<script>location='jumlah_umat.php';</script>";
                                                            } else {
                                                                echo "<script>alert('Data Gagal Diubah');</script>";
                                                                echo "<script>history.back();</script>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Ubah Data -->
                                        <?php }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalLabel">Tambah Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; outline: none;">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-form-label">Tahun :</label>
                                                <input type="number" class="form-control" name="tahun" id="tahun" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Jumlah Umat :</label>
                                                <input type="number" class="form-control" name="jumlah_umat" id="jumlah_umat" required>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                                    </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['tambah'])) {
                                        $koneksi->query("INSERT INTO jumlah_umat (tahun, jumlah_umat) VALUES ('$_POST[tahun]', '$_POST[jumlah_umat]')");

                                        echo "<script>alert('Data Berhasil Ditambah');</script>";
                                        echo "<script>location='jumlah_umat.php';</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Tambah Data -->

                    </div>
                </div>
            </div>
            <!-- *************************************************************** -->
            <!-- End First Cards -->
            <!-- *************************************************************** -->

            <!-- *************************************************************** -->
            <!-- End Top Leader Table -->
            <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php require 'footer.php'; ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarkub.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>