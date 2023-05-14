<?php
/*
Template Name: форма поиска по тегам
*/
?>
<form  method="get" action="<?php bloginfo('siteurl'); ?>">
			<select name="tag">
			<?php
			$tags = get_tags();
			foreach ($tags as $tag) {
			echo '<option value="', $tag->slug, '">', $tag->name, "</option>\n";
			}
			?>
			</select>
			<input id="btnSearch" type="submit" name="submit" value="<?php _e('Поиск по фильтру'); ?>" />
</form>