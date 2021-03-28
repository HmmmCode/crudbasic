<?php

function conn()
{
  return mysqli_connect('localhost', 'root', '', 'crudbasic');
}

function query($query)
{
  $conn = conn();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  $conn = conn();
  $nama = $data['nama'];
  $nim = $data['nim'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $query = " INSERT INTO mahasiswa 
            VALUES (null, '$nama', '$nim', '$email', '$jurusan')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
