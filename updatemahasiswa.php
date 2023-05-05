<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE mahasiswa SET 
        nama = '$nama',
        jurusan = '$jurusan',
        gender = '$gender',
        alamat = '$alamat',
        no_hp = '$no_hp',
        email = '$email'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di update'); 
    window.location = 'mahasiswa.php';</script>";
}else{
    echo "Data gagal disimpan";
}