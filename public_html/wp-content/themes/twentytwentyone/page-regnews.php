	
<?php /* Template Name: Создание новости*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" name="action" value="action_news"/>
	<ul>
		<li><label for="name">Название новости:</label></li>
		<li><input required type="text" id="name" name="name" placeholder="Озаглавьте вашу новость"></li>
		<li><label for="print">Новость:</label></li>
		<li><textarea required id="print" name="print" placeholder="Что нового произошло в вашей компании?"></textarea></li>
		<?php get_template_part("rubr"); ?>
		<?php get_template_part("fileformwrap"); ?>
		<li><input  type="submit" id="sub" name="sub" value="Создать новость"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>