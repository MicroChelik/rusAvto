<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=bb5a6aff-2144-414d-87dc-ed5295dd426a
&lang=ru_RU" type="text/javascript"></script>
	<title>Русавтофлот</title>
</head>
<body>
	<section class="main-section">
		<header>
			<div class="container">
				<div class="row d-lg-flex d-none">
					<div class="col-lg-2 logo-div">
						<a href="index.php">
							<div>
								<img src="img/logo1.png">
								<img src="img/logo2.png">
							</div>
						</a>
					</div>
					<div class="col-lg-auto nav-div">
						<nav>
							<ul class="topmenu">
								<li><a href="">О компании</a></li>
								<li><div class="li-div"><a href="" class="submenu-link">Грузоперевозки</a><div class="redArrow"></div></div>
									<ul class="submenu">
										<li><a href="">Перевозка сборными грузами</a></li>
										<li><a href="">Паллетные перевозки</a></li>
										<li><a href="">Рефрижераторные перевозки</a></li>
										<li><a href="">Перевозки автоцистернами</a></li>
										<li><a href="">Кормовозы</a></li>
										<li><a href="">Перевозки с/х животных</a></li>
										<li><a href="">Зерновозы</a></li>
									</ul>
								</li>
								<li><a href="">Автопарк</a></li>
								<li><a href="">Документация</a></li>
								<li><a href="">Контакты</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-auto header-contacts">
						<div class="header-contacts-icon">
							<img src="img/icons/phone.svg">
						</div>
						<div class="header-contacts-text">
							<div class="header-contacts-line">
								<p>8 (800) 550-44-18</p>
							</div>
							<div>
								<p>login@gmail.com</p>
							</div>
						</div>
						<div class="header-contacts-button">
							<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
								<button class="redBtn">Обратный звонок</button>
							</a>
							<div id="orderCall" style=" display: none;">
								<div class="card">
									<div class="card-header">
										<h1>Обратный звонок</h1>
									</div>
									<div class="card-body">
										<form>
											<input type="text" placeholder="Имя*" required>
											<input type="tel" placeholder="Номер телефона*" required="">
											<div class="checkbox-div">
												<!-- <input type="checkbox2" required="" class="checkbox" name="" id="checkbox2">
												<label for="checkbox2"></label> -->
												<label class="custom-control custom-checkbox">
											   		<input type="checkbox" value="2" name="checkbox3" class="custom-control-input">
											   		<span class="custom-control-label" for="checkbox3"></span>
											   	</label>
												<p>Я даю свое согласие на обработку <br> <a href="">персональных данных</a></p>
											</div>
											<button class="redBtn">ОТПРАВИТЬ</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mobile-menu d-lg-none d-flex justify-content-between">
					<div class="col-6 logo-div">
						<a href="index.php">
							<div>
								<img src="img/logo1.png">
							</div>
						</a>
					</div>
					<div class="col-auto d-flex align-items-center">
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
					<div class="men">
						<ul class="topmenu">
							<li><a href="">О компании</a></li>
							<li class="d-block"> <div class="li-div"> <a href="" class="submenu-link">Грузоперевозки </a> <div class="redArrow"></div></div>
								<ul class="submenu">
									<li><a href="">Перевозка сборными грузами</a></li>
									<li><a href="">Паллетные перевозки</a></li>
									<li><a href="">Рефрижераторные перевозки</a></li>
									<li><a href="">Перевозки автоцистернами</a></li>
									<li><a href="">Кормовозы</a></li>
									<li><a href="">Перевозки с/х животных</a></li>
									<li><a href="">Зерновозы</a></li>
								</ul>
							</li>
							<li><a href="">Автопарк</a></li>
							<li><a href="">Документация</a></li>
							<li><a href="">Контакты</a></li>
						</ul>
						<div class="last-mobile-line">
							<div class="col-12">
								<div class="d-flex mt-3">
									<p class="mr-3"><a href="tel:+7 (34141) 3 84 94">8 (800) 550-44-18</a></p>
									<p><a href="mailto:Salex73@ya.ru">login@gmail.com</a></p>
								</div>
								<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
									<div class="mb-4">
										<button class="redBtn">ОБРАТНЫЙ ЗВОНОК</button>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="container slider-main-container">
			<div class="row">
				<div class="slider-main">
					<div class="col">
						<h2>Грузоперевозки по России и странам ближнего зарубежья</h2>
						<a data-fancybox data-animation-duration="700" data-src="#request" href="javascript:;">	
							<button class="redBtn">Оставить заявку</button>
						</a>
							<div id="request" style=" display: none;">
								<div class="card">
									<div class="card-header">
										<h1>Оставьте заявку</h1>
										<p class="text-center">Хотите быстро найти перевозчика и сэкономить до 40%?</p>
									</div>
									<div class="card-body">
										<form>
											<input type="text" placeholder="Имя*" required>
											<input type="tel" placeholder="Номер телефона*" required="">
											<input type="email" placeholder="Email*" required>
											<div class="checkbox-div">
												<label class="custom-control custom-checkbox">
											   		<input type="checkbox" value="2" name="checkbox4" class="custom-control-input">
											   		<span class="custom-control-label" for="checkbox4"></span>
											   	</label>
												<p>Я даю свое согласие на обработку <br> <a href="">персональных данных</a></p>
											</div>
											<button class="redBtn">ОТПРАВИТЬ</button>
										</form>
									</div>
								</div>
							</div>
					</div>
					<div class="col">
						<h2>2Грузоперевозки по России и странам ближнего зарубежья</h2>
						<button class="redBtn">Оставить заявку</button>
					</div>
				</div>
			</div>
		</section>
	</section>