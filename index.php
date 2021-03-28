<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data</a><br><br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['nim']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>

        </td>
      <?php endforeach; ?>
      </tr>

  </table>

</body>

</html>