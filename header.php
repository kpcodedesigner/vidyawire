<html <?php language_attributes(); ?>>
<head>
	<title>Vidhya-wires</title>
	<meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php// echo get_template_directory_uri()?>/css/slider.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"> -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
   
    <link href="<?php echo get_template_directory_uri()?>/css/owl.carousel.css" rel="stylesheet" />
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<?php 
				 $logo_id=get_theme_mod( 'custom_logo' );
                       $custom_logo_url = wp_get_attachment_image_url( $logo_id , 'full' );
				echo '<a class="navbar-brand" href="'.home_url().'"><img src="' . esc_url( $custom_logo_url ) . '" alt="vidyawires_logo"></a>'?>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarText">
					<?php
                            
wp_nav_menu(array( 'menu' => '', 'container' => 'ul', 'container_class' => '', 'container_id' => '', 'menu_class' => 'navbar-nav', 'menu_id' => '',
'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'item_spacing' => 'preserve',
'depth' => 0, 'walker' => '', 'theme_location' => 'primary' ));


    ?>
					<!-- <ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">News & Events</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
					</ul> -->
					<div class="search">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>
					<div class="header-social-icons ml-auto">
						<a href="<?php echo get_theme_mod('facebook_link');?>"><i class="fa fa-facebook-f"></i></a>
						<a href="<?php echo get_theme_mod('twitter_link');?>"><i class="fa fa-twitter"></i></a>
						<a href="<?php echo get_theme_mod('linkdin_link');?>"><i class="fa fa-linkedin"></i></a>
					</div>
					<div class="header-inquery-button" data-toggle="modal" data-target="#myModal">
						<button class="inquiry">Inquiry</button>
					</div>
				</div>
			</nav>
		</div>	
	</header>