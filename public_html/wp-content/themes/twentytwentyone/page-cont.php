<?php
/*
Template Name: Контакты
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
</style>
<div style="margin-left:2%;margin-right:2%;">
	<!--фото страницы -->
	<?php the_post_thumbnail(array(350, 350)); ?>
	<div style ="float:left; margin-right:30%;">
		
		<p><b>Форма обратной связи&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></p>
		<form class = "sh" class="form" method="POST" action="" style = "background: #E4E3DF; border: 3px solid #909090; list-style-type: none;" >
        	<input type="hidden" name="action" value="action_results_from_forms"/>
        	<ul>
        		<li><label for="email">Сообщение придет на этот email:</label></li>
		        <li><input required type="email" id="email" name="email" placeholder="example@mail.com"></li>
		        <li><label for="name">Тема сообщения:</label></li>
	        	<li><input required type="text" placeholder="Тема" id="name" name="name"></li>
        		<li><label for="print">Сообщение:</label></li>
        		<li><textarea required id="print" placeholder="Сообщение" name="print" style="width:100%; max-width:450px; "></textarea></li>
        		<li><input type="submit" id="sub" name="sub" value="Отправить"></li>
        		<li> <br></li>
        	</ul>
        </form>
        <p ><br>Или по почте:</p>
		<i><a  href="mailto:<?php echo get_the_content() ?>"><?php echo get_the_content() ?></a></i>
        <style>
   li {
    list-style-type: none; /* Убираем маркеры */
   }
  </style>
	</div>
	<br>
	<hr>
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