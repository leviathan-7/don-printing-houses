	
<?php /* Template Name: Поменять пароль*/ ?>
<?php
get_header(); 
?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--фото страницы -->
<?php the_post_thumbnail(array(350, 350)); ?>
<div style ="float:left; margin-right:40%;">
<form class="form" method="POST" action="">
	<input type="hidden" name="action" value="action_password"/>
	<ul>
		<li><label for="password">Ваш новый пароль:</label></li>
		<li><input required type="password" id="new_password" name="new_password" class="password-input" placeholder="xxxxxx"></li>
		<li><label><input type="checkbox" class="password-checkbox2"> Показать пароль</label></li>
		<script type="text/javascript" >
			$('body').on('click', '.password-checkbox2', function(){
	if ($(this).is(':checked')){
		$('#new_password').attr('type', 'text');
	} else {
		$('#new_password').attr('type', 'password');
	}
});</script>
		<br>
		<li><input  type="submit" id="sub" name="sub" value="Поменять пароль"></li>
	</ul>
</form>
<br>
</div>
<?php
get_footer();
?>