<?php get_header(); ?>

<div class="col-xs-12 homeslide paddingNone">
   <div id="gallery" class="royalSlider rsDefault bannerslider">

  <?php if( have_rows('slideshow') ): ?>
  <?php while ( have_rows('slideshow') ) : the_row(); ?>
            
  <!-- the_sub_field-->

      <div class="rsContent">
          <?php $homepageImage = get_sub_field('slide_image'); ?>
            <div class="slidecontent container">
              <div class="slidedescription">
                <?php the_sub_field('slidedescription'); ?>
              </div>
   			 </div>
            <img class="rsImg" src="<?php echo $homepageImage['url']; ?>" width='100%' alt="<?php echo $homepageImage['alt']; ?>" />
      </div>


  <?php endwhile; else : ?>
  <?php endif; ?>
  </div>
</div>
  <div class="clearfix"></div>
<section class="container firstContainer">
	<div class="col-md-6 paddingNone marginTop30px marginNegativeBottom30px getStartedNowDiv">
		<?php 
		$get_started_now_image = get_field('get_started_now_image');
		if( !empty($get_started_now_image) ): ?>
			<a href="<?php the_field('get_started_now_button_1'); ?>"><img src="<?php echo $get_started_now_image['url']; ?>" alt="<?php echo $get_started_now_image['alt']; ?>" class="img-responsive getStartedNowandViewOurScheduleImage getStartedNowImage" /></a>
		<?php endif; ?>
				<a class="viewOurClasses-viewOurSchedule getStartedNowSection" href="<?php the_field('get_started_now_button_1'); ?>">GET STARTED NOW</a>
	</div>
	<div class="col-md-6 paddingNone marginTop30px marginNegativeBottom30px viewOurScheduleDiv">
		<?php 
		$view_our_schedule_image = get_field('view_our_schedule_image');
		if( !empty($view_our_schedule_image) ): ?>
			<a href="<?php the_field('view_our_schedule_button'); ?>"><img src="<?php echo $view_our_schedule_image['url']; ?>" alt="<?php echo $view_our_schedule_image['alt']; ?>" class="img-responsive getStartedNowandViewOurScheduleImage viewOurScheduleImage" /></a>
		<?php endif; ?>
				<a class="viewOurClasses-viewOurSchedule viewOurScheduleSection" href="<?php the_field('view_our_schedule_button'); ?>">VIEW OUR SCHEDULE</a>
			
	</div>
</section>
<div class="clear-fix"></div>
<hr>
<div class="clear-fix"></div>
<div class="container marginBottom30px">
	<div class="col-md-9 paddingNone sectionContainer">
		<h3><?php the_field('section_title'); ?></h3>
		<p class="sectionParagraph"><?php the_field('section_paragraph'); ?></p>
		<div class="col-md-12 frontPageButton paddingNone">
			<div class="btn btn-default redColorBackground marginBottom30px frontPageButton1">
				<a href="<?php the_field('get_started_now_button_2'); ?>">Get Started Now <i class="fa fa-angle-double-right fa-lg"></i></a>
			</div>
		</div>
	</div>
	<div class="col-md-3 redBorder paddingNone frontPageSuccessStoriesDiv">
	<h3 class="successStory"><?php the_field('success_story_1'); ?></h3>
<?php  
  $args = array(
    'post_type' => 'success-stories',
    'order' =>'DESC',
    'posts_per_page' => 2,
    );               
  $loop = new WP_Query( $args );
   
  //Display the contents               
  while ( $loop->have_posts() ) : $loop->the_post();
?>

  
  <div class="paddingLeft15px">
    <p class="personName"><?php the_title(); ?></p>
    <p class="personStory"><?php echo content(22); ?> <a href="<?php the_permalink(); ?>"> Read More <i class="fa fa-angle-double-right"></i></a></p>
  </div>
  <hr class="lineBreak2">

<?php endwhile;?>
</div>
</div>

<?php get_footer(); ?> 
