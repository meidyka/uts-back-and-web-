<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
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
    <form action="prosesdosen.php" method="POST">
        <fieldset>
            <legend>Form input data dosen</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIDN (Nomor induk dosen nasional)</td>
                    <td>:</td>
                    <td><input type="number" name="nidn"></td>
                </tr>
                <tr>
                    <td>Nama dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1"> laki-laki
                        <input type="radio" name="gender" value="2"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="number" name="no_hp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <div class ="tabel">
    <table>
        <tr>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Email</th>
        </tr>
        <?php 
        include "koneksi.php";
        $qry = "SELECT * FROM dosen";
        $exec = mysqli_query($con, $qry);
        while($data = mysqli_fetch_assoc($exec))
        {
        ?>
        <tr>
            <td><?= $data['nidn'] ?></td>
            <td><?= $data['nama_dosen'] ?></td>
            <td><?= $data['gender'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_hp'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
                <a href="editdosen.php?nidn=<?= $data['nidn'] ?>">
                    <buttom>Edit</buttom>
                </a><br>
                <a href="deletedosen.php?nidn=<?= $data['nidn'] ?>">
                    <buttom>Delete</buttom>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>