<?php  
$copyrighttext =  of_get_option("copyright-text"); 
$facebooklink =  of_get_option("footer-facebook-link"); 
$twitterlink =  of_get_option("footer-twitter-link");
$googlelink =  of_get_option("footer-google-link"); 
$footertext =  of_get_option("footer-text"); 
$footerlogo =  of_get_option("footer_logo"); 

?>
</div>
<footer id="footer">
<!-- footer-section -->
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="footer-box">
          <img src="<?php echo $footerlogo;?>" class="img-responsive">
          <p><?php echo $footertext; ?></p>
          <hr class="footer-line">
          <ul class="footer-social">
            <?php
                        $a = 0;
                        if (!empty($facebooklink)) { ?>
                        <li><a href="<?php echo $facebooklink; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <?php }
                        ?>
                <?php
                        $a = 0;
                        if (!empty($twitterlink)) { ?>
                        <li><a href="<?php echo $twitterlink; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <?php }
                        ?>

                         <?php
                        $a = 0;
                        if (!empty($googlelink)) { ?>
                        <li><a href="<?php echo $googlelink; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                     <?php }
                        ?>
          </ul>
          <div class="footermenu">
            <?php
                 if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' );  
              endif;
              ?>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!-- footer-section -->
<!-- bottom-footer-section -->
<div class="bottom-footer-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
       <p><?php echo $copyrighttext;?></p> 
      </div>
    </div>
  </div>
</div>
<!-- bottom-footer-section -->
</footer>
<div class="scrolltop">
<div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
</div>
</div>


<?php wp_footer(); ?>
   <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
  jQuery('#nav-icon1').click(function(){
   jQuery(this).toggleClass('open');
  jQuery('.menu').toggleClass('menu-show');
  });
});

</script>
</body>
</html>
