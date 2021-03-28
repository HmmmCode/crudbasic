<?php
require 'functions.php';
if (isset($_POST['submit'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert ('data berhasil ditambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo " data gagal ditambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3></h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>Nama : <input type="text" name="nama"></label>
      </li>
      <li>
        <label>
          NIM
          <input type="text" name="nim">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan">
        </label>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>

    </ul>

  </form>

</body>

</html>