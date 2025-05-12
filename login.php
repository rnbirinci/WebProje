<?php
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
$validUser = 'b1812100001@sakarya.edu.tr';
$validPass = 'b1812100001';
if ($user === $validUser && $pass === $validPass) {
  echo "<h1>Hoşgeldiniz, " . htmlspecialchars(substr($validPass,1)) . "!</h1>";
} else {
  header('Location: login.html');
}
?>