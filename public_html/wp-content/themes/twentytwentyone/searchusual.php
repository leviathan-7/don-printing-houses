<?php
/*
Template Name: простая форма поиска
*/
?>
<form  method="get" name="searchform" id="searchform" action="<?php bloginfo('siteurl')?>">
			<input required type="text" name="s" id="s" placeholder="Поисковый запрос" value="<?php echo wp_specialchars($s, 1); ?>"/>
			<input id="btnSearch" type="submit" name="submit" value="<?php _e('Поиск  '); ?>" />
</form>