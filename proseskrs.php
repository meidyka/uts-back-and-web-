<?php

$kodematkul = $_POST['kodematkul'];
$namamatkul = $_POST['namamatkul'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$sks = $_POST['sks'];

include "koneksi.php";

$qry = "INSERT INTO krs VALUES (
    '$kodematkul', '$namamatkul', '$kelas', '$semester', '$sks'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'krs.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
