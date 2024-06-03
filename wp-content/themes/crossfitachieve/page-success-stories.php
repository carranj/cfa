<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="clear-fix"></div>
	<?php 
	$banner_image = get_field('banner_image'); ?>
<div class="col-md-12 paddingNone successStoriesImageDiv" style="background-image: url(<?php echo $banner_image['url']; ?>);">  
	<section class="text-center internalPagesTitle">
		<h1><?php the_title(); ?></h1>	
	</section>
</div>
<div class="clear-fix"></div>
<div class="container successStoriesContainer marginTop30px">
		<?php  
          $args = array(
            'post_type' => 'success-stories',
            'order' =>'asc',
            'posts_per_page' => 10,
            );               
          $loop = new WP_Query( $args );
           
          //Display the contents               
          while ( $loop->have_posts() ) : $loop->the_post();
        ?>
	<article class="post"> 
		<div class="row">
	        <div class="col-sm-8">
	        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
	        	<?php the_excerpt(); ?>
	        	 <div class="clearfix"></div>
		          <br />
		          <a style="font-family: 'Oswald', sans-serif;" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i> Read More</a>
		          <p><em>Share this article:</em> <a href="http://www.facebook.com/sharer.php?u=" target="_blank"> <i class="fa fa-facebook-square"></i></a> 
		            <a href="http://twitter.com/share?url=&text=" target="_blank"> <i class="fa fa-twitter-square"></i></a> 
		          </p>
	        </div>
	        <div class="col-sm-4 featured-img-section">
				<?php if ( has_post_thumbnail() ) { ?>  
	    	    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		        <?php } ?>

	        </div>
	    </div>
	   
	</article>
	
	<div class="clear-fix"></div>
        <hr class="blog">

            <?php endwhile;?>
	</div><!-- .content-area -->

<?php get_footer(); ?>