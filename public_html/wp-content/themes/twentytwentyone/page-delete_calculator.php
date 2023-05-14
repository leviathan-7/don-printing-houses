	
<?php /* Template Name: Удалить калькулятор*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_delete_calculator"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		
		<li><input required type="radio" id="c" name="type" value="1">
        <label for="kop">Печать или ксеракопия</label></li>
        
        <li><input required type="radio" id="a" name="type" value="2">
        <label for="pr">Афиша, плакат, банер</label></li>
        
        <li><input required type="radio" id="cr" name="type" value="3">
        <label for="pol">Пластиковые карты</label></li>
		
		<li><input required type="radio" id="з" name="type" value="4">
        <label for="pol">Пакеты</label></li>
		<br>
		
		<li><input  type="submit" id="sub" name="sub" value="Удалить"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>