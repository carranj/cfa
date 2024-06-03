<?php
/*
  Template Name: Get Started
*/
?>

<?php get_header(); ?>
<div class="clear-fix"></div>
	<?php 
	$banner_image = get_field('banner_image_get_started'); ?>
<div class="col-md-12 paddingNone internalPagesImageDiv" style="background-image: url(<?php echo $banner_image['url']; ?>);">  
	<section class="text-center internalPagesTitle">
		<h1><?php the_title(); ?></h1>	
	</section>
</div>
<div class="clear-fix"></div>
<div class="container">
	<div class="col-md-12 row">
		<div class="col-md-7 row marginTop30px marginRight30px nineColumnDiv">
			<?php the_field('left_column_gs'); ?>
		</div>
		<div class="col-md-5 row sidebarGetStarted marginTop30px">
			<?php

			// check if the repeater field has rows of data
			if( have_rows('right_column_gs') ):

			 	// loop through the rows of data
			    while ( have_rows('right_column_gs') ) : the_row();

			        // display a sub field value
					?>

					<h3><?php the_sub_field('right_column_title'); ?></h3>
					<div class="paddingLeftAndRight15px">
				        <?php the_sub_field('right_column_information'); ?>
					</div>
				<?php
			    endwhile;

			else :

			    // no rows found

			endif;

			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>  