<?php
//array= variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key nya adalah inde yg dimulai dari 0

//untuk membuat array
$hari = array("senin" , "selasa" , "rabu" , "dst");
//cara baru
$bulan = ["januari", "februari" , "maret"];
$arr1 = [123, "tulisan" , false];

//menampilkan array bisa dengan :
//vaedam() / print_r()
//echo "<br>";
//print_r($bulan);

var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?>