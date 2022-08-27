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
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:3;url=index2.php");//3 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:3;url=index2.php");//3 : detik
                }
                ?>
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
                                    <a href="index2.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="index2.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    
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