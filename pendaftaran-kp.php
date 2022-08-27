<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Poliwangi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mahasiswa Poliwangi<sup>jinggo</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="buttons.html">Mahasiswa</a>
                        <a class="collapse-item" href="pendaftaran-kp.php">Pendaftaran KP</a>
                        <a class="collapse-item" href="SuratIjin.php">Surat Izin KP</a>
                        <a class="collapse-item" href="lembar-kerja.php">Lembar Kerja KP</a>
                        <a class="collapse-item" href="pendaftaranujian.php">Pendaftaran Ujian KP</a>
                        <a class="collapse-item" href="jadwal-ujian.php">Jadwal Ujian KP</a>
                        <a class="collapse-item" href="mengunggahnilai.php">Nilai</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mohammad Zavir Zakaria</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1><b>PENDAFTARAN KP</b></h1>
                    <?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db_matrikulasi";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$Tempat_KP       = "";
$Alamat_Kp       = "";
$Tanggal_mulai   = "";
$Tanggal_selesai = "";
$Proposal        = "";
$sukses          = "";
$error           = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from pendaftaran_kp where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id              = $_GET['id'];
    $sql1            = "select * from pendaftaran_kp where id = '$id'";
    $q1              = mysqli_query($koneksi, $sql1);
    $r1              = mysqli_fetch_array($q1);
    $Tempat_KP       = $r1['Tempat_KP'];
    $Alamat_Kp       = $r1['Alamat_Kp'];
    $Tanggal_mulai   = $r1['Tanggal_mulai'];
    $Tanggal_selesai = $r1['Tanggal_selesai'];
    $Proposal        = $r1['Proposal'];

    if ($Tempat_KP == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) {
    $Tempat_KP        = $_POST['Tempat_KP'];
    $Alamat_Kp        = $_POST['Alamat_Kp'];
    $Tanggal_mulai    = $_POST['Tanggal_mulai'];
    $Tanggal_selesai  = $_POST['Tanggal_selesai'];
    $Proposal         = $_POST['Proposal'];

    if ($Tempat_KP  && $Alamat_Kp && $Tanggal_mulai && $Tanggal_selesai && $Proposal) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update pendaftaran_kp set Tempat_KP = '$Tempat_KP',Alamat_Kp='$Alamat_Kp',Tanggal_mulai='$Tanggal_mulai',Tanggal_selesai='$Tanggal_selesai',Proposal='$Proposal' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1 = "insert into pendaftaran_kp(Tempat_KP,Alamat_Kp,Tanggal_mulai,Tanggal_selesai,Proposal) values ('$Tempat_KP', '$Alamat_Kp', '$Tanggal_mulai', '$Tanggal_selesai', '$Proposal')";
            $q1   = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil msemasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="Tempat_KP" class="col-sm-2 col-form-label">Tempat_kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tempat_KP" name="Tempat_KP" value="<?php echo $Tempat_KP ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat_Kp" class="col-sm-2 col-form-label">Alamat_Kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat_Kp" name="Alamat_Kp" value="<?php echo $Alamat_Kp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_mulai" class="col-sm-2 col-form-label">Tanggal_mulai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_mulai" name="Tanggal_mulai" value="<?php echo $Tanggal_mulai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_selesai" class="col-sm-2 col-form-label">Tanggal_selesai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_selesai" name="Tanggal_selesai" value="<?php echo $Tanggal_selesai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Proposal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Proposal" name="Proposal" value="<?php echo $Proposal ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="simpan data" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header text-white bg-primary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tempat_KP</th>
                            <th scope="col">Alamat_Kp</th>
                            <th scope="col">Tanggal_mulai</th>
                            <th scope="col">Tanggal_selesai</th>
                            <th scope="col">Proposal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2   = "select * from pendaftaran_kp order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id                 = $r2['id'];
                            $Tempat_KP          = $r2['Tempat_KP'];
                            $Alamat_Kp          = $r2['Alamat_Kp'];
                            $Tanggal_mulai      = $r2['Tanggal_mulai'];
                            $Tanggal_selesai    = $r2['Tanggal_selesai'];
                            $Proposal           = $r2['Proposal'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $Tempat_KP ?></td>
                                <td scope="row"><?php echo $Alamat_Kp ?></td>
                                <td scope="row"><?php echo $Tanggal_mulai ?></td>
                                <td scope="row"><?php echo $Tanggal_selesai ?></td>
                                <td scope="row"><?php echo $Proposal ?></td>
                                <td scope="row">
                                    <a href="pendaftaran-kp.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="pendaftaran-kp.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

</body>

</html>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; e-learningPoliwangi</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>