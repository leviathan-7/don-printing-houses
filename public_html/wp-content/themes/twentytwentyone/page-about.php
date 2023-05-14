<?php
/*
Template Name: about
*/
?>
<?php
get_header(); 
?>
<div style="margin-left:2%;margin-right:2%;">
	<!--фото страницы -->
	<?php the_post_thumbnail(array(350, 350)); ?>
	<div style ="float:left; background: #E4E3DF; border: 3px solid #909090; margin-top: 10px;" class = "sh">
	    <div style ="margin-left: 25px;margin-right: 25px;">
    	    <br>
    		<h3><a href="<?php bloginfo('siteurl'); ?>" >ТИПОГРАФИИ ДОНА</a> — платформа, помогающая находить типографии</h3>
    		<br>
    		<?php echo get_the_content() ?>
    		
    		<img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2023/03/pngwing.com-5-2.png" alt="" width = 100% ><p></p>
		</div>
	</div>
	<br>
	
	<div style ="float:left; margin-right:40%;">
		<br>
		<!--поиск -->
		<?php
		get_template_part("searchusual");
		?>
		<br>
	</div>
</div>
<?php
get_footer();
?>