﻿<!DOCTYPE html>
<meta charset="utf-8" lang="ru">
<html>

<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Proj</title>
	<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
	<link></link>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="index.php">NarrowSEC</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="first current_page_item"><a href="index.php">Дом</a></li>
					<li><a href="info.php">Инфо</a></li>
					<li><a href="proj.php">Проекты</a></li>
					<li><a href="links.php">Ссылки</a></li>
					<li><a href="none">Форум</a></li>
					<li class="last"><a href="cont.php">Контакты</a></li>
				</ul>
				<br class="clearfix" />
			</div>

			<?php
  $quotes = array();
  $quotes[] = " Ценность каждого человека определяется ценностью предметов его стремлений ";
  $quotes[] = " Безопасность - это процесс, а не результат ";
  $quotes[] = " Изучай правила, чтобы знать, как правильно их нарушить ";
  $quotes[] = " Чем ближе государство к падению, тем многочисленнее его законы ";
  $number = mt_rand(0, count($quotes) - 1);
  echo $quotes[$number];
?>

		</div>
		<div id="page">
			<div id="content">
				<div id="post1">
					<h2>Милости просим</h2>
					<img class="alignleft" src="images/imgonline-com-ua-Resize-yh0lc5G0QE0ok.jpg" width="200" height="200" />
					<p>
						Это мой первый, ознакомительный <strong>проект</strong>, задача которого - <em>закрепить приобретенные навыки верстки web-сайтов на практике.</em><br> Позже он послужит началом в создании многофункционального, интерактивного веб - ресурса.
					</p>
				</div>
				<div id="post2">
					<h3>о предстоящих новшествах</h3>
					<p>
						<em>Список будет постоянно обновляться в зависимости от нужд создателя</em>
					</p>
					<ul class="list">
						<li class="first"><a href="https://habrahabr.ru/company/dataart/blog/242593/">новостная лента</a></li>
						<li><a href="https://habrahabr.ru/post/82472/">возможность регистрации</a></li>
						<li><a href="https://habrahabr.ru/sandbox/46674/">тематический форум</a></li>
						<li><a href="https://ru.wikipedia.org/wiki/JavaScript">интерактивное преображение</a></li>
						<li class="last"><a href="no">работа над внешним видом</a></li>
					</ul>
				</div>
				<div id="post3">
					<h3>коротко о вкладках</h3>
					<ul class="section-list">
						<li class="first">
							<h4>Инфо</h4><span><em>Будет содержать поверхностную информацию о создателе, взгляды, мнение.</em></span></li>
						<li>
							<h4>Проекты</h4><span><em>Тут будет информация о сторонних проектах создателя, помимо web.</em></span></li>
						<li>
							<h4>Ссылки</h4><span><em>Отголоски создателя на просторах всемирной паутины.</em></span></li>
						<li>
							<h4>Помощь</h4><span><em>Карта сайта и ответы на вопросы.</em></span></li>
						<li class="last">
							<h4>Контакты</h4><span><em>Эта вкладка создана на случай совместных проектов.</em></span></li>
					</ul>
				</div>
				<br class="clearfix" />
			</div>
			<div id="sidebar">
				<h3>Источники</h3>
				<p>
					<em>Список истользуемых технологий и источников при написании сайта.</em>
				</p>
				<p>
					<em>Также будет обновляться в зависимости от контента.</em>
				</p>
				<ul class="list">
					<li class="first"><a href="https://ru.wikipedia.org/wiki/HTML">HTML</a></li>
					<li><a href="https://htmlacademy.ru/">HTML academy</a></li>
					<li><a href="https://www.w3schools.com/">W3schools</a></li>
					<li><a href="https://fonts.google.com/">Google fronts</a></li>
					<li class="last"><a href="https://habrahabr.ru/">Habrahabr</a></li>
				</ul>
				<h3>Опрос</h3>
				<form method="post" action="#">
					<input type="hidden" name="poll" value="poll">
					<table align=center style="font-size:12pt" width=240 border=0>
						<tr>
							<th align=center>Оценка оформления</td>
						</tr>
						<tr>
							<td><input type='radio' name='vote' value='1'> 1</td>
						</tr>
						<tr>
							<td><input type='radio' name='vote' value='2'> 2</td>
						</tr>
						<tr>
							<td><input type='radio' name='vote' value='3'> 3</td>
						</tr>
						<tr>
							<td><input type='radio' name='vote' value='4'> 4</td>
						</tr>
						<tr>
							<td><input type='radio' name='vote' value='5'> 5</td>
						</tr>
						<tr>
							<td align=center><input type='submit' value='  Принять  '></td>
						</tr>
					</table>
				</form>

			</div>
			<br class="clearfix" />
		</div>
	</div>
	<div id="footer">
		Всего хорошего. <a href="https://vk.com/tyvjdsyjvtl" rel="nofollow"> DMNVMN </a>.
	</div>
</body>

</html>
