<?php

$kode_matkul = $_GET['kode_matkul'];
include "koneksi.php";
$qry = "SELECT * FROM krs WHERE kode_matkul = '$kode_matkul'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KRS</title>
    <link rel="stylesheet" href="style.css">
    <ul>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="mahasiswa.php">Mahasiswa</a></li>
    <li><a href="krs.php">KRS</a></li>
    <li><a href="dosen.php">Dosen</a></li>
    <li><a href="jadwalkuliah.php">Jadwal Kuliah</a></li>
 
</ul> 
    <style>
        .tabel table {
            margin-top : 20px;
            width : 100%;
            border : 1px;
            border-collapse: collapse;
            padding : 5px;
        }

        .tabel th {
            background-color: grey;
        }

        .tabel th, .tabel td, .tabel tr  {
            border : 1px solid black;
            padding : 5px;
        }
    </style>
</head>

<body>
    <form action="proseskrs.php" method="POST">
        <fieldset>
            <legend>Form input data KRS</legend>
            <h2>Lengkapi KRS dengan benar</h2>
            <table>
                <tr>
                    <td>Kode Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="kodematkul" value="<?= $data['kode_matkul'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Mata Kuliah</td>
                    <td>:</td>
                    <td><input type="text" name="namamatkul" value="<?= $data['nama_matkul'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value="<?= $data['kelas'] ?>"></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td><input type="number" name="semester" value="<?= $data['semester'] ?>"></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td><input type="number" name="sks" value="<?= $data['sks'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>