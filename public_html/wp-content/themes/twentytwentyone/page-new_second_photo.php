	
<?php /* Template Name: Добавить или обновить фото продукции */ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="action" value="action_new_second_photo"/>
	<ul>
		<br>
		<?php get_template_part("fileformwrap"); ?>
		<li><input  type="submit" id="sub" name="sub" value="Загрузить"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>