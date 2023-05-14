<?php
/*
Template Name: Добавить или обновить калькулятор 
*/
?>
<?php
get_header(); 
?>
<!-- стили -->
<?php
	$b_style = 'color:black; background:#fab2a3; width: 350px;max-width:95%;border: 1px solid black;';
	$c1_color = '#71f7ff';
	$c2_color = '#fab2a3';
?>
<!-- фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style="float:left; margin-right:40%; margin-left:2%;">
	<div style>
		<b  style ="background: #E4E3DF;">Выберете калькулятор для добавления или обновления: &nbsp</b>
		<ul>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_calc_copy/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Печать / Ксерокопия
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_calc_afisha/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Афиша / Плакат / Банер
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_calc_carts/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Пластиковые карты
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_calc_pacets/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Пакеты
				</button></a>
			</li>
		</ul>	
	</div>
	<br>
	<hr>
	<br>
	
</div>
<?php
get_footer();
?>
