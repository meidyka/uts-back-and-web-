<?php

$matakuliah = $_POST['matakuliah'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$kelas = $_POST['kelas'];
$noabsen = $_POST['noabsen'];
$dosen = $_POST['dosen'];

include "koneksi.php";

$qry = "UPDATE jadwalkuliah SET 
        hari = '$hari',
        jam = '$jam',
        kelas = '$kelas',
        noabsen = '$noabsen',
        dosen = '$dosen'
        WHERE matakuliah = '$matakuliah'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); 
    window.location = 'jadwalkuliah.php';</script>";
}else{
    echo "Data gagal disimpan";
}