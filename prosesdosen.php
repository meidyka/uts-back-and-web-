<?php

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "INSERT INTO dosen VALUES (
    '$nidn', '$nama', '$gender', '$alamat', '$no_hp', '$email'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'dosen.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
