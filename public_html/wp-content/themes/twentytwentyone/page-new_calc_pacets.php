	
<?php /* Template Name: Пакеты*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_new_calc_pacets"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		<li><label for="cost5">Стоимость пакета А5:</label></li>
		<li><input required type="number" id="cost5" name="cost5" placeholder="0000"></li>
		<li><label for="cost4">Стоимость пакета А4:</label></li>
		<li><input required type="number" id="cost4" name="cost4" placeholder="0000"></li>
		<li><label for="cost3">Стоимость пакета А3:</label></li>
		<li><input required type="number" id="cost3" name="cost3" placeholder="0000"></li>
		<li><label for="costb">Стоимость пакета для бутылки:</label></li>
		<li><input required type="number" id="costb" name="costb" placeholder="0000"></li>
		<li><label for="pr">Скидка:</label></li>
		<li><input required type="number" id="pr" name="pr" placeholder="0000"></li>
		<li><label for="nn">Со скольки единиц начинается скидка:</label></li>
		<li><input required type="number" id="nn" name="nn" placeholder="0000"></li>
		<li><input  type="submit" id="sub" name="sub" value="Создать"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>