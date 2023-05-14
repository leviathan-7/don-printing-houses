<?php
/*
Template Name: Вы внесли изменения
*/
?>
<?php get_header(); ?>
<div style="margin-left:2%;margin-right:2%;"><?php echo get_the_content().$_GET["post_id"].'<hr><a href='.$_GET["url"].
	'><button class="sres">Результат</button></a>' ?></div> 
<?php get_footer(); ?>