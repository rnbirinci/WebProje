<?php
$kullanici = $_GET['kullanici'] ?? '';
$sifre = $_GET['sifre'] ?? '';
$validKullanici = 'rana.birinci@ogr.sakarya.edu.tr';
$validSifre = 'g231210552';
if ($kullanici === $validKullanici && $sifre === $validSifre) {
  echo "<h1>Hoşgeldiniz, g231210552!</h1>";
} else {
  header('Location: login.html');
}
?>