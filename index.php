<?php
//koneksi database
require 'fungtions.php';
$tamu = query("SELECT * FROM tamu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman admin</title>
    <style>
        body{
            background-color: greenyellow;
        }
        
    </style>

</head>

<body>

    <h1 class="judul">Daftar tamu</h1>

    <a href="tambah.php">tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>NoHp</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($tamu as $row) : ?>
            <tr>
                <td><?= $row["no"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["nohp"]; ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row["no"];?>">ubah</a> |
                    <a href="hapus.php?no=<?= $row["no"]; ?>" onclick="return confirm('yakin')">hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach ?>



    </table>


</body>

</html>