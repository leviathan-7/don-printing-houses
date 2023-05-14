<?php
/*
Template Name: Выбор фотографии
*/
?>
<style> .file-upload input[type="file"]{display: none;};</style>
<li>
<div class="file-form-wrap">
	<div class="file-upload"style="color :#fab2a3;border: 3px solid black;overflow: hidden; width: 250px;height:50px;line-height:50px;background: black; text-align: center;"
	onmouseover="this.style.backgroundColor='';this.style.color='black';" onmouseout="this.style.backgroundColor='black';this.style.color='#fab2a3';">
		<label style="display: block;cursor: pointer;">
			<input type="file" name="file" id="file" accept="image/*" onchange="getFileParam()";>
			<span >Выберите фотографию</span><br>
		</label>
	</div>
	<div id="file-name1">&nbsp;</div>
</div>
</li>
<script>
	function getFileParam() { 				
			var file = document.getElementById('file').files[0]; 				
			if (file) {document.getElementById('file-name1').innerHTML = 'Имя: ' + file.name;}
	}
</script>