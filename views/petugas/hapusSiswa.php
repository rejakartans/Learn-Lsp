<?php

require '../../public/app.php';

$nis = $_GET["nis"];

if (hapusSiswa($nis) > 0) {
  echo "<script>
  alert('Data Berhasil Di Hapus!');
  location.href='daftarSiswa.php';
  window
  </script>";
} else {
  echo "<script>
  alert('Data Gagal Di Hapus!');
  location.href='daftarSiswa.php';
  window
  </script>";
}
