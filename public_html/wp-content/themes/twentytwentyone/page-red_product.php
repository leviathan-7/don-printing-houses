	
<?php /* Template Name: Обновить цену продукта */ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_red_product"/>
	<ul>

		<li><label for="name">Название:</label></li>
		<li><input required type="text" placeholder="Название" id="name" name="name"></li>
		<li><label for="cost">Цена:</label></li>
		<li><input required type="number" id="cost" name="cost" placeholder="0000"></li>
		<li><input  type="submit" id="sub" name="sub" value="Обновить"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>