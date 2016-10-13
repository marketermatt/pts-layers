<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>

get_header(); 
?>

<?php
switch (get_option('pts_categorylayout')) {
	case "Category Right":
        get_template_part('category/categoryright');
		break;
	case "Category Left":
        get_template_part('category/categoryleft');
		break;
	case "Category Inset Right":
        get_template_part('category/categoryinsetright');
		break;
	case "Category Wide":
        get_template_part('category/categorywide');
		break;
}
?>

<?php get_footer(); ?>