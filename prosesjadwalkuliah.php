<?php

$matakuliah = $_POST['matakuliah'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$kelas = $_POST['kelas'];
$noabsen = $_POST['noabsen'];
$dosen = $_POST['dosen'];

include "koneksi.php";

$qry = "INSERT INTO jadwalkuliah VALUES (
    '$matakuliah', '$hari', '$jam', '$kelas', '$noabsen', '$dosen'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'jadwalkuliah.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
