<?php
/*
 * Plugin Name: Creating and changing printing house records
 */
//функция выбора действия
function switch_f(){
    remove_all_filters("content_save_pre");
	if(isset($_POST['sub'])){
		switch ($_POST['action']) {
		case 'action_regis':
			regis_f();
			break;
		case 'action_del':
			del_f();
			break;
		case 'action_photo':
			photo_f();
			break;
		case 'action_teg':
			teg_f();
			break;
		case 'action_tittle':
			tittle_f();
			break;
		case 'action_adres_rub':
			adres_rub_f();
			break;
		case 'action_time':
			time_f();
			break;
		case 'action_url':
			url_f();
			break;
		case 'action_email':
			email_f();
			break;
		case 'action_tel':
			tel_f();
			break;
		case 'action_print':
			print_f();
			break;
		case 'action_password':
			password_f();
			break;
		case 'action_news':
			news_f();
			break;
		case 'action_delnews':
			delnews_f();
			break;
		case 'action_news_print':
			news_print_f();
			break;
		case 'action_news_tittle':
			news_tittle_f();
			break;
		case 'action_news_photo':
			news_photo_f();
			break;
		case 'action_search':
			search_f();
			break;
		case 'action_new_calc_copy':
			new_calc_copy_f();
			break;
		case 'action_new_calc_afisha':
			new_calc_afisha_f();
			break;
		case 'action_new_calc_carts':
			new_calc_carts_f();
			break;
		case 'action_new_calc_pacets':
			new_calc_pacets_f();
			break;
		case 'action_delete_calculator':
			delete_calculator_f();
			break;
		case 'action_new_product':
			new_product_f();
			break;
		case 'action_red_product':
			red_product_f();
			break;
		case 'action_del_product':
			del_product_f();
			break;
		case 'action_new_second_photo':
			new_second_photo_f();
			break;
		case 'action_del_second_photo':
			del_second_photo_f();
			break;
		case 'action_results_from_forms':
			results_from_forms_f();
			break;
		}
	}
}	
//добавление записи
function regis_f(){
			$hash_password = ''.hash(md5,$_POST['password']);
			$new_pass = array(
					 'post_author'    =>'',
					 'post_content' => $hash_password,
					 'post_title' => '',
					 'post_status' => 'private',
					 'post_category' =>  array(58),
					 );
			$hash_password_id = wp_insert_post($new_pass);
	
			
			$t = str_replace(array("<",">"),"`",$_POST['time']);
			$a = str_replace(array("<",">"),"`",$_POST['adres']);
			$u = str_replace(array("<",">"),"`",$_POST['url']);
			$e = str_replace(array("<",">"),"`",$_POST['email']);
			$te = str_replace(array("<",">"),"`",$_POST['tel']);
			$p = str_replace(array("<",">"),"`",$_POST['print']);
			$n = str_replace(array("<",">"),"`",$_POST['name']);
			$i = str_replace("script","error",$_POST['iframe']);
			$cont = '<hr style = "height: 30px;border-style: solid;border-color: black;border-width: 1px 0 0 0;border-radius: 20px;"><div id = "hp" hidden = "">'.
			$hash_password_id.'</div><b>Время работы:</b><div id = time>'.$t.'</div><hr><b>Адрес:</b><div id = adres>'.$a.'</div><div id = iframe>'.$i.
			'</div><hr><b>Сайт:</b><div id = url><a href='.$u.'>'.$u.
			'</a></div><hr><b>email:</b><div id = email>'.' '.'<a href=mailto:'.$e.'>'.$e.
			'</a></div><hr><b>Телефон:</b><div id = tel><a href="tel:+7'.$te.'">+7'.$te.'</a></div><hr><b>Описание:</b><div id = print>'.
			$p.'</div><div id = new_product></div><div id = calc_cards></div><div id = calc_copy></div><div id = calc_afisha></div><div id = calc_pacets></div><div id = second_photo></div><hr style = "display: block;height: 30px;margin-top: -31px;border-style: solid;border-color: black;border-width: 0 0 1px 0;border-radius: 20px;">';
			$new_post = array(
			 'post_author'    =>'',
			 'post_content' => $cont,
			 'post_title' => $n,
			 'post_status' => 'publish',
			 'post_category' =>  array($_POST['type'],$_POST['districts']),
			 'tags_input'     =>$_POST['tags'],
			 'post_excerpt'  => $p,
			 );
	 $post_id = wp_insert_post($new_post);
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
	$attachment_id =media_handle_upload( 'file',0);
	set_post_thumbnail( $post_id, $attachment_id );
	$url = get_permalink($post_id);
			header('Location: ' . '/sanc?post_id=' . $post_id.'&url='.$url);
			exit;
}	
//удаление
function del_f(){
	is_real_pass();
	wp_delete_post($_POST['id']);
	header('Location: ' . '/sancred');
	exit;
}
//смена фото
function photo_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	$attachment_id =media_handle_upload( 'file',0);
	set_post_thumbnail($_POST['id'], $attachment_id );
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена меток
function teg_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	wp_set_post_tags( $_POST['id'], $_POST['tags']);
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена названия
function tittle_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$n = str_replace(array("<",">"),"`",$_POST['newname']);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_title'    => $n,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена времени работы
function time_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$t = str_replace(array("<",">"),"`",$_POST['time']);
	$newstr = preg_replace('|(<div id = time>).+(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена категорий и адреса
function adres_rub_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$a = str_replace(array("<",">"),"`",$_POST['adres']);
	$i = str_replace("script","error",$_POST['iframe']);
	$newstr = preg_replace('|(<div id = adres>).+(</div>)|isU', "$1".' '.$a."$2",$the_post -> post_content);
	$newstr = preg_replace('|(<div id = iframe>).+(</div>)|isU', "$1".' '.$i."$2",$newstr);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	'post_category' =>  array($_POST['type'],$_POST['districts']),
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена сайта
function url_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$u = str_replace(array("<",">"),"`",$_POST['url']);
	$newstr = preg_replace('|(<div id = url>).+(</div>)|isU', "$1".' '.'<a href='.$u.'>'.$u.'</a>'."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена email
function email_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$e = str_replace(array("<",">"),"`",$_POST['email']);
	$newstr = preg_replace('|(<div id = email>).+(</div>)|isU', "$1".' '.'<a href=mailto:'.$e.'>'.$e.'</a>'."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена телефона
function tel_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$te = str_replace(array("<",">"),"`",$_POST['tel']);
	$newstr = preg_replace('|(<div id = tel>).+(</div>)|isU', "$1".' '.'<a href="tel:+7'.$te.'">+7'.$te.'</a>'."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена контента
function print_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$p = str_replace(array("<",">"),"`",$_POST['print']);
	$newstr = preg_replace('|(<div id = print>).+(</div>)|isU', "$1".' '.$p."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_excerpt'  => $p,
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//смена пароля
function password_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$hash_new_password = ''.hash(md5,$_POST['new_password']);
	
	$new_pass = array(
					 'post_author'    =>'',
					 'post_content' => $hash_new_password,
					 'post_title' => '',
					 'post_status' => 'private',
					 'post_category' =>  array(58),
					 );
	$hash_password_id = wp_insert_post($new_pass);
	
	$newstr = preg_replace('|(<div id = "hp" hidden = "">).+(</div>)|isU', '<div id = "hp" hidden = "">'.$hash_password_id.'</div>' ,$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//создание новости
function news_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$p = str_replace(array("<",">"),"`",$_POST['print']);
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$hash_password = ''.hash(md5,$_POST['id']);
	$cont = '<hr style = "height: 30px;border-style: solid;border-color: black;border-width: 1px 0 0 0;border-radius: 20px;"><div id = "hp" hidden="">news_'.
	$hash_password.'</div><b>Текст новости:</b><div id = print>'.$p.'</div><hr><a href='.$url.
	'><button>Ссылка на типографию</button></a><hr style = "display: block;height: 30px;margin-top: -31px;border-style: solid;border-color: black;border-width: 0 0 1px 0;border-radius: 20px;">';
	$t = 55;
	if($_POST['type'] == 5){
		$t = 54;
	}
	if($_POST['type'] == 4){
		$t = 56;
	}
	$new_post = array(
	 'post_author'    =>'',
	 'post_content' => $cont,
	 'post_title' => $n,
	 'post_status' => 'publish',
	 'post_category' =>  array($t),
	 'post_excerpt'  => $p,
	 );
	$post_id = wp_insert_post($new_post);
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	$attachment_id =media_handle_upload( 'file',0);
	set_post_thumbnail( $post_id, $attachment_id );
	$nurl = get_permalink($post_id);
	header('Location: ' . '/sanc?post_id=' . $post_id.'&url='.$nurl);
	exit;
}
//удаление новости
function delnews_f(){
	is_real_pass();
	is_yours_news();
	wp_delete_post($_POST['id_news']);
	header('Location: ' . '/sancdel');
	exit;
}
//смена контента новости
function news_print_f(){
	is_real_pass();
	is_yours_news();
	$nurl = get_permalink($_POST['id_news']);
	$the_post = get_post( $_POST['id_news'] );
	$p = str_replace(array("<",">"),"`",$_POST['print']);
	$newstr = preg_replace('|(<div id = print>).+(</div>)|isU', "$1".' '.$p."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id_news'],
	'post_excerpt'  => $p,
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$nurl);
	exit;
}
//смена названия новости
function news_tittle_f(){
	is_real_pass();
	is_yours_news();
	$nurl = get_permalink($_POST['id_news']);
	$n = str_replace(array("<",">"),"`",$_POST['newname']);
	wp_update_post(array(
	'ID'            => $_POST['id_news'],
	'post_title'    => $n,
	));
	header('Location: ' . '/sancred?url='.$nurl);
	exit;
}
//смена фото новости
function news_photo_f(){
	is_real_pass();
	is_yours_news();
	$nurl = get_permalink($_POST['id_news']);
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	$attachment_id =media_handle_upload( 'file',0);
	set_post_thumbnail($_POST['id_news'], $attachment_id );
	header('Location: ' . '/sancred?url='.$nurl);
	exit;
}
//проверка пароля
function is_real_pass(){
	$the_post = get_post( $_POST['id'] );
	if(is_null($the_post)){
		header('Location: ' . '/sancnotred');
		exit;
	}
	$hash_password = ''.hash(md5,$_POST['password']);
	preg_match_all('|<div id = "hp" hidden = "">(.+)</div>|U',$the_post -> post_content,$out, PREG_PATTERN_ORDER);
	
	$pass_id = $out[1][0];
	
	$the_pass_post = get_post( $pass_id );
	
	if(!($hash_password == $the_pass_post -> post_content)){
		header('Location: ' . '/sancnotred');
		exit;
	}
}
//проверка принадлежности новости
function is_yours_news(){
	$the_post = get_post( $_POST['id_news'] );
	if(is_null($the_post)){
		header('Location: ' . '/sancnotred');
		exit;
	}
	$hash_id = 'news_'.hash(md5,$_POST['id']);
	preg_match_all('|<div id = "hp" hidden="">(.+)</div>|U',$the_post -> post_content,$out, PREG_PATTERN_ORDER);
	$pass = $out[1][0];
	if(!($hash_id == $pass)){
		header('Location: ' . '/sancnotred');
		exit;
	}
}
//Расширенный поиск
function search_f(){
	$t = $_POST['districts'];
	$str = '';
	foreach ($t as $a) {
        $str = $str.'districts[]='.$a.'&';
    }
	$l = $_POST['tags'];
	foreach ($l as $a) {
        $str = $str.'tags[]='.$a.'&';
    }
	header('Location: ' . '/resultsearch?' .$str);
	exit;
}

//Калькулятор - печать и ксерокопия
function new_calc_copy_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$t = '<h3>'.$n.'</h3>
		<input type="number" id="paper_a" placeholder="N = ">
		<button id="paper_b" class="b1"><b>=</b></button>
		<!-- вывод результата -->
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="paper_S">S = 0 ₽</p>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$("#paper_b").click(function(){
				var paper_a = $("#paper_a").val();
				var paper_S =paper_a*'.$_POST['cost'].';
				if(paper_a >= '.$_POST['nn'].'){
					paper_S = paper_S*(100-'.$_POST['pr'].')/100;
				}
				if(paper_a <0){
					paper_S = 0;
				}
				$("#paper_S").html("S = "+ paper_S +" ₽");
			});
		</script>';
	$newstr = preg_replace('|(<div id = calc_copy>).*(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Калькулятор афиша и плакат
function new_calc_afisha_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$t ='<h3>'.$n.'</h3>
		<input type="number" id="pl_x" placeholder="X мм = ">
		<input type="number" id="pl_y" placeholder="Y мм = ">
		<button id="pl_b" class="b1"><b>=</b></button>
		<!--вывод результата -->
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="pl_S">S = 0 ₽</p>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$("#pl_b").click(function(){
				var pl_x = $("#pl_x").val();
				var pl_y = $("#pl_y").val();
				var pl_S =pl_x*pl_y*'.$_POST['cost'].'/10000;
				if(pl_S <0){
					pl_S = 0;
				}
				$("#pl_S").html("S = "+ pl_S +" ₽");
			});
		</script>';
	$newstr = preg_replace('|(<div id = calc_afisha>).*(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Калькулятор для пластиковых карт
function new_calc_carts_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$t = '
		<h3>Стоимость N пластиковых карт</h3>
		<input  type="number" id="cart_a" placeholder="N = ">
		<button id="cart_b" class="b1"><b>=</b></button>
		<!--вывод результата -->
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id = cart_S >S = 0 ₽</p>
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id = cart_M >С магнитной полосой S = 0 ₽</p>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$("#cart_b").click(function(){
				var cart_a = $("#cart_a").val();
				var cart_S =cart_a*'.$_POST['cost'].';
				if(cart_a >= '.$_POST['nn'].'){
					cart_S = cart_S*(100-'.$_POST['pr'].')/100;
				}
				if(cart_a <0){
					cart_S = 0;
				}
				var cart_M =cart_a*'.$_POST['costM'].';
				if(cart_a >= '.$_POST['nn'].'){
					cart_M = cart_M*(100-'.$_POST['pr'].')/100;
				}
				if(cart_a <0){
					cart_M = 0;
				}
				$("#cart_S").html("S = "+cart_S +" ₽");
				$("#cart_M").html("С магнитной полосой S = "+ cart_M +" ₽");
			});
		</script>
';
	$newstr = preg_replace('|(<div id = calc_cards>).*(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Калькулятор для пакетов
function new_calc_pacets_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$t = '<h3>Стоимость N пакетов</h3>
		<input type="number" id="pac_a" placeholder="N = ">
		<button id="pac_b"  class="b1"><b>=</b></button>
		<!--вывод результата -->
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="pac_S_5">Для А5 - S = 0 ₽</p>
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="pac_S_4">Для А4 - S = 0 ₽</p>
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="pac_S_3">Для А3 - S = 0 ₽</p>
		<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px" id="pac_S_2">Под бутылку - S = 0 ₽</p>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$("#pac_b").click(function(){
				var pac_S = $("#pac_a").val();
				if(pac_S >= '.$_POST['nn'].'){
					pac_S = pac_S*(100-'.$_POST['pr'].')/100;
				}
				if(pac_S <0){
					pac_S = 0;
				}
				$("#pac_S_5").html("Для А5 - S = "+(pac_S*'.$_POST['cost5'].')+" ₽");
				$("#pac_S_4").html("Для А4 - S = "+(pac_S*'.$_POST['cost4'].')+" ₽");
				$("#pac_S_3").html("Для А3 - S = "+(pac_S*'.$_POST['cost3'].')+" ₽");
				$("#pac_S_2").html("Под бутылку - S = "+(pac_S*'.$_POST['costb'].')+" ₽");
			});
		</script>';
	$newstr = preg_replace('|(<div id = calc_pacets>).*(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Удаление калькулятора
function delete_calculator_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$newstr = $the_post -> post_content;
	
	if($_POST['type'] == 1){
		$newstr = preg_replace('|(<div id = calc_copy>).*(</div>)|isU', "$1".' '."$2",$the_post -> post_content);
	}
	if($_POST['type'] == 2){
		$newstr = preg_replace('|(<div id = calc_afisha>).*(</div>)|isU', "$1".' '."$2",$the_post -> post_content);
	}
	if($_POST['type'] == 3){
		$newstr = preg_replace('|(<div id = calc_cards>).*(</div>)|isU', "$1".' '."$2",$the_post -> post_content);
	}
	if($_POST['type'] == 4){
		$newstr = preg_replace('|(<div id = calc_pacets>).*(</div>)|isU', "$1".' '."$2",$the_post -> post_content);
	}
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}

//Добавить продукт
function new_product_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$c = str_replace(array("<",">"),"`",$_POST['cost']);
	$p = str_replace(array("<",">"),"`",$_POST['txt']);
	$t = '<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px"><b id = name>'.$n.'</b><b> ➔ </b><b id = cost style="background-color:orange">'.$c.'</b> ₽<br><b>Описание: </b><i>'.$p.'</i></p>';
	$newstr = preg_replace('|(<div id = new_product>).*(</div>)|isU', ''.$t.'<div id = new_product></div>',$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Сменить цену у продукта
function red_product_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$c = str_replace(array("<",">"),"`",$_POST['cost']);
	$t = '<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px"><b id = name>'.$n.'</b><b> ➔ </b><b id = cost style="background-color:orange">';	
	$newstr = preg_replace('|('.$t.').*(</b>)|isU', "$1".' '.$c."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Удалить продукт
function del_product_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$t = '<p style="background-color:#71f7ff;border: 1px solid black;max-width:600px"><b id = name>'.$n.'</b>';
	$newstr = preg_replace('|('.$t.').*(</p>)|isU', '',$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}

//Добавить второе фото
function new_second_photo_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	$attachment_id =media_handle_upload( 'file',0);
	$s = wp_get_attachment_image_url($attachment_id, 'full');
	
	$t = '<p style="border: 1px solid black;max-width:900px">
<b><i>Пример нашей продукции:</i></b>
<img src="'.$s.'" alt="" width=80% height=80% /></p>';
	$newstr = preg_replace('|(<div id = second_photo>).*(</div>)|isU', "$1".' '.$t."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}
//Удалить второе фото
function del_second_photo_f(){
	is_real_pass();
	$url = get_permalink($_POST['id']);
	$the_post = get_post( $_POST['id'] );
	$newstr = preg_replace('|(<div id = second_photo>).*(</div>)|isU', "$1".' '."$2",$the_post -> post_content);
	wp_update_post(array(
	'ID'            => $_POST['id'],
	'post_content' =>  $newstr,
	));
	header('Location: ' . '/sancred?url='.$url);
	exit;
}

//Форма обратной связи
function results_from_forms_f(){
	$e = str_replace(array("<",">"),"`",$_POST['email']);
	$p = str_replace(array("<",">"),"`",$_POST['print']);
	$n = str_replace(array("<",">"),"`",$_POST['name']);
	$new_post = array(
			 'post_author'    =>'',
			 'post_content' => $e.' -> '.$p,
			 'post_title' => $n,
			 'post_status' => 'private',
			 'post_category' =>  array(57),
			 );
	$post_id = wp_insert_post($new_post);
	header('Location: ' . '/YF');
	exit;
}


//инициализация плагина
add_action('init','switch_f');