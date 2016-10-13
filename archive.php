<?php
// Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html>

get_header(); 
?>

<?php

switch (get_option('pts_archivelayout')) {
	case "Archive Right":
        get_template_part('archive/archiveright');
		break;
	case "Archive Left":
        get_template_part('archive/archiveleft');
		break;
	case "Archive Inset Right":
        get_template_part('archive/archiveinsetright');
		break;
	case "Archive Wide":
        get_template_part('archive/archiveswide');
		break;
}
?>

<?php get_footer(); ?>