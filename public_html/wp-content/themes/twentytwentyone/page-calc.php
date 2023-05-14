<?php
/*
Template Name: Калькулятор
*/
?>

<?php
get_header(); 
?>
<div style="margin-left:2%;margin-right:2%;">
<!-- фото страницы -->
<?php the_post_thumbnail(array(300, 300)); ?>
<!-- подключение jquery -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- стиль поля вывода -->
<?php
	$style_str = 'background-color:#71f7ff;border: 1px solid black;max-width:650px';
?>

<!--константы -->
<script type="text/javascript">
	//ценовые коэффициенты
	const paper_k1='<?php echo get_the_content(null,false,839) ?>';
	const print_k1='<?php echo get_the_content(null,false,840) ?>';
	const cart_k1='<?php echo get_the_content(null,false,841) ?>';
	const pl_k1='<?php echo get_the_content(null,false,842) ?>';
	const br_k1='<?php echo get_the_content(null,false,843) ?>';
	const pac_k1='<?php echo get_the_content(null,false,844) ?>';
	const tshort_k1='<?php echo get_the_content(null,false,845) ?>';
	//количество, с которого начинается скидка
	const paper_kol='<?php echo get_the_content(null,false,854) ?>';
	const print_kol='<?php echo get_the_content(null,false,855) ?>';
	const cart_kol='<?php echo get_the_content(null,false,856) ?>';
	const pac_kol='<?php echo get_the_content(null,false,857) ?>';
	const tshort_kol='<?php echo get_the_content(null,false,858) ?>';
	//размер скидки
	const paper_discount='<?php echo get_the_content(null,false,864) ?>';
	const print_discount='<?php echo get_the_content(null,false,865) ?>';
	const cart_discount='<?php echo get_the_content(null,false,866) ?>';
	const pac_discount='<?php echo get_the_content(null,false,867) ?>';
	const tshort_discount='<?php echo get_the_content(null,false,868) ?>';
</script>
<!--вызов нужного калькулятора калькулятора -->
<script type="text/javascript">
$(document).ready(function(){
	$("#paper").click(function(){
		$(".fun").hide();
		$("#paper_html").show();
		$("#f").show();
	});
	$("#print").click(function(){
		$(".fun").hide();
		$("#print_html").show();
		$("#f").show();
	});
	$("#cart").click(function(){
		$(".fun").hide();
		$("#cart_html").show();
		$("#f").show();
	});
	$("#pl").click(function(){
		$(".fun").hide();
		$("#pl_html").show();
		$("#f").show();
	});
	$("#br").click(function(){
		$(".fun").hide();
		$("#br_html").show();
		$("#f").show();
	});
	$("#pac").click(function(){
		$(".fun").hide();
		$("#pac_html").show();
		$("#f").show();
	});
	$("#tshort").click(function(){
		$(".fun").hide();
		$("#tshort_html").show();
		$("#f").show();
	});
});
</script>

<style>
.btm{
    min-width:285px;
    box-shadow: 0 16px 32px 0 rgba(0, 30, 100, .25);
}
.b1{
    box-shadow: 0 16px 32px 0 rgba(0, 30, 100, .25);
}
.b1:hover{
    box-shadow:0 0 6px rgba(270, 10, 300, 1);
}
</style>

<!-- выбор калькулятора кнопки -->
<div id = "plcalc" style ="float:left; margin-right:15%;" >
	<h3 >Выберите нужный вам калькулятор ориентировочной стоимости:</h3>
	<br>
	<?php
	$style_plcalc = 'margin-top: 5px;';
	?>
	<ul>
		<li style ="list-style-type: none;"><a href="#f"rel='bookmark'><button id="paper" class = "btm">Ксерокопия N листов</button></a>&nbsp&nbsp<a href="#f"rel='bookmark'><button class = "btm" style="<?php echo $style_plcalc ?>" id="print">Печать N листов</button></a></li>
		<br>
		<li style ="list-style-type: none;"><a href="#f"rel='bookmark'><button id="cart" class = "btm">N пластиковых карт</button></a>&nbsp&nbsp<a href="#f"rel='bookmark'><button class = "btm" style="<?php echo $style_plcalc ?>" id="pl">Афиша, плакат, постер</button></a></li>
		<br>
		<li style ="list-style-type: none;"><a href="#f"rel='bookmark'><button id="br" class = "btm">Банер, растяжка</button></a>&nbsp&nbsp<a href="#f"rel='bookmark'><button class = "btm" style="<?php echo $style_plcalc ?>" id="pac">Стоимость N пакетов</button></a></li>
		<br>
		<li style ="list-style-type: none;"><a href="#f"rel='bookmark'><button id="tshort" class = "btm">Стоимость N футболок</button></a></li>
		<br>
	</ul>
