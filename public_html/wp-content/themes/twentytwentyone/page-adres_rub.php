	
<?php /* Template Name: Смена категорий и адреса*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_adres_rub"/>
	<ul>
		<?php get_template_part("adresdist"); ?>
		<li><label >Адрес(улица, номер дома):</label></li>
		<li><textarea required id="adres" placeholder="ул. Типографская, д. 1" name="adres"></textarea></li>
		<li><label >Карта из <a href="https://yandex.ru/map-constructor/">https://yandex.ru/map-constructor/</a>,<br> вставьте iframe: (поле не обязательно)</label></li>
		<li><textarea type="text" id="iframe" name="iframe" placeholder='<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%00000000&amp;source=constructor" width="600" height="400" frameborder="0"></iframe>'></textarea></li>
		<?php get_template_part("rubr"); ?>
		<li><input  type="submit" id="sub" name="sub" value="Внести изменения"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>