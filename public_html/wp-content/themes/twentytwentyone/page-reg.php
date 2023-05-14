	
<?php /* Template Name: Страница регистрации*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="action" value="action_regis"/>
	<ul>
		<?php get_template_part("tegs"); ?>
		<li><label for="time">Время работы:</label></li>
		<li><textarea required id="time" name="time" placeholder="Понедельник – Суббота: 09:00 – 18:00 , Воскресенье: Выходной"></textarea></li>
		<?php get_template_part("adresdist"); ?>
		<li><label >Адрес(улица, номер дома):</label></li>
		<li><textarea required id="adres" placeholder="ул. Типографская, д. 1" name="adres"></textarea></li>
		<li><label >Карта из <a href="https://yandex.ru/map-constructor/">https://yandex.ru/map-constructor/</a>,<br> вставьте iframe: (поле не обязательно)</label></li>
		<li><textarea type="text" id="iframe" name="iframe" placeholder='<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%00000000&amp;source=constructor" width="600" height="400" frameborder="0"></iframe>'></textarea></li>
		<li><label for="url">Сайт в формате https://***** или в формате http://*****:</label></li>
		<li><input pattern="http[s]{0,1}://[\S]{1,20}" placeholder="https://www.example.ru" required type="text" id="url" name="url"></li>
		<li><label for="name">Название типографии:</label></li>
		<li><input required type="text" placeholder="Ваше название" id="name" name="name"></li>
		<li><label for="email">Ваш email:</label></li>
		<li><input required type="email" id="email" name="email" placeholder="example@mail.com"></li>
		<li><label for="tel">Телефон в формате +7**********:</label></li>
		<li><span style = " font-size: 30px;">+7</span><input style = "width: 232px;" pattern="[0-9]{10}" required type="text" id="tel" name="tel" placeholder="0000000000"></li>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="print">Описание вашей типографии:</label></li>
		<li><textarea required id="print" placeholder="Расскажите о вашей компании" name="print"></textarea></li>
		<?php get_template_part("rubr"); ?>
		<?php get_template_part("fileformwrap"); ?>
		<li><input  type="submit" id="sub" name="sub" value="Зарегистрировать"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>