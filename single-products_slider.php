<?php 


get_header();




global $wp;

// get current url with query string.
$current_url =  home_url( $wp->request ); 

// get the position where '/page.. ' text start.
$pos = strpos($current_url , '/products');

// remove string from the specific postion
$finalurl = substr($current_url,0,$pos);

$pagename = get_query_var('pagename');  
if ( !$pagename && $id > 0 ) {  
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
	$post = $wp_query->get_queried_object();  
	$pagename = $post->post_name;  
}




?>

<div class="breadcrumb_main">
	<div class="container">
		<nav aria-label="breadcrumb">

			<div class="brea_title">
				<div class="page-title">
					<h1>Products</h1>
				</div> 
			</div>
			<div class="bread_desc">
				<ol class="breadcrumb">
					<li class="breadcrumb-item " aria-current="page"><a href="<?php echo $finalurl;?>">Home</a></li>
					<li class="breadcrumb-item " aria-current="page"><a href="http://vidyawire.aliansoftware.net/products/">Products > <?php the_title();?></a></li>
				</ol>
			</div>
		</nav>
	</div>
</div>

<section class="products-details-left">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="tab">
					<ul id="product-items-name">
						<?php
						
						// echo $id;
                        //  $class;
						 $i=1;
		$args = array( 'post_type' => 'products_slider', 'posts_per_page' =>'-1','order'=>'ASC' );
		$loop = new WP_Query( $args );
	 if ($loop->have_posts()):while($loop->have_posts()): $loop->the_post();

		 //$id = get_the_ID();
			?>
					<li class="single-tab-product"><a href="<?php the_permalink();?>"><div class="product-name">
						<h5><?php the_title();?></h5>
					</div></a></li>
						<?php
// 			wp_reset_postdata();
        $i++;
        endwhile;
        endif;
        wp_reset_query();
		
?>
</ul>
				</div>

				</div>
				<div class="col-lg-8">
				<div class="product-details-page-right">
					<div class="product-detail-image">
						<img src="<?php echo get_the_post_thumbnail_url();?>">
					</div>
					<div class="product-details">
						<h6>Our Product</h6>
						<h3 class="product-name"><?php the_title();?></h3>
						<p><?php
 if ( have_posts() ) :

 	
 	while ( have_posts() ) :
 		the_post();

 		the_content();

 	endwhile;
 endif;


 ?></p>
					</div>
                    </div>
				</div>

			</div>

		</div>
	</section>

	<?php get_footer();?>	