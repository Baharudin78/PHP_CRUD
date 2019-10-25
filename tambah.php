<?php
require 'fungtions.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
             <script>
                 alert('data berhasil ditambahkan !');
                 document.location.href = 'index.php';
             </script>
       ";
    } else {
        echo "data gagal ditambahkan";
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
    <h1>Tambah data Tamu</h1>
    <form action="" method="post">
        <ul>

            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" required> 
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="Email" required>
            </li>
            <li>
                <label for="NoHP">NoHp : </label>
                <input type="text" name="NoHp" required>
            </li>
            <li>
                <button type="submit" name="submit">Kirim Data</button>
            </li>
        </ul>
    </form>

</body>

</html>