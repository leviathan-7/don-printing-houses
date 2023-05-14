<?php
/*
Template Name: Расширенный поиск
*/
?>
<?php
get_header(); 
?>
<style>
#sub{
    box-shadow: 0 16px 32px 0 rgba(0, 30, 100, .25);
}
#sub:hover{
    box-shadow:0 0 6px rgba(270, 10, 300, 1);
}
.b1{
    box-shadow: 0 16px 32px 0 rgba(0, 30, 100, .25);
}
.b1:hover{
    box-shadow:0 0 6px rgba(270, 10, 300, 1);
}
</style>
<div style="margin-left:2%;margin-right:2%;">
	<!--фото страницы -->
	<?php the_post_thumbnail(array(350, 350)); ?>
	<div style ="float:left; margin-right:30%;">
		<form name = "f1" class="form" method="POST" action="">
		<input type="hidden" name="action" value="action_search"/>
		<ul>
			<li><label style ="background: #E4E3DF;"><b>Метки (При поиске по всем меткам одновременно, ничего не нужно отмечать): &nbsp</b></label></li>
			<?php
			$tags = get_tags();
			foreach ($tags as $tag) {
			echo ' <li><input type="checkbox" name="tags[]" value="',$tag->slug,'"><label>', $tag->name, '</label></li>';
			}
			?>
			<li><label style ="background: #E4E3DF;"><b>Район (При поиске по всем меткам одновременно, ничего не нужно отмечать): &nbsp</b></label></li>
			<li><input  type="checkbox"  name="districts[]" value="45">
			<label >Ворошиловский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="46">
			<label >Первомайский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="47">
			<label >Октябрьский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="48">
			<label >Советский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="49">
			<label >Пролетарский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="50">
			<label >Железнодорожный</label></li>
			<li><input  type="checkbox"  name="districts[]" value="51">
			<label >Ленинский</label></li>
			<li><input  type="checkbox"  name="districts[]" value="52">
			<label >Кировский</label></li>
			<li id="a" hidden><input  type="submit" id="sub" name="sub" value="Искать"></li>
			
		</ul>
		</form>
		<ul><li id="b" ><a href="<?php bloginfo('siteurl'); ?>/category/каталог/"><button class='b1'>Искать по всему каталогу</button></a></li></ul>
		        <style>
   li {
    list-style-type: none; /* Убираем маркеры */
   }
  </style>
		<script>
			$('input').on('click', function() {
				if($('input:checked').size()==0){
					$("#a").hide();
					$("#b").show();
				}else{
					$("#a").show();
					$("#b").hide();
				}
			});
			window.onload = function() {
   				if($('input:checked').size()==0){
					$("#a").hide();
					$("#b").show();
				}else{
					$("#a").show();
					$("#b").hide();
				}
			};
		</script>
		<br>
	</div>
</div>
<?php
get_footer();
?>