<?php

$nidn = $_GET['nidn'];
include "koneksi.php";
$qry = "SELECT * FROM dosen WHERE nidn = '$nidn'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dosen</title>
</head>
<body>
<form action="prosesdosen.php" method="POST">
        <fieldset>
            <legend>Form Edit data dosen</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIDN (Nomor Induk Dosen Nasional)</td>
                    <td>:</td>
                    <td><input type="number" name="nidn" value="<?= $data['nidn'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen" value="<?= $data['nama_dosen'] ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php if($data['gender'] == 1) { ?>
                            <input type="radio" name="gender" value="1" checked> laki-laki
                            <input type="radio" name="gender" value="2"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="1"> laki-laki
                            <input type="radio" name="gender" value="2" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['no_hp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
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