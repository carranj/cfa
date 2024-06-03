<?php
/*
  Template Name: Schedule
*/
?>

<?php get_header(); ?>
<div class="clear-fix"></div>
	<?php 
	$banner_image = get_field('banner_image'); ?>
<div class="col-md-12 paddingNone scheduleImageDiv" style="background-image: url(<?php echo $banner_image['url']; ?>);">  
	<section class="text-center internalPagesTitle">
		<h1><?php the_title(); ?></h1>	
	</section>
</div>
<div class="clear-fix"></div>
<div class="container visible-xs visible-sm mobileDescriptionAboveSchedule marginTop30px">
	<?php the_field('description_of_schedule_for_mobile_devices'); ?>
</div>
<div class="container">
	<div class="calendarFull visible-xs visible-sm">
		<div class="col-md-12 calendarColumn row">
			<div class="calendarTitle row">
				<?php the_field('calendar_title_-_first'); ?>
			</div>
			<div class="dayOfWeek row">
				<p><strong><?php the_field('type_of_class_-_first'); ?></strong>
				<?php the_field('class_times_-_first'); ?></p>
			</div>
		</div>
		<div class="col-md-12 calendarColumn row">
			<div class="calendarTitle row">
				<?php the_field('calendar_title_-_second'); ?>
			</div>
			<div class="dayOfWeek row">
				<p><strong><?php the_field('type_of_class_-_second'); ?></strong>
				<?php the_field('class_times_-_second'); ?></p>
			</div>
		</div>
		<div class="col-md-12 calendarColumn row">
			<div class="calendarTitle row">
				<?php the_field('calendar_title_-_third'); ?>
			</div>
			<div class="dayOfWeek row">
				<p><strong><?php the_field('type_of_class_-_third'); ?></strong>
				<?php the_field('class_times_-_third'); ?></p>
			</div>
		</div>
		<div class="col-md-12 calendarColumn row">
			<div class="calendarTitle row">
				<?php the_field('calendar_title_-_fourth'); ?>
			</div>
			<div class="dayOfWeek row">
				<p><strong><?php the_field('type_of_class_-_fourth'); ?></strong>
				<?php the_field('class_times_-_fourth'); ?></p>
			</div>
		</div>
	</div>
	<div class="calendarFull hidden-xs hidden-sm">
		<div class="row eight-cols">
			<div class="col-md-1 calendarColumn">
			    <div class="row calendarTitle">
			    	Monday
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>4:30 p.m. - 5:30 p.m.</span></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>5:30 p.m. - 6:30 p.m.</span></p>
			    </div>
			   	<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>6:30 p.m. - 7:30 p.m.</span></p>
			    </div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Tuesday
				</div>
				<div class="row dayOfWeek">
					<p><strong>CROSSFIT</strong><br />
					<span>4:30 p.m. - 5:30 p.m.</span></p>
				</div>
				<div class="row dayOfWeek">
					<p><strong>CROSSFIT</strong><br />
					<span>5:30 p.m. - 6:30 p.m.</span></p>
				</div>
				<div class="row dayOfWeek">
					<p><strong>CROSSFIT</strong><br />
					<span>6:30 p.m. - 7:30 p.m.</span></p>
				</div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Wednesday
				</div>
				<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>4:30 p.m. - 5:30 p.m.</span></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>5:30 p.m. - 6:30 p.m.</span></p>
			    </div>
			   	<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>6:30 p.m. - 7:30 p.m.</span></p>
			    </div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Thursday
				</div>
				<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>4:30 p.m. - 5:30 p.m.</span></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>5:30 p.m. - 6:30 p.m.</span></p>
			    </div>
			   	<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>6:30 p.m. - 7:30 p.m.</span></p>
			    </div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Friday
				</div>
				<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>4:30 p.m. - 5:30 p.m.</span></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>5:30 p.m. - 6:30 p.m.</span></p>
			    </div>
			   	<div class="row dayOfWeek">

			    </div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Saturday
				</div>
				<div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>9:00 a.m. - 10:00 a.m.</span></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p><strong>CROSSFIT</strong><br />
			    	<span>10:00 a.m. - 11:00 a.m.</span></p>
			    </div>
			   	<div class="row dayOfWeek">
			    	
			    </div>
			</div>
			<div class="col-md-1 calendarColumn">
				<div class="row calendarTitle">
					Sunday
				</div>
				<div class="row dayOfWeek">
			    	<p><strong>NO CLASSES</strong></p>
			    </div>
			    <div class="row dayOfWeek">
			    	<p>&nbsp;</p>
			    </div>
			   	<div class="row dayOfWeek">
			    	<p>&nbsp;</p>
			    </div>
			</div>
		</div>
	</div>
	<div class="text-center marginTop30px">
		<div class="btn btn-default redColorBackground marginBottom30px scheduleButton">
			<a href="<?php the_field('get_started_now_button'); ?>">Get Started Now <i class="fa fa-angle-double-right fa-lg"></i></a>
		</div>
	</div>
</div>
<div class="clearfix"></div>
		
<?php get_footer(); ?>
