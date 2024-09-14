<?php
session_start();
if (!isset($_SESSION['login_status']) || $_SESSION['login_status'] != "Вы вошли в аккаунт")
    header("Location: Authorization.php");
require 'header.php';
?>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<div class="table">
<?php
date_default_timezone_set('Europe/Moscow');
$CurrDate = date('Y-m-d');
$CurrTime = date('h:i');
echo '<b>Экскурсии на сегодня</b><br>';
$connect = mysqli_connect("localhost", "root", "", "Botanical Garden");
$booking_query = mysqli_query($connect,"SELECT * FROM `Bookings` WHERE `date` = '$CurrDate' AND `time` >= '$CurrTime' ORDER BY `time` ASC");
if ($booking_query) {
    while ($row = mysqli_fetch_assoc($booking_query)) {
        echo '<table style="width:50%">
                <tr> 
                  <td>'.$row["name"].'</td> 
                  <td>'.$row["mail"].'</td> 
                  <td>'.date('H:i', strtotime($row['time'])) .'</td> 
                </tr>
              </table>';
    }
    $booking_query->free();
}
echo '<br><br><b>Все экскурсии</b><br>';
$booking_query = mysqli_query($connect,"SELECT * FROM `Bookings` WHERE `date` >= '$CurrDate' ORDER BY `date` ASC, `time` ASC");
if ($booking_query) {
    while ($row = mysqli_fetch_assoc($booking_query)) {
        echo '<table style="width:50%">
                <tr> 
                  <td>'.$row["name"].'</td> 
                  <td>'.$row["mail"].'</td> 
                  <td>'.date('d.m.Y', strtotime($row['date'])) .'</td> 
                  <td>'.date('H:i', strtotime($row['time'])) .'</td> 
                </tr>
              </table>';
    }
    $booking_query->free();
}?>
</div>
<?php
require 'Footer.php';
?>