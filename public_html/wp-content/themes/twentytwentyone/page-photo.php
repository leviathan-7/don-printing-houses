	
<?php /* Template Name: Поменять фото*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="action" value="action_photo"/>
	<ul>
		<li><label for="password">Ваш пароль:</label></li>
		<?php get_template_part("pass"); ?>
		<li><label for="id">ID вашей типографии:</label></li>
		<li><input required type="number" id="id" name="id" placeholder="0000"></li>
		<br>
		<?php get_template_part("fileformwrap"); ?>
		<li><input  type="submit" id="sub" name="sub" value="Сменить фото"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>