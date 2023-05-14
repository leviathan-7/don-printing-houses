<?php
/*
Template Name: Главная страница
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
	$c1_color_b = '"#71f7ff"';
	$c2_color_b = '"#fab2a3"';
?>
<!--подключение jquery -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<div style="margin-left:2%;margin-right:2%;">
	<br>
	<!--фото страницы -->
	<?php the_post_thumbnail(array(350, 350)); ?>
	<div style ="float:left; margin-right:40%;">
		<!--поиск -->
		<b >Найдите нужную вам типографию!</b>
		<div class = "sh" style = "background: #E4E3DF; border: 3px solid #909090;">
		<div style="margin-left:45px;margin-right:35px;margin-top:10px;margin-bottom:10px;">    
		<?php
			get_template_part("searchusual");
		?>
		<br>
		<!--поиск по меткам-->
		<?php
			get_template_part("searchtegs");
		?>
		<br>
		<!--ссылка на расширенный поиск-->
		<a href="<?php bloginfo('siteurl'); ?>/search/" rel="bookmark" ><button class="b1">Расширенный поиск</button></a>
		</div>  
		</div>
		<br>
	</div>
	<br>
	<hr>
	<!--последние новости-->
	<div>
		<b>Последние <a  href="<?php bloginfo('siteurl'); ?>/category/news/">новости</a>:</b>
		<?php $catquery = new WP_Query( 'cat=33&posts_per_page=5' ); ?>
		<ul style = "list-style-type: none; ">
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<li><a  href="<?php the_permalink() ?>" rel="bookmark"><button onmouseover="this.style.backgroundColor='<?php echo $c1_color ?>';" onmouseout="this.style.backgroundColor='<?php echo $c2_color ?>';" style="<?php echo $b_style ?>"><?php the_title(); ?></button></a></li>
		<?php endwhile;
			wp_reset_postdata();
		?>
		</ul>
	<br>
	</div>
	<hr>
	
	<!--последние типографии-->
	<div>
		<b>Новые <a  href="<?php bloginfo('siteurl'); ?>/category/каталог/">типографии</a>:</b>
		<?php $catquery = new WP_Query( 'cat=7&posts_per_page=5' ); ?>
		<ul style = "list-style-type: none; ">
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark"><button onmouseover="this.style.backgroundColor='<?php echo $c1_color ?>';" onmouseout="this.style.backgroundColor='<?php echo $c2_color ?>';" style="<?php echo $b_style ?>"><?php the_title(); ?></button></a></li>
		<?php endwhile;
			wp_reset_postdata();
		?>
		</ul>
	<br>
	</div>
	<hr>
	<!--реклама категорий-->
	<div style="float:left;">
		<b>Выберете нужную вам категорию типографии:</b>
		<figure class="wp-block-gallery columns-3 is-cropped">
		<ul class="blocks-gallery-grid">
		<li class="blocks-gallery-item">
		<a href="<?php bloginfo('siteurl'); ?>/category/каталог/производства/" >
			<figure><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/производство-1-300x226.jpg" data-id="831" data-full-url="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/производство-1.jpg" data-link="<?php bloginfo('siteurl'); ?>/%d0%bf%d1%80%d0%be%d0%b8%d0%b7%d0%b2%d0%be%d0%b4%d1%81%d1%82%d0%b2%d0%be-1/" class="wp-image-831"/><figcaption class="blocks-gallery-item__caption">Производства</figcaption></figure>
		</a></li>
		<li class="blocks-gallery-item">
		<a href="<?php bloginfo('siteurl'); ?>/category/каталог/копицентры/" >
		<figure><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/копицентр-1-300x298.jpg" data-id="832" data-full-url="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/копицентр-1.jpg" data-link="<?php bloginfo('siteurl'); ?>/%d0%ba%d0%be%d0%bf%d0%b8%d1%86%d0%b5%d0%bd%d1%82%d1%80-1/" class="wp-image-832"/><figcaption class="blocks-gallery-item__caption">Копицентры</figcaption></figure></a></li><li class="blocks-gallery-item">
		<a href="<?php bloginfo('siteurl'); ?>/category/каталог/полиграфия/" ><figure><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/полиграфия-1-300x199.jpeg" alt="" data-id="833" data-full-url="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/полиграфия-1.jpeg" data-link="<?php bloginfo('siteurl'); ?>/%d0%bf%d0%be%d0%bb%d0%b8%d0%b3%d1%80%d0%b0%d1%84%d0%b8%d1%8f-1/" class="wp-image-833"/><figcaption class="blocks-gallery-item__caption">Полиграфия</figcaption></figure></a></li></ul>
		</figure>
		<br>
	</div>
	<hr>
	<!--реклама каталога-->
	<div>
		<b>Или просмотрите весь наш <a href="<?php bloginfo('siteurl'); ?>/category/каталог/" >каталог</a></b>
		<ul class="blocks-gallery-grid">
		<li class="blocks-gallery-item">
		
		<figure class="alignleft size-large" class="wp-block-image">
			<a href="<?php bloginfo('siteurl'); ?>/category/каталог/" >
				<img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/1618549880_29-phonoteka_org-p-tipografiya-fon-32-1024x400.jpg" class="wp-image-896"/>
			</a>
			</figure>
		
			</li>
		</ul>
	<br>
	</div>
	<hr>
	<!--последние комментарии-->
	<div style="float:left; ">
		<?php  the_widget( 'WP_Widget_Recent_Comments', $instance, $args ); ?>
		<br>
	</div>
	<hr>
	<!--галерея для рекламы калькулятора-->
	<div style="float:left;">
		<b>Посчитать ориентировочную стоимость печати,создания банеров, афиш, создания пластиковых карт и многое другое вы можете в <a  href="<?php bloginfo('siteurl'); ?>/calc/">
			калькуляторе</a></b>
		<figure class="wp-block-gallery columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item">
			<a  href="<?php bloginfo('siteurl'); ?>/calc/" ><figure><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/bf50cc2bb7aaa891f4bf44b9ca06f596-300x300.jpg" data-id="820" data-full-url="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/bf50cc2bb7aaa891f4bf44b9ca06f596.jpg" data-link="<?php bloginfo('siteurl'); ?>/bf50cc2bb7aaa891f4bf44b9ca06f596/" class="wp-image-820"/></figure></a>
			</li><li class="blocks-gallery-item">
			<a  href="<?php bloginfo('siteurl'); ?>/calc/" ><figure><img src="<?php bloginfo('siteurl');?>/wp-content/uploads/2021/11/banner11-300x250.jpg" data-id="821" data-full-url="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/banner11.jpg" data-link="<?php bloginfo('siteurl'); ?>/banner11/" class="wp-image-821"/></figure></a>
			</li><li class="blocks-gallery-item">
			<a  href="<?php bloginfo('siteurl'); ?>/calc/" ><figure><img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/2421645-300x225.jpg" data-id="822" data-full-url="<?php bloginfo('siteurl');?>/wp-content/uploads/2021/11/2421645.jpg" data-link="<?php bloginfo('siteurl'); ?>/2421645/" class="wp-image-822"/></figure></a>
			</li></ul></figure>
		<br>
	</div>
	<hr>
	<!--ссылка на все услуги-->
	<div id="urlteges">
		<br>
		<b>Услуги, которые вы можете найти на нашем сайте:</b>
		<ul style = "list-style-type: none; ">
		<?php
		$i=0;
		$tags = get_tags();
		foreach ( $tags as $tag ) {
			$i = $i+1;
			$tag_link = get_tag_link( $tag->term_id );
			echo "<li style = 'list-style-type: none; '><a href='{$tag_link}' rel='bookmark'>
			<button onmouseover='this.style.backgroundColor={$c1_color_b};' onmouseout='this.style.backgroundColor={$c2_color_b};' style='{$b_style}'>
			{$tag->name}
			</button></a></li>";
			if($i==4){
				echo "</ul><div id='show-more'><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class='b1'>Показать еще</button></div><ul id='hide-content' hidden>";
			}
		}
		?>
		</ul>
		<div id='show-no' hidden>
		<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#urlteges"rel='bookmark'><button  class="b1">Оставить 4</button></a>
		<br>
		</div>
		<script type="text/javascript">
		$("#show-more").click(function(){
			$("#show-more").hide();
			$("#hide-content").show();
			$("#show-no").show();
		});
		$("#show-no").click(function(){
			$("#show-no").hide();
			$("#hide-content").hide();
			$("#show-more").show();
		});
		</script>
	<br>
	</div>
	<hr>
	<!--районы-->
	<div>
		<b>Фильтрация по районам Ростова:</b>
		<ul style = "list-style-type: none; ">
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/ворошиловский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				Ворошиловский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/первомайский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Первомайский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl');?>/category/каталог/район/октябрьский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Октябрьский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/советский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Советский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/пролетарский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Пролетарский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/железнодорожный/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Железнодорожный
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/ленинский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Ленинский
				</button></a>
			</li>
			<li><a href='<?php bloginfo('siteurl'); ?>/category/каталог/район/кировский/' rel='bookmark'>
				<button onmouseover='this.style.backgroundColor="<?php echo $c1_color ?>";' onmouseout='this.style.backgroundColor="<?php echo $c2_color ?>";' style="<?php echo $b_style ?>">
				 Кировский
				</button></a>
			</li>
		</ul>
	<br>
	</div>
	<hr>
	<!--контент страницы-->
	<div style="float:left; background: #F5E9D9; ">
		<?php echo get_the_content() ?>
	<br>
	</div>
	<hr>
	<!--ссылка на about-->
	<div style="float:left;">
		<b>О нас ~~> <a  href="<?php bloginfo('siteurl'); ?>/about/">информация</a></b>
		<ul class="blocks-gallery-grid">
		<li class="blocks-gallery-item">
		
		<figure class="alignleft wp-block-image size-medium">
			<a href="<?php bloginfo('siteurl'); ?>/about/" >
				<img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/7507a90b0005d351c75cfb6d5c36e2f5-297x300.png" class="wp-image-896"/>
			</a>
			</figure>
		
			</li>
		</ul>
		<br>
	</div>
	<br>
	<br>
	<hr>
	<!--ссылка на контакты-->
	<div style="float:left;">
		<b>Для связи ~~> <a  href="<?php bloginfo('siteurl'); ?>/cont/">контакты</a></b>
	
		<ul class="blocks-gallery-grid">
		<li class="blocks-gallery-item">
		
		<figure class="alignleft wp-block-image size-medium">
			<a href="<?php bloginfo('siteurl'); ?>/cont/" >
				<img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2021/11/imgonline-com-ua-Transparent-backgr-uygWWwWowf-300x300.png" class="wp-image-896"/>
			</a>
			</figure>
		
			</li>
		</ul>
	</div>
	<br>
</div>
<?php
get_footer();
?>