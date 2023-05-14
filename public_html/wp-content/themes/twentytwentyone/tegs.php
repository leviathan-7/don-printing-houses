<?php
/*
Template Name: Выбор тегов
*/
?>
<li><label for="time">Введите метки:</label></li>
<?php
$tags = get_tags();
foreach ($tags as $tag) {
echo ' <li><input type="checkbox" name="tags[]" value="',$tag->slug,'">', $tag->name, "</li>\n";
}
?>