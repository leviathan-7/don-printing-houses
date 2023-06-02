	
<?php /* Template Name: Удалить типографию*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_del"/>
	<ul>
		<li><input  type="submit" id="sub" name="sub" value="Удалить типографию"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>