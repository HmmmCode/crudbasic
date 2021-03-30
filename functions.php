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

function hapus($id)
{
  $conn = conn();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id")
    or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = conn();
  $id = $data['id'];
  $nama = $data['nama'];
  $nim = $data['nim'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan' 
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
