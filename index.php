<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>

get_header();
 
?>

<!-- begin content -->
 <?php
switch (get_option('pts_bloglayout')) {
	case "Blog Right":
        get_template_part( 'blog/blogright' );
		break;
	case "Blog Left":
        get_template_part( 'blog/blogleft' );
		break;
	case "Blog Inset Right":
        get_template_part( 'blog/bloginsetright' );
		break;
	case "Blog Wide":
        get_template_part( 'blog/blogwide' );
		break;
}
?>
                
<?php get_footer(); ?>