</div>
<hr>
<div id = "f" style ="background: #E4E3DF; max-width:700px;border: 3px solid #909090;" class = "sh" hidden>
    <div style ="margin-left: 25px;margin-right: 25px;margin-top: 15px;">
    	<!--Ксерокопия N листов -->
    	<div class = "fun" id = "paper_html" hidden >
    		<h3 >Стоимость ксерокопий N листов</h3>
    		<input  type="number" id="paper_a" placeholder="N = ">
    		<button id="paper_b" class="b1"><b>=</b></button>
    		<!-- вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = paper_S >S = 0</div>
    		<script type="text/javascript">
    			
    			$("#paper_b").click(function(){
    				var paper_a = $("#paper_a").val();
    				var paper_S =paper_a*paper_k1;
    				if(paper_a >= paper_kol){
    					paper_S = paper_S*(100-paper_discount)/100;
    				}
    				if(paper_a <0){
    					paper_S = 0;
    				}
    				$("#paper_S").html('S = '+paper_S);
    			});
    		</script>
    	</div>
    	<!-- Печать N листов -->
    	<div class = "fun" id = "print_html" hidden >
    		<h3>Стоимость печати N листов</h3>
    		<input type="number" id="print_a" placeholder="N = ">
    		<button id="print_b" class="b1"><b>=</b></button>
    		<!--вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = print_S >S = 0</div>
    		<script type="text/javascript">
    			
    			$("#print_b").click(function(){
    				var print_a = $("#print_a").val();
    				var print_S =print_a*print_k1;
    				if(print_a >= print_kol){
    					print_S = print_S*(100-print_discount)/100;
    				}
    				if(print_a <0){
    					print_S = 0;
    				}
    				$("#print_S").html('S = '+print_S);
    			});
    		</script>
    	</div>
    	<!--N пластиковых карт -->
    	<div class = "fun" id = "cart_html" hidden >
    		<h3 >Стоимость N пластиковых карт</h3>
    		<input  type="number" id="cart_a" placeholder="N = ">
    		<button id="cart_b" class="b1"><b>=</b></button>
    		<!--вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = cart_S >S = 0</div>
    		<div style="<?php echo $style_str ?>"id = cart_S_M >С магнитной полосой S = 0</div>
    		<script type="text/javascript">
    			var cart_M = 1.1;
    			$("#cart_b").click(function(){
    				var cart_a = $("#cart_a").val();
    				var cart_S =cart_a*cart_k1;
    				if(cart_a >= cart_kol){
    					cart_S = cart_S*(100-cart_discount)/100;
    				}
    				if(cart_a <0){
    					cart_S = 0;
    				}
    				$("#cart_S").html('S = '+cart_S);
    				$("#cart_S_M").html('С магнитной полосой S = '+(cart_S*cart_M));
    			});
    		</script>
    	</div>
    	<!--Афиша, плакат, постер -->
    	<div class = "fun" id = "pl_html" hidden >
    		<h3 >Стоимость печати афиши, плаката, постера</h3>
    		<input  type="number" id="pl_x" placeholder="X мм = ">
    		<input  type="number" id="pl_y" placeholder="Y мм = ">
    		<button id="pl_b" class="b1"><b>=</b></button>
    		<!--вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = pl_S >S = 0</div>
    		<script type="text/javascript">
    			
    			$("#pl_b").click(function(){
    				var pl_x = $("#pl_x").val();
    				var pl_y = $("#pl_y").val();
    				var pl_S =pl_x*pl_y*pl_k1;
    				if(pl_S <0){
    					pl_S = 0;
    				}
    				$("#pl_S").html('S = '+pl_S);
    			});
    		</script>
    	</div>
    	<!-- Банер, растяжка -->
    	<div class = "fun" id = "br_html" hidden >
    		<h3 >Стоимость печати банера, растяжки</h3>
    		<input  type="number" id="br_x" placeholder="X мм = ">
    		<input  type="number" id="br_y" placeholder="Y мм = ">
    		<button id="br_b" class="b1"><b>=</b></button>
    		<!--вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = br_S >S = 0</div>
    		<script type="text/javascript">
    			
    			$("#br_b").click(function(){
    				var br_x = $("#br_x").val();
    				var br_y = $("#br_y").val();
    				var br_S =br_x*br_y*br_k1;
    				if(br_S <0){
    					br_S = 0;
    				}
    				$("#br_S").html('S = '+br_S);
    			});
    		</script>
    	</div>
    	<!-- Стоимость N пакетов -->
    	<div class = "fun" id = "pac_html" hidden >
    		<h3 >Стоимость N пакетов</h3>
    		<input  type="number" id="pac_a" placeholder="N = ">
    		<button id="pac_b" class="b1"><b>=</b></button>
    		<!--вывод результата -->
    		<br><br>
    		<div style="<?php echo $style_str ?>"id = pac_S_5 >Для А5 - S = 0</div>
    		<div style="<?php echo $style_str ?>"id = pac_S_4 >Для А4 - S = 0</div>
    		<div style="<?php echo $style_str ?>"id = pac_S_3 >Для А3 - S = 0</div>
    		<div style="<?php echo $style_str ?>"id = pac_S_2 >Под бутылку - S = 0</div>
    		<script type="text/javascript">
    			
    			$("#pac_b").click(function(){
    				var pac_S = $("#pac_a").val();
    				if(pac_S >= pac_kol){
    					pac_S = pac_S*(100-pac_discount)/100;
    				}
    				if(pac_S <0){
    					pac_S = 0;
    				}
    				var pac_k5=0.9*pac_k1;
    				var pac_k4=1*pac_k1;
    				var pac_k3=1.1*pac_k1;
    				var pac_k2=1.2*pac_k1;
    				$("#pac_S_5").html('Для А5 - S = '+(pac_S*pac_k5));
    				$("#pac_S_4").html('Для А4 - S = '+(pac_S*pac_k4));
    				$("#pac_S_3").html('Для А3 - S = '+(pac_S*pac_k3));
    				$("#pac_S_2").html('Под бутылку - S = '+(pac_S*pac_k2));
    			});
    		</script>
    	</div>
    	<!-- Стоимость N футболок -->
    	<div class = "fun" id = "tshort_html" hidden >
    		<h3 >Стоимость N футболок</h3>
    		<input  type="number" id="tshort_a" placeholder="N = ">
    		<h3 >Размер футболки</h3>
    		<?php
    		$style_tshort = 'margin-top: 3px;';
    		?>
    		<div >
    			<button class="b1" style="<?php echo $style_tshort ?>" id="XS">XS</button>
    
    			<button class="b1" style="<?php echo $style_tshort ?>" id="S">S</button>
    
    			<button class="b1" style="<?php echo $style_tshort ?>" id="M">M</button>
    
    			<button class="b1" style="<?php echo $style_tshort ?>" id="L">L</button>
    
    			<button class="b1" style="<?php echo $style_tshort ?>" id="XL">XL</button>
    
    			<button class="b1" style="<?php echo $style_tshort ?>" id="XXL">XXL</button>
    		</div>
    		<script type="text/javascript">
    				var tshort_k2 = 0;
    				function tshort_f(){
    					var tshort_S = $("#tshort_a").val();
    					if(tshort_S >= tshort_kol){
    						tshort_S = tshort_S*(100-tshort_discount)/100;
    					}
    					if(tshort_S <0){
    						tshort_S = 0;
    					}
    					
    					$("#tshort_S").html('S = '+(tshort_S*tshort_k1*tshort_k2));
    				};
    				$("#XS").click(function(){tshort_k2 = 0.9;tshort_f();});
    				$("#S").click(function(){tshort_k2 = 1;tshort_f();});
    				$("#M").click(function(){tshort_k2 = 1.2;tshort_f();});
    				$("#L").click(function(){tshort_k2 = 1.3;tshort_f();});
    				$("#XL").click(function(){tshort_k2 = 1.4;tshort_f();});
    				$("#XXL").click(function(){tshort_k2 = 1.6;tshort_f();});
    		</script>
    		<!-- вывод результата -->
    		<br>
    		<div style= "<?php echo $style_str ?>" id = tshort_S>S = 0</div>
	</div>
	</div>
</div>
<br>
<p style="margin-left: 10px; margin-bottom:5px;"><i><?php echo get_the_content() ?></i></p>
<hr>
<!-- Поиск по фильтру -->
<b style="margin-left: 10px;">Расчитали ориентировочной стоимость услуги❓ Тогда воспользуйтесь фильтром и найдите подходящюю вам типографию❗</b>
	<!-- поиск по меткам-->
	<?php
		get_template_part("searchtegs");
	?>
</div>
<?php
get_footer();
?>