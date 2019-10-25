<?php

require 'fungtions.php';

//ambil data di url
$no = $_GET["no"];
//query data tamu
$tamu = query("SELECT * FROM tamu WHERE no = $no")[0];


//cek tombol
if (isset($_POST["submit"])) {
    //cek data telah diubah
    if (ubah($_POST) > 0) {
        echo "
             <script>
                 alert('data berhasil diubah !');
                 document.location.href = 'index.php';
             </script>
       ";
    } else {
        echo "data gagal diubah";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data Tamu</title>
    <style>
        body{
            background-color: greenyellow;
        }
        
    </style>
</head>

<body>
    <h1>Ubah data Tamu</h1>
    <form action="" method="post">
        <input type="hidden" name="no" value="<?= $tamu["no"];?>">
        <ul>

            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" required value="<?= $tamu["nama"];?>"> 
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" required value="<?= $tamu["email"];?>">
            </li>
            <li>
                <label for="NoHp">Komentar : </label>
                <input type="text" name="NoHp" required value="<?= $tamu["nohp"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>

</html>