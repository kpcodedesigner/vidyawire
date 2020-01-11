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
			<h1>News&Events</h1>
		</div> 
		</div>
		  <div class="bread_desc">
		<ol class="breadcrumb">
			<li class="breadcrumb-item " aria-current="page"><a href="<?php echo $finalurl;?>">Home</a></li>
			<li class="breadcrumb-item " aria-current="page"><a href="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) );?>">News & Events > <?php the_title();?></a></li>
		</ol>
		</div>
</nav>
</div>
</div>

<section class="news-single-page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<div class="single-page-post">
				<div class="card news-page-post">
					<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
					<div class="card-body news-page-post-body">
						<h5 class="card-title"><?php the_title();?></h5>
						<h5 class="date"><?php echo get_the_date();?> by <?php echo get_the_author_meta('display_name', $author_id);?></h5>
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
</div>


<div class="leave_reply">
<h3 class="leave-title">Leave a reply</h3>
<h6 class="leave-subhead">Your email address will not be published. Required fields are marked.</h6>
<?php echo do_shortcode('[contact-form-7 id="559" title="leave replay news single page"]');?>
</div>
 
 
 
 
			</div>
			<div class="col-md-4">
			<form>
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="Search" class="form-control news-search" name="name" placeholder="Search">
                    </form>
                    <div class="row news-page-recentpost">
                    <h3 class="news-page_recentpost-title">Recent Posts</h3>
                    <?php echo do_shortcode('[news_events_page_recentposts]');?>
                    </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>