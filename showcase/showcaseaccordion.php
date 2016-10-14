<!-- begin showcase wrapper -->
		<script type="text/javascript">	
			function my_kwicks(){
                jQuery('.kwicks').kwicks({
					duration: 600,   /* this is a time setting in milliseconds */
					max: 700,  /* this is the max width of your image in each panel when expanded */
					spacing: 0  /* this is the spacing between image panels and recommend this be set to 0 */
				});
			}
            jQuery(document).ready(function(){
				my_kwicks();
			});			
		</script>

<div id="showcasewrap">
	<div id="showcasetop"></div>
		<div id="showcasemiddle">
			<div id="showcase">

				<div class="clearfix">
					<ul class="kwicks horizontal" >
						<?php if (get_option('pts_pic1')<>"Disable") { ?>
						<li id="kwick_1" style="background:url('<?php echo get_option('pts_pic1path'); ?>') no-repeat 0 0;"><div class="kwickshadow"> </div><a href="<?php echo get_option('pts_pic1link'); ?>" title="<?php echo get_option('pts_pic1title'); ?>"></a></li>
						<?php } ?>
						<?php if (get_option('pts_pic2')<>"Disable") { ?>
						<li id="kwick_2" style="background:url('<?php echo get_option('pts_pic2path'); ?>') no-repeat 0 0;"><div class="kwickshadow"> </div><a href="<?php echo get_option('pts_pic2link'); ?>" title="<?php echo get_option('pts_pic2title'); ?>"></a></li>
						<?php } ?>
						<?php if (get_option('pts_pic3')<>"Disable") { ?>
						<li id="kwick_3" style="background:url('<?php echo get_option('pts_pic3path'); ?>') no-repeat 0 0;"><div class="kwickshadow"> </div><a href="<?php echo get_option('pts_pic3link'); ?>" title="<?php echo get_option('pts_pic3title'); ?>"></a></li>
						<?php } ?>
						<?php if (get_option('pts_pic4')<>"Disable") { ?>
						<li id="kwick_4" style="background:url('<?php echo get_option('pts_pic4path'); ?>') no-repeat 0 0;"><div class="kwickshadow"> </div><a href="<?php echo get_option('pts_pic4link'); ?>" title="<?php echo get_option('pts_pic4title'); ?>"></a></li>
						<?php } ?>
						<?php if (get_option('pts_pic5')<>"Disable") { ?>
						<li id="kwick_5" style="background:url('<?php echo get_option('pts_pic5path'); ?>') no-repeat 0 0;"><div class="kwickshadow"> </div><a href="<?php echo get_option('pts_pic5link'); ?>" title="<?php echo get_option('pts_pic5title'); ?>"></a></li>
						<?php } ?>
					</ul>
				</div>

			</div>
		</div>
	<div id="showcasebottom"></div>
</div>