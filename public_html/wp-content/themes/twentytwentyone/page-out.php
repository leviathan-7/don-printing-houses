	
<?php /* Template Name: Выход*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
Вы уверены, что хотите выйти?
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_out"/>
	<ul>
		<li><input  type="submit" id="sub" name="sub" value="Выйти"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>