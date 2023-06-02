	
<?php /* Template Name: Поменять заголовок новости*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_news_tittle"/>
	<ul>
		<li><label for="id_news">ID вашей новости:</label></li>
		<li><input required type="number" id="id_news" name="id_news" placeholder="0000"></li>
		<li><label for="newname">Новое название новости:</label></li>
		<li><input required type="text" id="newname" placeholder="Озаглавьте вашу новость" name="newname"></li>
		<br>
		<li><input  type="submit" id="sub" name="sub" value="Поменять название"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>