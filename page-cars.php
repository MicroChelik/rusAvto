<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Автопарк</li>
		 	</ol>
		</div>
	</div>
	<section>
		<div class="container">
			<div class="row h2-mb align-items-center">
				<div class="col-lg-3">
					<h2>Автопарк</h2>
				</div>
				<div class="col-lg-3 select-div">
					<select>
						<option>Тип транспортного средства</option>
						<option>2</option>
					</select>
				</div>
				<div class="col-lg-3 select-div">
					<select>
						<option>Тоннаж</option>
						<option>2</option>
					</select>
				</div>
			</div>
			<div class="row car">
				<div class="col-lg-12">
					<p class="title">Название автомобиля</p>
					<p>3 метра/1,5 тонны</p>
				</div>
				<div class="col-lg-3 car-img">
					<img src="img/car4.png">
				</div>
				<div class="col-lg-3 characteristics">
					<p class="subtitle">Характиристики автомобиля</p>
					<ul>
						<li><p>Длина</p> <p>3 м</p></li>
						<li><p>Ширина</p> <p>2 м</p></li>
						<li><p>Высота</p> <p>1.5 м</p></li>
						<li><p>Объем</p> <p>6 м</p></li>
						<li><p>Грузоподьемность</p> <p>1 500 кг</p></li>
					</ul>
				</div>
				<div class="col-lg-6 car-description">
					<div>
						<p class="subtitle">Дополнительная информация</p>
						<p>Безусловно, курс на социально-ориентированный национальный проект напрямую зависит от новых принципов формирования материально-технической и кадровой базы. Прежде всего, высокотехнологичная.</p>
					</div>
					<div class="d-flex">
						<a data-fancybox data-animation-duration="700" data-src="#orderCar" href="javascript:;">
							<button class="redBtn">Заказать</button>
						</a>
							<div id="orderCar" style=" display: none;">
								<div class="card">
									<div class="card-header">
										<h1>Заказать грузоперевозку</h1>
									</div>
									<div class="card-body">
										<form>
											<input type="text" placeholder="Имя*" required>
											<input type="tel" placeholder="Номер телефона*" required="">
											<input type="text" placeholder="Комментарий**" required>
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
				</div>
			</div>
			<div class="row car">
				<div class="col-lg-12">
					<p class="title">Название автомобиля</p>
					<p>3 метра/1,5 тонны</p>
				</div>
				<div class="col-lg-3 car-img">
					<img src="img/car4.png">
				</div>
				<div class="col-lg-3 characteristics">
					<p class="subtitle">Характиристики автомобиля</p>
					<ul>
						<li><p>Длина</p> <p>3 м</p></li>
						<li><p>Ширина</p> <p>2 м</p></li>
						<li><p>Высота</p> <p>1.5 м</p></li>
						<li><p>Объем</p> <p>6 м</p></li>
						<li><p>Грузоподьемность</p> <p>1 500 кг</p></li>
					</ul>
				</div>
				<div class="col-lg-6 car-description">
					<div>
						<p class="subtitle">Дополнительная информация</p>
						<p>Безусловно, курс на социально-ориентированный национальный проект напрямую зависит от новых принципов формирования материально-технической и кадровой базы. Прежде всего, высокотехнологичная.</p>
					</div>
					<div class="d-flex">
						<a data-fancybox data-animation-duration="700" data-src="#orderCar" href="javascript:;">
							<button class="redBtn">Заказать</button>
						</a>
					</div>
				</div>
			</div>
			<div class="row car">
				<div class="col-lg-12">
					<p class="title">Название автомобиля</p>
					<p>3 метра/1,5 тонны</p>
				</div>
				<div class="col-lg-3 car-img">
					<img src="img/car4.png">
				</div>
				<div class="col-lg-3 characteristics">
					<p class="subtitle">Характиристики автомобиля</p>
					<ul>
						<li><p>Длина</p> <p>3 м</p></li>
						<li><p>Ширина</p> <p>2 м</p></li>
						<li><p>Высота</p> <p>1.5 м</p></li>
						<li><p>Объем</p> <p>6 м</p></li>
						<li><p>Грузоподьемность</p> <p>1 500 кг</p></li>
					</ul>
				</div>
				<div class="col-lg-6 car-description">
					<div>
						<p class="subtitle">Дополнительная информация</p>
						<p>Безусловно, курс на социально-ориентированный национальный проект напрямую зависит от новых принципов формирования материально-технической и кадровой базы. Прежде всего, высокотехнологичная.</p>
					</div>
					<div class="d-flex">
						<a data-fancybox data-animation-duration="700" data-src="#orderCar" href="javascript:;">
							<button class="redBtn">Заказать</button>
						</a>
					</div>
				</div>
			</div>
			<div class="row pagination-container">
				<div class="col-auto">
					<div class="d-flex align-items-center">
						<ul>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li class="active">5</li>
						</ul>
						<div class="prev-page">
							
						</div>
						<div class="next-page">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>







<?php
	include('html-end.php');
?>