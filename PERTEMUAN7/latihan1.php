<?php
// variabel scope/ lingkup variabel
// $x = 10;
// // echo $x;
// function tampilx() {
//     // $x = 20;
//     global $x;
//     echo $x;
// }
// tampilx();
// echo "<br>";
// echo $x;

// superglobals
// variabel global milik php
// merupakan Array Association
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Sukmaambr";
// var_dump(($_GET));

$mahasiswa = [
    [
    "nama" => "Sukma Aprilia Ambarwati",
    "nrp" => "0897452768",
    "email" => "SukmaAmbr@gmail.com",
    "jurusan" => "REKAYASA PERANGKAT LUNAK",
    "gambar" => "jpg"
    ],
    [
        "nama" => "Yoga Ady Syahputra",
        "nrp" => "8431690779",
        "email" => "YogaMocs@gmail.com",
        "jurusan" => "TEKNIK BISNIS SEPEDA MOTOR",
        "gambar" => "jpg"
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs ["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
     <?php endforeach; ?>
        </ul>
        
</body>
</html>