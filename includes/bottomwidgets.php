<?php // Visual Design Copyright (C) 2014 pixelthemestudio.ca - All Rights Reserved. license GPL/GNU <http://www.gnu.org/licenses/gpl-3.0.html> ?>
<div id="bottomwidgets" class="clearfix">
  <div class="w960">
  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Widgets')) : ?>
  
  
  
  <div class="three"><h4><?php _e('Theme Features', 'pts' ); ?></h4>
  <div class="textwidget"><p><?php _e('Welcome to the Layers Theme which was designed for the artist in mind. Whether you are an illustrator, graphic designer, a Photographer, or other, you will find this theme is best suited to showcase your artistic abilities. Use it as a blog or even a portfolio...the clean style and clean edges will help put more focus on your creativity.', 'pts' ); ?></p>
  <ul>
  <li><?php _e('Theme Settings for personalization', 'pts' ); ?></li>
  <li><?php _e('Almost unlimited colour variations', 'pts' ); ?></li>
  <li><?php _e('4 Showcase options', 'pts' ); ?></li>
  <li><?php _e('Custom Google Fonts', 'pts' ); ?></li>
  <li><?php _e('...and more!', 'pts' ); ?></li>
  </ul></div>
		</div><div class="three"><h4><?php _e('Showcase Options', 'pts' ); ?></h4><div class="textwidget"><p><?php _e('Layers comes with 4 Showcase options to give you choices without using plugins.', 'pts' ); ?></p>
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/smScreenshot.jpg" class="aligncenter"></div>

		</div><div class="three"><h4><?php _e( 'Recent Posts', 'pts' ); ?></h4>			<div class="textwidget"><p><?php _e('Check out the recent articles posted here with the Layers Theme and keep up to date with the latest news along with great photographic imagery that shows the great things in nature.', 'pts' ); ?> </p>
		
<ul>
<?php query_posts('category_id=1&showposts=5');?>
<?php $posts = get_posts('category=#&numberposts=#&offset=0');
	foreach ($posts as $post) : setup_postdata( $post );/*start_wp(); really? This was last used in WP 1.5*/ ?>
<li><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?></ul></div>
		</div><div class="clearfix"></div>
		
		
		
  <?php endif; ?>
  <div  class="clearfix"></div></div>
</div>