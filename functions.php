<?php

function vidyawires_setup() {

	add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
// 		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
	add_action( 'after_setup_theme', 'vidyawires_setup' );

	function vidyawires_widgets_init() {

		register_sidebar(
			array(
				'name'          => __( 'footer1', 'vidya-wire' ),
				'id'            => 'footer1',
				'before_widget' => '<div>',
				'after_widget'  => '</div>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'footer2', 'vidya-wire' ),
				'id'            => 'footer2',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'footer3', 'vidya-wire' ),
				'id'            => 'footer3',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'footer4', 'vidya-wire' ),
				'id'            => 'footer4',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
			)
		);


	}
	add_action( 'widgets_init', 'vidyawires_widgets_init' );

	function mytheme_customize_register($wp_customize){


//add section

		$wp_customize->add_section('copyright_section',array(

			'title' => 'Copyright Section',
			'priority' => 30
		));

	//add the setting

		$wp_customize->add_setting('footer_copyright',array(

			'defualt'=> ''

		));

	// add control

		$wp_customize->add_control(new WP_Customize_Control( $wp_customize,'copyright_text',array(

			'label' => 'Footer Copyright',
			'section' => 'copyright_section',
			'settings' => 'footer_copyright',


		)));

	//add the setting

		$wp_customize->add_setting('powered_by',array(

			'defualt'=> ''

		));

	// add control

		$wp_customize->add_control(new WP_Customize_Control( $wp_customize,'powered_by',array(

			'label' => 'Powered By',
			'section' => 'copyright_section',
			'settings' => 'powered_by',


		)));
		
    	/*************************Add New Section for Social Link*****************/ 
    	
    	
        $wp_customize->add_section('social_link_section',array(
        		'title' => 'Social Link Section',
        		'priority'=>'30'
        	));
        # Facebook Link
        $wp_customize->add_setting('facebook_link',array(
        	'default' => '#'
        	));
        $wp_customize->add_control(new WP_Customize_control($wp_customize,'facebook_link',array(
        	'label' => 'Facebook Link',
        	'section' =>'social_link_section',
        	'settings'=>'facebook_link',
        	)));
    //     	$wp_customize->add_setting('facebook_img', array(
    //     'transport'         => 'refresh',
    //     'height'         => 325,
    // ));
    //     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_img', array(
    //     'label'             => __('Facebook Image'),
    //     'section'           => 'social_link_section',
    //     'settings'          => 'facebook_img',    
    // )));
        # Twitter Link
        $wp_customize->add_setting('twitter_link',array(
        	'default' => '#'
        	));
        $wp_customize->add_control(new WP_Customize_control($wp_customize,'twitter_link',array(
        	'label' => 'Twitter Link',
        	'section' =>'social_link_section',
        	'settings'=>'twitter_link',
        	)));
    //   	$wp_customize->add_setting('twitter_img', array(
    //     'transport'         => 'refresh',
    //     'height'         => 325,
    // ));
    //     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_img', array(
    //     'label'             => __('Twitter Image'),
    //     'section'           => 'social_link_section',
    //     'settings'          => 'twitter_img',    
    // )));
        # Linkdin Link
        $wp_customize->add_setting('linkdin_link',array(
        	'default' => '#'
        	));
        $wp_customize->add_control(new WP_Customize_control($wp_customize,'linkdin_link',array(
        	'label' => 'Linkdin Link',
        	'section' =>'social_link_section',
        	'settings'=>'linkdin_link',
        	)));
    //     	$wp_customize->add_setting('linkdin_img', array(
    //     'transport'         => 'refresh',
    //     'height'         => 325,
    // ));
    //     $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'linkdin_img', array(
    //     'label'             => __('Linkd-In Image'),
    //     'section'           => 'social_link_section',
    //     'settings'          => 'linkdin_img',    
    // )));


	}
	add_action('customize_register','mytheme_customize_register');

	function add_link_atts($atts) {
		$atts['class'] = "nav-link";
		return $atts;
	}
	add_filter( 'nav_menu_link_attributes', 'add_link_atts');


	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	/********************************Get Post for News-events in Home-page ************************************/

	function newsandevents(){
		?>

		<section class="popular-course-area section-gap">
			<div class="container-fluid">
				<div class="owl-carousel popuar-course-carusel">
					<?php

					$args = array( 'post_type' => 'post', 'posts_per_page' =>'3','order'=>'ASC' );
					$loop = new WP_Query( $args );
					while($loop->have_posts()){ $loop->the_post();
						?>
						<div class="single-popular-course">
							<div class="thumb box14">
								<img  class="f-img img-fluid mx-auto article-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
								<div class="box-content">
									<h3 class="title"><?php the_title();?></h3>
									<ul class="icon">
										<li><a href="<?php the_permalink();?>"><img src="http://vidyawire.aliansoftware.net/wp-content/uploads/2019/12/right-arrow.png"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
						wp_reset_postdata();

					}
					?>
				</div>
			</div>
		</section>

	<?php }
	add_shortcode('newsandevents','newsandevents');

