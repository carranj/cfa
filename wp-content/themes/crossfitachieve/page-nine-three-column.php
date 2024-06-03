<?php
/*
  Template Name: Nine + Three Column
*/
?>

<?php get_header(); ?>
<div class="clear-fix"></div>
	<?php 
	$banner_image = get_field('banner_image'); ?>
<div class="col-md-12 paddingNone internalPagesImageDiv" style="background-image: url(<?php echo $banner_image['url']; ?>);">  
	<section class="text-center internalPagesTitle">
		<h1><?php the_title(); ?></h1>	
	</section>
</div>
<div class="clear-fix"></div>
<div class="container">
	<div class="col-md-12 row">
		<div class="col-md-9 row marginTop30px marginRight30px nineColumnDiv">
			<?php the_field('9_column'); ?>
		</div>
		<div class="col-md-3 row contactUsFormDiv marginTop30px">
			<?php the_field('3_column'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>  