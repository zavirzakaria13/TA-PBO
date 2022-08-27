<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db_matrikulasi";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nilai_pembimbing_lapangan       = "";
$nilai_pembimbing_kp       = "";
$nilai_penguji   = "";
$buktinilai_pembimbinglapangan = "";
$sukses          = "";
$error           = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id_nilai'];
    $sql1       = "delete from nilai where id_nilai = '$id_nilai'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id              = $_GET['id_nilai'];
    $sql1            = "select * from nilai where id_nilai = '$id_nilai'";
    $q1              = mysqli_query($koneksi, $sql1);
    $r1              = mysqli_fetch_array($q1);
    $nilai_pembimbing_lapangan       = $r1['nilai_pembimbing_lapangan'];
    $nilai_pembimbing_kp       = $r1['nilai_pembimbing_kp'];
    $nilai_penguji   = $r1['nilai_penguji'];
    $buktinilai_pembimbinglapangan = $r1['buktinilai_pembimbinglapangan'];

    if ($nilai_pembimbing_lapangan == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) {
    $nilai_pembimbing_lapangan        = $_POST['nilai_pembimbing_lapangan'];
    $nilai_pembimbing_kp        = $_POST['nilai_pembimbing_kp'];
    $nilai_penguji    = $_POST['nilai_penguji'];
    $buktinilai_pembimbinglapangan  = $_POST['buktinilai_pembimbinglapangan'];

    if ($nilai_pembimbing_lapangan  && $nilai_pembimbing_kp && $nilai_penguji && $buktinilai_pembimbinglapangan) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update nilai set nilai_pembimbing_lapangan = '$nilai_pembimbing_lapangan',nilai_pembimbing_kp='$nilai_pembimbing_kp',nilai_penguji='$nilai_penguji',buktinilai_pembimbinglapangan='$buktinilai_pembimbinglapangan' where id_nilai = '$id_nilai'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1 = "insert into nilai(nilai_pembimbing_lapangan,nilai_pembimbing_kp,nilai_penguji,buktinilai_pembimbinglapangan) values ('$nilai_pembimbing_lapangan', '$nilai_pembimbing_kp', '$nilai_penguji', '$buktinilai_pembimbinglapangan')";
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
                    header("refresh:3;url=unggahnilai.php");//3 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:3;url=unggahnilai.php");//3 : detik
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nilai_pembimbing_lapangan" class="col-sm-2 col-form-label">Nilai Pembimbing Lapangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nilai_pembimbing_lapangan" name="nilai_pembimbing_lapangan" value="<?php echo $nilai_pembimbing_lapangan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nilai_pembimbing_kp" class="col-sm-2 col-form-label">Nilai Pembimbing KP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nilai_pembimbing_kp" name="nilai_pembimbing_kp" value="<?php echo $nilai_pembimbing_kp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nilai_penguji" class="col-sm-2 col-form-label">Nilai Penguji</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nilai_penguji" name="nilai_penguji" value="<?php echo $nilai_penguji ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="buktinilai_pembimbinglapangan" class="col-sm-2 col-form-label">Bukti Nilai Pembimbing Lapangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="buktinilai_pembimbinglapangan" name="buktinilai_pembimbinglapangan" value="<?php echo $buktinilai_pembimbinglapangan ?>">
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
                Data Nilai
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nilai Pembimbing Lapangan</th>
                            <th scope="col">Nilai Pembimbing KP</th>
                            <th scope="col">Nilai Penguji</th>
                            <th scope="col">Bukti Nilai Pembimbing Lapangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2   = "select * from nilai order by id_nilai desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_nilai                 = $r2['id_nilai'];
                            $nilai_pembimbing_lapangan          = $r2['nilai_pembimbing_lapangan'];
                            $nilai_pembimbing_kp          = $r2['nilai_pembimbing_kp'];
                            $nilai_penguji      = $r2['nilai_penguji'];
                            $buktinilai_pembimbinglapangan    = $r2['buktinilai_pembimbinglapangan'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nilai_pembimbing_lapangan ?></td>
                                <td scope="row"><?php echo $nilai_pembimbing_kp ?></td>
                                <td scope="row"><?php echo $nilai_penguji ?></td>
                                <td scope="row"><?php echo $buktinilai_pembimbinglapangan ?></td>
                                <td scope="row">
                                    <a href="unggahnilai.php?op=edit&id_nilai=<?php echo $id_nilai ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="unggahnilai.php?op=delete&id_nilai=<?php echo $id_nilai?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    
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