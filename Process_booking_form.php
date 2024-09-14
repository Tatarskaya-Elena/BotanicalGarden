<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['mail']);
unset($_SESSION['date']);
unset($_SESSION['time']);
unset($_SESSION['error_name']);
unset($_SESSION['error_mail']);
unset($_SESSION['error_date']);
unset($_SESSION['error_time']);
unset($_SESSION['success']);

$_SESSION['name'] = trim($_POST['name']);
$_SESSION['mail'] = trim($_POST['mail']);
$_SESSION['date'] = trim($_POST['date']);
$_SESSION['time'] = trim($_POST['time']);
if(strlen($_SESSION['name']) <= 1) {
    $_SESSION['error_name'] = "Введите корректное имя";
    $_SESSION['name'] = "";
    header('Location: Booking_excursions.php');
}
else
    $_SESSION['error_name'] = "";
if(strlen($_SESSION['mail']) < 5 || !strpos($_SESSION['mail'], "@")) {
    $_SESSION['error_mail'] = "Введите корректную почту";
    $_SESSION['mail'] = "";
    header('Location: Booking_excursions.php');
}
else
    $_SESSION['error_mail'] = "";
if(strlen($_SESSION['date']) < 1) {
    $_SESSION['error_date'] = "Выберите дату";
    header('Location: Booking_excursions.php');
}
else
    $_SESSION['error_date'] = "";
if(strlen($_SESSION['time']) < 1) {
    $_SESSION['error_time'] = "Выберите время";
    header('Location: Booking_excursions.php');
}
else
    $_SESSION['error_time'] = "";

if ($_SESSION['error_name'] == "" && $_SESSION['error_mail'] == "" && $_SESSION['error_date'] == "" && $_SESSION['error_time'] == "") {
    $connect = mysqli_connect("localhost", "root", "", "Botanical Garden");
    if (!$connect)
        die("Ошибка соединения: " . mysqli_connect_error());
    $sql = "INSERT INTO Bookings (name, mail, date, time) VALUES ('{$_SESSION['name']}', '{$_SESSION['mail']}', '{$_SESSION['date']}', '{$_SESSION['time']}')";
    if (mysqli_query($connect, $sql)) {
        $_SESSION['success'] = 'Вы записались на экскурсию. На вашу почту отправлено письмо, чтобы вы не забыли.';
        $subject = "Экскурсия по ботаническому саду";
        $message = "Вы записаны на экскурсию в ботанический сад " . $_SESSION['date'] . " в " . $_SESSION['time'];
        echo($message);
        mail($_SESSION['mail'], $subject, $message);
    }
    $_SESSION['name'] = "";
    $_SESSION['mail'] = "";
    $_SESSION['date'] = "";
    $_SESSION['time'] = "";
}
header('Location: Booking_excursions.php');
exit;