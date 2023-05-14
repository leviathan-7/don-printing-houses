<?php
/*
Template Name: Результат расширенного поиска
*/
?>
<?php
get_header(); 
?>
<div hidden>
	<?php $url=bloginfo('siteurl'); ?>
</div>
<div style="margin-left:2%;margin-right:2%;">
    <div>
	<div style="background: #e4e3df;">
		<b>Районы: </b>
		<?php
		$d="";
		$m="";
		$mt="";
		$dtext="";
		foreach($_GET["districts"] as $u){
			$d = $d.$u.",";
			switch ($u) {
				case 45:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/ворошиловский/' rel='bookmark'>Ворошиловский</a>, ";
					break;
				case 46:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/первомайский/' rel='bookmark'>Первомайский</a>, ";
					break;
				case 47:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/октябрьский/' rel='bookmark'>Октябрьский</a>, ";
					break;
				case 48:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/советский/' rel='bookmark'>Советский</a>, ";
					break;
				case 49:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/пролетарский/' rel='bookmark'>Пролетарский</a>, ";
					break;
				case 50:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/железнодорожный/' rel='bookmark'>Железнодорожный</a>, ";
					break;
				case 51:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/ленинский/' rel='bookmark'>Ленинский</a>, ";
					break;
				case 52:
					$dtext = $dtext."<a href='".$url."/category/каталог/район/кировский/' rel='bookmark'>Кировский</a>, ";
					break;
			}
		} 
		echo $dtext."<br><b>Метки: </b>";
		foreach($_GET["tags"] as $u){
			$mt = $mt.$u.",";
			$m = $m."<a href ='".$url."/tag/".$u."/?submit=Поиск+по+фильтру'>".$u."</a>, ";
		}
		echo $m;
		
		echo '</div>';
		
		query_posts('cat='.$d.'&tag='.$mt.'&posts_per_page=100');
		if(!have_posts()){
			echo '<br><hr><br><b>Ничего не найденно</b><br><hr><br><a href="'.$url.'/search/" rel="bookmark" ><button>Вернуться к расширенному поиску</button></a><br><br><a href="'.$url.'/search/" rel="bookmark" >';
			the_post_thumbnail(array(350, 350));
			echo '</a>';
		}
		?>
		
		<br>
		<br>
		<?php 
		while (have_posts()){
		echo "<hr>";
		the_post();
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
		}
		?>
	</div>
</div>
<?php
get_footer();
?>