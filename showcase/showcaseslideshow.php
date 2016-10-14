<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#s3slider').s3Slider({
      timeOut: 6000
   });
}); 
</script>

<div id="showcasewrap">
	<div id="showcasetop"></div>
		<div id="showcasemiddle">
			<div id="showcase">
			

<div id="s3slider">
	<ul id="s3sliderContent">
	<!-- slide 1 -->
	<?php if (get_option('pts_s1')<>"Disable") { ?>
		<li class="s3sliderImage">
			
			<img src="<?php echo get_option('pts_s1path'); ?>" alt="<?php echo get_option('pts_s1alt'); ?>" />
			<?php if (get_option('pts_s1info')<>"Disable") { ?>
				<span><?php echo get_option('pts_s1desc'); ?>...<a href="<?php echo get_option('pts_s1link'); ?>" title="<?php echo get_option('pts_s1linktitle'); ?>" class="smore"><?php echo get_option('pts_s1more'); ?></a></span>
			<?php } ?>
		</li>
	<?php } ?>
	  <!-- slide 2 -->
	 <?php if (get_option('pts_s2')<>"Disable") { ?>
		<li class="s3sliderImage">
		
			<img src="<?php echo get_option('pts_s2path'); ?>" alt="<?php echo get_option('pts_s2alt'); ?>" />
			<?php if (get_option('pts_s2info')<>"Disable") { ?>
				<span><?php echo get_option('pts_s2desc'); ?>...<a href="<?php echo get_option('pts_s2link'); ?>" title="<?php echo get_option('pts_s2linktitle'); ?>" class="smore"><?php echo get_option('pts_s2more'); ?></a></span>
			<?php } ?>
		</li>
	<?php } ?> 
	  <!-- slide 3 -->
	<?php if (get_option('pts_s3')<>"Disable") { ?>
		<li class="s3sliderImage">
			<img src="<?php echo get_option('pts_s3path'); ?>" alt="<?php echo get_option('pts_s3alt'); ?>" />
			<?php if (get_option('pts_s3info')<>"Disable") { ?>
				<span><?php echo get_option('pts_s3desc'); ?>...<a href="<?php echo get_option('pts_s3link'); ?>" title="<?php echo get_option('pts_s3linktitle'); ?>" class="smore"><?php echo get_option('pts_s3more'); ?></a></span>
			<?php } ?>
		</li>
	<?php } ?>  
	  <!-- slide 4 -->
	<?php if (get_option('pts_s4')<>"Disable") { ?>
		<li class="s3sliderImage">
			<img src="<?php echo get_option('pts_s4path'); ?>" alt="<?php echo get_option('pts_s4alt'); ?>" />
			<?php if (get_option('pts_s4info')<>"Disable") { ?>
				<span><?php echo get_option('pts_s4desc'); ?>...<a href="<?php echo get_option('pts_s4link'); ?>" title="<?php echo get_option('pts_s4linktitle'); ?>" class="smore"><?php echo get_option('pts_s4more'); ?></a></span>
			<?php } ?>
		</li>
	<?php } ?>  
	  <!-- slide 5 -->
	<?php if (get_option('pts_s5')<>"Disable") { ?>
		<li class="s3sliderImage">
			<img src="<?php echo get_option('pts_s5path'); ?>" alt="<?php echo get_option('pts_s5alt'); ?>" />
			<?php if (get_option('pts_s5info')<>"Disable") { ?>
				<span><?php echo get_option('pts_s5desc'); ?>...<a href="<?php echo get_option('pts_s5link'); ?>" title="<?php echo get_option('pts_s5linktitle'); ?>" class="smore"><?php echo get_option('pts_s5more'); ?></a></span>
			<?php } ?>
		</li>
	<?php } ?>
	  
      <div class="clear s3sliderImage"></div>
   </ul>
</div>




			</div>
		</div>
	<div id="showcasebottom"></div>
</div>