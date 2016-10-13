<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>
// Get theme settings
get_header(); 
?>

<?php
switch (get_option('pts_singlelayout')) {
	case "Single Right":
        get_template_part( 'single/singleright' );
		break;
	case "Single Left":
        get_template_part( 'single/singleleft' );
		break;
	case "Single Inset Right":
        get_template_part( 'single/singleinsetright' );
		break;
	case "Single Wide":
        get_template_part( 'single/singlewide' );
		break;
}
?>

<?php get_footer(); ?>