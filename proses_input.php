<?php

include ('koneksi.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];


$query = "INSERT INTO peserta VALUES(NULL, '$nim', '$nama', '$kelas', '$email', '$jurusan')";

mysqli_query($koneksi, $query);

header("Location: ./index.php");

exit;
