<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>

<div class="w940">
	<div class="columns clearfix">
		<div id="main-r"><?php get_template_part( 'loop', 'index' ); ?></div>
			<div id="right"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Right Column')) : ?>
				<div class="widget"><h3><?php _e('Right Column Widgets', 'pts' ); ?></h3>
        			<div class="textwidget"><?php _e('As it is with any website or blog, you have the choice of adding any kind of widgets to the sidebars. There are many to choose from the WordPress website, like:', 'pts' ); ?>
     				</div>
       			</div>
			<?php endif; ?>
		</div>
	</div>
</div>