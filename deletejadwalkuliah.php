<?php

$mata_kuliah = $_GET['mata_kuliah'];

include "koneksi.php";
$qry = "DELETE FROM jadwalkuliah WHERE mata_kuliah = '$mata_kuliah'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'jadwalkuliah.php'</script>";
}else{
    echo "Data gagal dihapus";
}