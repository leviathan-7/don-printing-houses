	
<?php /* Template Name: Поменять сайт*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_url"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		<li><label for="url">Сайт в формате https://*** или в формате http://***:</label></li>
		<li><input pattern="http[s]{0,1}://[\S]{1,20}" placeholder="https://www.example.ru" required type="text" id="url" name="url"></li>
		<br>
		<li><input  type="submit" id="sub" name="sub" value="Поменять сайт"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>