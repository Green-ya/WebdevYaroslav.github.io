<?php

#phpinfo();
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Информация об Авторе и описание проекта -->
		<meta name="description" content="Портфолио веб-разработчика Ярослава Зеленского">
		<meta name="author" content="Ярослав Green Зеленский">

		<!-- Иконка, которая будет на вкладке в браузере -->
		<link rel="icon" href="img/favicon.png">
		<!-- Заголовок на вкладке в браузере -->
		<title>Сайт портфолио - Ярослав Зеленский</title>
		<!--Шрифт от Google-->
		<style>
		@import url('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=cyrillic,cyrillic-ext');
		</style>
		<!-- Подключаем наш файл со стилями, который находится в папке css-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap4-grid.min.css">
		<link rel="stylesheet" href="css/style.css">  
</head>
<body>
<header>
    <nav>
        <a href="index.php?page=main">Главная страница сайта</a> | 
        <a href="index.php?page=contacts">Контакты</a>
    </nav>
    <div class="conteiner">
			<div class="row">
				<div class="col-lg-7">
					<img class="header-img" src="img/main-img-1.png" alt="Main-picture">
				</div>
				<!-- /.col-7 -->
				<div class="col-lg-5">
					<p class="header-pre">Системный Администратор и разработчик</p>
					<h1 class="header-title">Ярослав Зеленский</h1>
					<p class="sub-title">Поддержка сервисов и инфраструктуры <br> Разработка и обслуживание сервисов и приложений</p>
					<!--div class="header-button-block">
						<button class="header-button">Связатся</button>
						<small>Это бесплатно</small>
					</div-->
				</div>
				<!-- /.col-5 -->
			</div>
			<!-- /.row -->
		</div>
</header>

<?php include basename($page).'.php'; ?>

<footer>
<div class="conteiner">
			<div class="row">
				<div class="col-4">
					<h4 class="footer-author">Ярослав Green Зеленский</h4>
					<p class="footer-text">ИТ-сопровождение</p>
				</div>
				<div class="col-4">
					<div class="socials">
						<p class="footer-subscribe">Подпишитесь:</p>
						<a href="#"><img src="img/socials/facebook-logo-button.png" alt="facebook"></a>
						<a href="#"><img src="img/socials/telegram-symbol.png" alt="telegram"></a>
						<a href="#"><img src="img/socials/vk-social-logotype.png" alt="vk"></a>
						<a href="#"><img src="img/socials/youtube-symbol.png" alt="youtube"></a>
					</div>
				</div>
				<div class="col-4">
					<div class="footer-cta">
						<p class="footer-send">Напишите мне:</p>
						<button class="footer-button">Написать</button>
					</div>
				</div>
			</div>
		</div>
</footer>
</body>
</html>