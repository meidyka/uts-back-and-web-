<?php

$matakuliah = $_GET['mata_kuliah'];
include "koneksi.php";
$qry = "SELECT * FROM jadwalkuliah WHERE mata_kuliah = '$matakuliah'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit jadwal kuliah</title>
</head>
<body>
<form action="prosesjadwalkuliah.php" method="POST">
        <fieldset>
            <legend>Form Edit jadwal kuliah</legend>
            <h2>Lengkapi jadwal kuliah dengan benar</h2>
            <table>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><input type="text" name="matakuliah" value="<?= $data['mata_kuliah'] ?>"></td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td>:</td>
                    <td><input type="text" name="hari" value="<?= $data['hari'] ?>"></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td>:</td>
                    <td><input type="text" name="jam" value="<?= $data['jam'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value="<?= $data['kelas'] ?>"></td>
                </tr>
                <tr>
                    <td>No absen</td>
                    <td>:</td>
                    <td><input type="number" name="noabsen" value="<?= $data['no_absen'] ?>"></td>
                </tr>
                <tr>
                    <td>Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="dosen" value="<?= $data['dosen'] ?>"></td>
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