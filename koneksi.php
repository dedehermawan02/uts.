<?php

$koneksi = mysqli_connect("localhost", "root", "", "2106163_dede");

if ($koneksi) {
    
    echo "<script> alert('database terhubung') </script>";
}

