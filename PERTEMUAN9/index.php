<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari tabel mahasiswa/query data mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_rows()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// if (!$result) {
//    echo mysqli_error($conn);
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
   <h1>Daftar Mahasiswa</h1>

   <table border="1" cellpadding="10" cellspacing="0">
   
   <tr>
        <th>NO.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
   </tr>

   <tr>
        <td>1</td>
        <td>
                <a href="">hapus</a>
                <a href="">ubah</a>
   </td>
   <td><img src="img/jj.jpg" alt=""></td>
   <td>3509026565</td>
   <td>SukmaAmbar</td>
   <td>SukmaAmbar@gmail.com</td>
   <td>RPL</td>

   </tr>
   </table>

</body>
</html>