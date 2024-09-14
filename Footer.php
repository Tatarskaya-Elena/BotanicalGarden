<!DOCTYPE html>
<html lang="ru">

<footer>
	<br>
	<div class="Contacts">
		<div class="contacts">
		<h2>
		Контакты
		</h2>
		<img src="images/contacts1.jpg"/  align="left" class="imagecnt">
		<p>
			 +7 (906) 676-67-18, +7 (951) 555-43-30
		</p>
		<img src="images/contacts2.jpg"/  align="left" class="imagecnt">
		<p>
			 г. Воронеж, Олимпийский бульвар, дом 12, 2 подъезд.
		</p>
		<img src="images/contacts3.jpg"/  align="left" class="imagecnt">
		<p>
			 vsubotsad@mail.ru
		</p>
	<a href="https://t.me/botanical_garden_vrn"target="_blank"><img src="images/telegram.jpg"class="imagecnt"></a>
	<a href="https://vk.com/club95330076"target="_blank"><img src="images/vk.jpg"class="imagecnt"></a>
	<a href="https://api.whatsapp.com/send?phone=79066766718"target="_blank"><img src="images/whatsapp.jpg"class="imagecnt"></a>
	</div>
	<div class="map">
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5a446c318250826c3eefe5bd1e03e66f75e66c808c4b6fae1e290452755e5d1d&amp;width=342&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>
	</div>
	<div class="admin">
 <a href="Authorization.php">
 </br>
     <image src="images/entrance.jpg"class="imagecnt"></br></image>
        <?= (isset($_SESSION['login_status']) && $_SESSION['login_status'] == "Вы вошли в аккаунт") ? "Экскурсии" :"Вход(admin)" ?>
    </a>
    </div>
	<!--<script src="js/map.js">
		 </script>-->
</footer>
</html>