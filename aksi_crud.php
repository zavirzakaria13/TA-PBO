<?php
//panggil koneksi database
include "koneksi.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO pendaftaran_ujian_kp (laporan_kp,jadwal_ujian)
                                    VALUES('$_POST[tlaporan_kp]',
                                            '$_POST[tjadwal_ujian]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($konek, "UPDATE pendaftaran_ujian_kp SET laporan_kp = '$_POST[tlaporan_kp]',
                                                          jadwal_ujian    =  '$_POST[tjadwal_ujian]'
                                                          WHERE id = '$_POST[id]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM pendaftaran_ujian_kp WHERE id = '$_POST[id]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='pendaftaranujian.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='pendaftaranujian.php';
                </script>";
    }
}
