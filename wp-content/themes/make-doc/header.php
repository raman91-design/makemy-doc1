<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	 <div class='thetop'></div> 
	 <!-- top-header-section -->
<?php
$facebooklink =  of_get_option("facebook-link"); 
$googlelink =  of_get_option("google-link");
$twitterlink =  of_get_option("twitter-link"); 
$emaillink =  of_get_option("email-link"); 
$emailtext =  of_get_option("email-text"); 
$phonelink =  of_get_option("phone-link"); 
$phonetext =  of_get_option("phone-text"); 
?>


	<div class="top-header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="email-section">
						<ul>
							<?php
                        $a = 0;
                        if (!empty($phonelink)) { ?>
                        <li><a href="<?php echo $phonelink; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phonetext; ?></a></li>
                     <?php }
                        ?>
                        <?php
                        $a = 0;
                        if (!empty($emaillink)) { ?>
                        <li><a href="<?php echo $emaillink; ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $emailtext; ?></a></li>
                     <?php }
                        ?>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="top-social-links">
						<ul>
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
							<li class="help-text">Help <i class="fa fa-plus" aria-hidden="true"></i></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top-header-section -->
<header id="header">
<?php  $logo =  of_get_option("site_logo"); ?>
	<div class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo;?>" alt="logo" class="img-responsive"></a>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-6 menu-section">
					<nav id="menu" class="desktop-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 menu-section mobile-menu">
					<div class="toggle-button">
						<div id="nav-icon1">
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
					<nav id="menu" >
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>
<div id="container">