/*************************************For Footer Recent Post****************************************/
	function footer_recent_posts(){

		$args = array( 'post_type' => 'post', 'posts_per_page' =>'2','order'=>'ASC' );
		$loop = new WP_Query( $args );
		while($loop->have_posts()){ $loop->the_post();
			?>

			<div class="recent">
				<div class="recent_img">
					<img src="<?php echo get_the_post_thumbnail_url();?>" alt=""/>
				</div>
			
				<div class="recent_Desc">
					<a href="<?php the_permalink();?>">	<p><?php echo wp_trim_words(get_the_title(),5);?></p>	</a>
                    <h5 class="date"><?php echo get_the_date();?></h5>
				</div>
				
			</div>

			<?php
			wp_reset_postdata();

		}

	}
	add_shortcode('footer_recent_posts','footer_recent_posts');

	/*************************************For Product-page****************************************/
	function products(){
		?>
		<div class="row product-page">
		<?php
		$args = array( 'post_type' => 'products_slider', 'posts_per_page' =>'-1','order'=>'ASC' );
		$loop = new WP_Query( $args );
		while($loop->have_posts()){ $loop->the_post();
			?>
			<div class="col-lg-4 col-md-4 col-xl-4 col-sm-6 col-12">
				<div class="" style="">
			    	<a href="<?php the_permalink();?>"><div class="product-page-img">
					<img src="<?php echo get_the_post_thumbnail_url();?>" class="product-image" alt="...">
					</div></a>
					<div class="card-body product-details">
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<p><?php echo wp_trim_words(get_the_content(),18);?></p>
						<a class="know-more" href="<?php the_permalink();?>">Know more</a>
					</div>
				</div>
			</div>

			<?php
			wp_reset_postdata();

		}
?>
</div>
<?php

	}
	add_shortcode('products','products');
	
	/*************************************For News-events Page****************************************/
	function news_events_posts(){
		?>
		<div class="row product-page">
		<?php
		$args = array( 'post_type' => 'post', 'posts_per_page' =>'3','order'=>'ASC' );
		$loop = new WP_Query( $args );
		while($loop->have_posts()){ $loop->the_post();
			?>
			<a href="<?php the_permalink(); ?>">
			<div class="card news-page-post">
					<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
					<div class="card-body news-page-post-body">
						<h5 class="card-title"><?php the_title();?></h5>
						<h5 class="date"><?php echo get_the_date();?> by <?php the_author();?></h5>
						<p class="card-text"><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>
					</div>
					
				</div></a>

			<?php
			wp_reset_postdata();

		}
?>
</div>
<?php

	}
	add_shortcode('news_events_posts','news_events_posts');
	
	/*************************************For News-events Page Recent-post****************************************/
	function news_events_page_recentposts(){
		?>
	
		<?php
		$args = array( 'post_type' => 'post', 'posts_per_page' =>'-1','order'=>'ASC' );
		$loop = new WP_Query( $args );
		while($loop->have_posts()){ $loop->the_post();
			?>
			<div class="recent">
				<div class="recent_img">
					<img src="<?php echo get_the_post_thumbnail_url();?>" alt=""/>
				</div>
				<div class="recent_Desc">
				<a href="<?php the_permalink();?>"><p><?php echo wp_trim_words(get_the_title(),5);?></p></a>
                   <h5 class="date"><?php echo get_the_date();?> by <?php the_author();?></h5>
				</div>
			</div>

			<?php
			wp_reset_postdata();

		}
?>

<?php

	}
	add_shortcode('news_events_page_recentposts','news_events_page_recentposts');
	
	/*************************************For Revolution Slider****************************************/
	function revolution_slider(){
		?>
    	 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
    		<?php
    		$i=1;
    		$args = array( 'post_type' => 'banner_slider', 'posts_per_page' =>'-1','order'=>'ASC' );
    		$loop = new WP_Query( $args );
    		while($loop->have_posts()){ $loop->the_post();
    			?>
        <div class="carousel-item <?php if($i==1){echo "active";}?>">
          <img class="banner-img" src="<?php echo get_the_post_thumbnail_url();?>"  width="1920" height="700">
        </div>
        <div class="carousel-caption banner-decs_one">
        <div class="banner-content">
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
            </div>
            <div class="view-products">
            <a class="href="http://vidyawire.aliansoftware.net/products/">View Products</a>
            </div>
          </div>
        	<?php
    			wp_reset_postdata();
        $i++;
    		}
    ?>
    </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <?php
    
    	}
	add_shortcode('revolution_slider','revolution_slider');


