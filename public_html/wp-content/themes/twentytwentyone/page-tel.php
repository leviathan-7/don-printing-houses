	
<?php /* Template Name: Поменять телефон*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_tel"/>
	<ul>
		<li><label for="tel">Телефон в формате +7**********:</label></li>
		<li><span style = " font-size: 30px;">+7</span><input style = "width: 232px;" pattern="[0-9]{10}" required type="text" id="tel" name="tel" placeholder="0000000000"></li>
		<br>
		<li><input  type="submit" id="sub" name="sub" value="Поменять Телефон"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>