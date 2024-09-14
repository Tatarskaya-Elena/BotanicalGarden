<?php
session_start();
if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == "Вы вошли в аккаунт")
    header("Location: admin.php");
require 'header.php'
?>
<!DOCTYPE html>
<html lang="ru">
<body>
<div class="form">
<form action = "Process_authorization.php" method = "post">
<h2>Вход в аккаунт администратора</h2>'
<div class="fields">
<span>Введите логин</span></br>
   <input type="text" name="login" value = "<?=isset($_SESSION['login']) ? $_SESSION['login'] : ""?>" placeholder="Логин"></br>
  <span>Введите пароль</span></br>
    <input type="password" name="password" placeholder="Пароль">
    <div class = "text-danger"><?=isset($_SESSION['login']) ? $_SESSION['login_status'] : ""?></div><br>
    <input type="submit" value="Войти">
    </div>
</form>
</div>
<?php
require 'Footer.php';
?>
</body>
</html>