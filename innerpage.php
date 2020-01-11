<?php 
/*Template Name:innerpage*/


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
			<h1><?php echo get_the_title();?></h1>
		</div> 
		</div>
		  <div class="bread_desc">
		<ol class="breadcrumb">
			<li class="breadcrumb-item " aria-current="page"><a href="<?php echo $finalurl;?>">Home</a></li>
			<li class="breadcrumb-item " aria-current="page"><a href="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) );?>"><?php echo get_the_title();?></a></li>
		</ol>
		</div>

</nav>
</div>
</div>
<?php

if ( have_posts() ) :

 	
 	while ( have_posts() ) :
 		the_post();

 		the_content();

 	endwhile;
 endif;

?>


<?php get_footer();?>