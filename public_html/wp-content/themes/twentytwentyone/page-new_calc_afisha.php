	
<?php /* Template Name: Афиша и банеры*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_new_calc_afisha"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		<li><label for="name">Название:</label></li>
		<li><input required type="text" placeholder="Название" id="name" name="name"></li>
		<li><label for="cost">Стоимость за площадь 100мм * 100мм:</label></li>
		<li><input required type="number" id="cost" name="cost" placeholder="0000"></li>
		<li><input  type="submit" id="sub" name="sub" value="Создать"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>