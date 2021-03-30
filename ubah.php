<?php
require 'functions.php';

// ambil id dari url
$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert ('data berhasil diubah  ');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo " data gagal diubah";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Ubah Data</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>Nama : <input type="text" name="nama" value="<?= $m['nama']; ?>"></label>
      </li>
      <li>
        <label>
          NIM
          <input type="text" name="nim" value="<?= $m['nim']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" value="<?= $m['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>

    </ul>

  </form>

</body>

</html>