	
<?php /* Template Name: Поменять время работы*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_time"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		<li><label for="time">Новое время работы:</label></li>
		<li><textarea required id="time" name="time" placeholder="Понедельник – Суббота: 09:00 – 18:00 , Воскресенье: Выходной"></textarea></li>
		<li><input  type="submit" id="sub" name="sub" value="Поменять время работы"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>