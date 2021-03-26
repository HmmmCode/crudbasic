<?php
require 'functions.php';
//get id from url
$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");
var_dump($mahasiswa);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3></h3>
  <ul>
    <li>Nama : <?= $mahasiswa['nama']; ?></li>
    <li>NIM : <?= $mahasiswa['nim']; ?></li>
    <li>Email : <?= $mahasiswa['email']; ?></li>
    <li>Jurusan : <?= $mahasiswa['jurusan']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="index.php">Back to Home</a></li>
  </ul>
</body>

</html>