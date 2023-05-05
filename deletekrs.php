<?php

$kode_matkul = $_GET['kode_matkul'];

include "koneksi.php";
$qry = "DELETE FROM krs WHERE kode_matkul = '$kode_matkul'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'krs.php'</script>";
}else{
    echo "Data gagal dihapus";
}