<?php
/*
Template Name: Кнопка для пароля
*/
?>
<li><input required type="password" id="password" name="password" class="password-input" placeholder="xxxxxx"></li>
		<li><label><input type="checkbox" class="password-checkbox" > Показать пароль</label></li>
		<script type="text/javascript" >
			$('body').on('click', '.password-checkbox', function(){
	if ($(this).is(':checked')){
		$('#password').attr('type', 'text');
	} else {
		$('#password').attr('type', 'password');
	}
});</script>