<?php
session_start();
require 'header.php'
?>
<!DOCTYPE html>
<html lang="ru">
<body>
<div class="form">
<div><?=isset($_SESSION['success']) ? $_SESSION['success'] : ""?><br></div>
<?php unset($_SESSION['success']); ?>
<h2>Заказать экскурсию</h2></br>
<form action="Process_booking_form.php" method="post">
<div class="fields">
    <span>Фамилия, имя</span></br>
	<input type="text" name="name" value = "<?=isset($_SESSION['name']) ? $_SESSION['name'] : ""?>" placeholder="Введите имя">
	<div class = "text-danger"><?=isset($_SESSION['name']) ? $_SESSION['error_name'] : ""?></div><br>
	<span>Адрес электронной почты</span></br>
	<input type="text" name="mail" value = "<?=isset($_SESSION['mail']) ? $_SESSION['mail'] : ""?>" placeholder="Введите почту">
    <div class = "text-danger"><?=isset($_SESSION['mail']) ? $_SESSION['error_mail'] : ""?></div><br>
	<span>Выбор даты</span></br>
	<input type="date" name="date" value = "<?=isset($_SESSION['date']) ? $_SESSION['date'] : ""?>" placeholder="Введите дату">
    <div class = "text-danger"><?=isset($_SESSION['date']) ? $_SESSION['error_date'] : ""?></div><br>
	<span>Выбор времени</span></br>
	<input type="time" name="time" value = "<?=isset($_SESSION['time']) ? $_SESSION['time'] : ""?>" placeholder="Введите время">
    <div class = "text-danger"><?=isset($_SESSION['time']) ? $_SESSION['error_time'] : ""?></div><br>
	<input type="submit" value="Отправить">
</div>
</form>
</div>
<?php
require 'Footer.php';
?>
</body>
</html>
