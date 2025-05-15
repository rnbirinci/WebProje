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



/* function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Boş alan kontrolü
    if (empty($username) || empty($password)) {
        header("Location: login.html");
        exit();
    }

    // E-posta kontrolü
    if (!is_valid_email($username)) {
        header("Location: login.html");
        exit();
    }

    // Kullanıcı adı ve şifre doğrulama
    $expectedDomain = '@sakarya.edu.tr';
    $studentId = strstr($username, '@', true); // 'b1812100001'

    if (str_ends_with($username, $expectedDomain) && $password === $studentId) {
        echo "Hoşgeldiniz $password";
    } else {
        header("Location: login.html");
        exit();
    }
} else {
    header("Location: login.html");
    exit();
} */
?>