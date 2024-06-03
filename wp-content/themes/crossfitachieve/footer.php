  <footer>
  	<div class="container">
  		<div class="row">
      <div class="col-md-3">
        <a class="footer-logo" href="<?php bloginfo( 'url' ); ?>">CROSSFIT<br><span>ACHIEVE</span></a>
        <div class="clear-fix crossFitJournal"></div>
        <a href="http://journal.crossfit.com/start.tpl?version=CFJ-black123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="<?php echo get_template_directory_uri(); ?>/images/crossfitjournal.png" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a>
        </div>
  			<div class="col-md-3 footer-nav">
        <h4><i class="fa fa-link"></i> Related Links</h4>
        <a href="<?php echo ( get_permalink(7) ); ?>">Home</a><br/>
        <a href="<?php echo ( get_permalink(9) ); ?>">About</a><br/>
        <a href="<?php echo ( get_permalink(15) ); ?>">Schedule</a><br/>
        <a href="<?php echo ( get_permalink(17) ); ?>">Success Stories</a><br/>
        <a href="<?php echo ( get_permalink(19) ); ?>">Get Started</a><br/>
        <a href="<?php echo ( get_permalink(30) ); ?>">Blog</a>
        </div>
        <div class="col-md-3 connect">
        <h4><i class="fa fa-map"></i> Location</h4>
        <a href="https://www.google.com/maps/place/3414+S+Shepherd+Dr,+Houston,+TX+77098/@29.7353787,-95.4130404,17z/data=!4m7!1m4!3m3!1s0x8640c08decf2c2ed:0x796eefc8250c5723!2s3414+S+Shepherd+Dr,+Houston,+TX+77098!3b1!3m1!1s0x8640c08decf2c2ed:0x796eefc8250c5723" target="_blank">3414 S. Shepherd Dr.<br />
        Houston, TX 77098</a><br /><br />
        <a href="tel:832-675-6089"><i class="fa fa-phone"></i> 832-675-6089</a>
        </div>
        <div class="col-md-3 socialicons">
        <h4><i class="fa fa-comments"></i> Connect</h4>
          <a href="https://www.facebook.com/CrossFit-Achieve-1500731070229015/timeline" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
          <!-- <a href="#" target="_blank" title="Facebook"><i class="fa fa-google-plus"></i></i></a> -->
          <a href="https://twitter.com/CrossfitAchieve" target="_blank" title="Facebook"><i class="fa fa-twitter"></i></a>
        </div>
        <br /><br />
  			<div class="col-md-12 copyright">
          <p>&copy; Copyright <?php echo date(Y); ?> CrossFit Achieve, All rights reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body> </html>
