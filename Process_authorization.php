<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['login_status']);
$login = trim($_POST['login']);
$_SESSION['login'] = $login;
$password = md5(trim($_POST['password']));
//zs6y&AK88b1y
$connect = mysqli_connect("localhost", "root", "", "Botanical Garden");
$loginResult = mysqli_query($connect,"SELECT * FROM `Users` WHERE `login` = '$login' AND `password` = '$password'");
if($connect && mysqli_num_rows($loginResult) == 1) {
    $_SESSION['login_status'] = "Вы вошли в аккаунт";
    header("Location: admin.php");
}
else {
    $_SESSION['login_status'] = "Неверный пароль";
    header("Location: Authorization.php");
}

