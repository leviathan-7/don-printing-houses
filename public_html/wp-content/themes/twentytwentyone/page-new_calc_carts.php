	
<?php /* Template Name: Пластиковые карты*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_new_calc_carts"/>
	<ul>
		<li><label for="cost">Стоимость карты:</label></li>
		<li><input required type="number" id="cost" name="cost" placeholder="0000"></li>
		<li><label for="costM">Стоимость магнитной карты:</label></li>
		<li><input required type="number" id="costM" name="costM" placeholder="0000"></li>
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