<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Контакты</li>
		 	</ol>
		</div>
	</div>
	<section class="container-fluid">
		<div class="row">
			<div class="col-12 d-block d-lg-none mob-contacts-div px-0">
				<div class="contacts-div">
					<div>
						<div class="red-block"></div>
					</div>
					<div>
						<h3>Контакты <br> главного офиса</h3>
						<p><b>Адрес:</b> <br>
							Ижевск, 50 лет Пионерии, <br>
							д.18, офис 207
						</p>
						<p>
							<b>Телефон:</b><br>
							8 (800) 550-44-18
						</p>
						<p>
							<b>E-mail: </b><br>
							login@gmail.com
						</p>
						<div class="social-links">
							<a href="" target="_blank">
								<img src="img/icons/tw.svg">
							</a>
							<a href="" target="_blank">
								<img src="img/icons/wts.svg">
							</a>
							<a href="" target="_blank">
								<img src="img/icons/inst.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 map-form px-0 order-last order-lg-first">
				<div class="form-col">
					<div class="form-div">
						<h3 class="text-center">Написать нам</h3>
						<form>
							<input type="text" placeholder="Имя *" required="" name="">
							<input type="tel" placeholder="Номер телефона *" required="" name="">
							<input type="email" placeholder="Email *" required="" name="">
							<input type="text" placeholder="Комментарий" required="" name="">
							<div class="checkbox-div">
								<input type="checkbox" required="" class="checkbox" name="" id="checkbox">
								<label for="checkbox"></label>
								<p>Я даю свое согласие на обработку <br> <a href="">персональных данных</a></p>
							</div>
							<button class="redBtn" type="submit">Узнать</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-8 px-0 map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa313aa9e97558c3084845f633c9b2b12b07689a7da7610c3f3990f0aea3d6c65&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="contacts-div">
				<div>
					<div class="red-block"></div>
				</div>
				<div>
					<h3>Контакты <br> главного офиса</h3>
					<p><b>Адрес:</b> <br>
						Ижевск, 50 лет Пионерии, <br>
						д.18, офис 207
					</p>
					<p>
						<b>Телефон:</b><br>
						8 (800) 550-44-18
					</p>
					<p>
						<b>E-mail: </b><br>
						login@gmail.com
					</p>
					<div class="social-links">
						<a href="" target="_blank">
							<img src="img/icons/tw.svg">
						</a>
						<a href="" target="_blank">
							<img src="img/icons/wts.svg">
						</a>
						<a href="" target="_blank">
							<img src="img/icons/inst.svg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>







<?php
	include('html-end.php');
?>