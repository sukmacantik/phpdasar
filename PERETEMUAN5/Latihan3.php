<?php
$mahasiswa = [
["Sukma Aprilia Ambarwati" , "0897452768" , "Rekayasa Perangkat Lunak" , "Sukmaambr@Gmail.com"],
["Yoga Ady Syahputra" , "8431690779" , "Teknik Bisnis Sepeda Motor" , "Yogamocs@Gmail.com"],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama :<?=$mhs[0]; ?></li>
            <li>NRP :<?=$mhs[1]; ?></li>
            <li>Jurusan :<?=$mhs[2]; ?></li>
            <li>Email :<?=$mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    </body>
    </html>
