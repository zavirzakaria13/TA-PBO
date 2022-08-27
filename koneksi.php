<?php

//koneksi ke database
$server = "localhost";
$user = "root";
$password ="";
$database ="db_matrikulasi";

//buat koneksi
$konek = mysqli_connect($server, 
                        $user, 
                        $password, 
                        $database) 
                        or die(mysqli_error($konek));
?> 