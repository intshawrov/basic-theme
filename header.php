<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title><?php bloginfo('name'); ?></title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/plugins/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/style.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css">

	<style>
		.navigation .header-top,
		.navigation .navbar{
		<?php 
		
		global $redux_opt;
		
	
		if( isset($redux_opt['header_bg']['background-color'])){
			echo 'background-color: '      . $redux_opt['header_bg']['background-color'] . ';';
		}

	
		if( isset($redux_opt['header_bg']['background-image'])) {
			echo 'background-image: url("' . $redux_opt['header_bg']['background-image'] . '");';
		}
		

	
		if( isset($redux_opt['header_bg']['background-repeat']) && !empty($redux_opt['header_bg']['background-repeat'])) {
			echo 'background-repeat: '     . $redux_opt['header_bg']['background-repeat'] . ';';
		}
		if( isset($redux_opt['header_bg']['background-position'])) {
			echo 'background-position: '   . $redux_opt['header_bg']['background-position'] . ';';
		}
		if( isset($redux_opt['header_bg']['background-size'])) {
			echo 'background-size: '       . $redux_opt['header_bg']['background-size'] . ';';
		}
		if( isset($redux_opt['header_bg']['background-attachment'])) {
			echo 'background-attachment: ' . $redux_opt['header_bg']['background-attachment'] . ';';
		}
		?>
		}

	</style>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<?php if( isset($redux_opt['fb_link']) && !empty($redux_opt['fb_link'])) :  ?>
						<a href="<?php echo $redux_opt['fb_link']; ?> " target="_blank"><i class="ti-facebook"></i></a>
						<?php endif; ?>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">
		  	<?php the_custom_logo(); ?>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			
			<?php wp_nav_menu(array(
				'theme_location'	=> 'header-menu',
				'menu_class'	=> 'navbar-nav ml-auto',
				'walker'		=> new WP_Bootstrap_Navwalker()
			));
			?>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.html" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form>
		  </div>
		</div>
	</nav>
</header>
