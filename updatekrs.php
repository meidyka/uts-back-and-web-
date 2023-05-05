<?php

$kodematkul = $_POST['kodematkul'];
$namamatkul = $_POST['namamatkul'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$sks = $_POST['sks'];

include "koneksi.php";

$qry = "UPDATE krs SET 
        namamatkul = '$namamatkul',
        kelas = '$kelas',
        semester = '$semester',
        sks = '$sks',
        WHERE kodematkul = '$kodematkul'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); 
    window.location = 'krs.php';</script>";
}else{
    echo "Data gagal disimpan";
}