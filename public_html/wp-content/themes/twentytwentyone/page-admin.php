<?php
/*
Template Name: Администраторам типографий
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
<div style="margin-left:2%;margin-right:2%;">
	<div style>
		<b style ="background: #E4E3DF;">Редактор новостей: &nbsp</b>
		<ul>
			<li><a href='<?php bloginfo('siteurl'); ?>/regnews/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Создать
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/delnews/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Удалить
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/news_tittle/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять название
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/news_print/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять описание
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/news_photo/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять фото
				</button></a>
			</li>
		</ul>	
		<br>
		<hr>
		<br>
		<b style ="background: #E4E3DF;">Редактор типографий: &nbsp</b>
		<ul>
			<li><a href='<?php bloginfo('siteurl'); ?>/reg/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Регистрация
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/del/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Удаление
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/teg/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять метки
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/photo/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять фото
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/tittle/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять название
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/print/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять описание
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/tel/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять телефон
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/email/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять email
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/url/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять сайт
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/adres_rub/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять адрес, категорию
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/time/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять время работы
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/password/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Поменять пароль
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_calculator/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Добавить калькулятор
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/delete_calculator/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Удалить калькулятор
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/product_main/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Редактор продуктов
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/new_second_photo/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Добавить/Обновить фото продукции
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/del_second_photo/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Удалить фото продукции
				</button></a>
			</li>
		</ul>	
	</div>
	<br>
	<hr>
	<br>
	<!-- фото страницы -->
	<?php the_post_thumbnail(array(350, 350)); ?>
</div>
<?php
get_footer();
?>
