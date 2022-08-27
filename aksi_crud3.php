<?php
//panggil koneksi database
include "koneksi3.php";

//uji coba tombol simpan
if (isset($_POST['bsimpan'])) {
    //persiapan simpan data baru
    $simpan = mysqli_query($konek, "INSERT INTO nilai (nilai_pembimbing_lapangan, nilai_pembimbing_kp, nilai_penguji, bukti_nilai_pembimbing_lapangan)
                                    VALUES('$_POST[tnilai_pembimbing_lapangan]',
                                            '$_POST[tnilai_pembimbing_kp]',
                                            '$_POST[tnilai_penguji]',
                                            '$_POST[tbukti_nilai_pembimbing_lapangan]')");
    if ($simpan) {
        echo "<script>
                alert('Simpan data succes!');
                document.location='mengunggahnilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='mengunggahnilai.php';
                </script>";
    }
}

//uji coba tombol ubah
if (isset($_POST['bubah'])) {
    //persiapan ubah data baru 
    $ubah = mysqli_query($konek, "UPDATE nilai SET        nilai_pembimbing_lapangan          =  '$_POST[tnilai_pembimbing_lapangan]',
                                                          nilai_pembimbing_kp                =  '$_POST[tnilai_pembimbing_kp]',
                                                          nilai_penguji                      =  '$_POST[tnilai_penguji]',
                                                          bukti_nilai_pembimbing_lapangan    =  '$_POST[tbukti_nilai_pembimbing_lapangan]'
                                                          WHERE id_nilai = '$_POST[id_nilai]'
                                                        ");
    if ($ubah) {
        echo "<script>
                alert('Ubah data succes!');
                document.location='mengunggahnilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Ubah  data Gagal!');
                document.location='mengunggahnilai.php';
                </script>";
    }
}

//uji coba tombol Hapus
if (isset($_POST['bhapus'])) {
    //persiapan hapus data baru 
    $hapus = mysqli_query($konek, "DELETE FROM nilai WHERE id_nilai = '$_POST[id_nilai]' ");

    //jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data succes!');
                document.location='mengunggahnilai.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='mengunggahnilai.php';
                </script>";
    }
}
