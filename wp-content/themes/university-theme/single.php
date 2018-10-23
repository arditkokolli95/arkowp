<?php
	get_header();

	while(have_posts()){
		the_post();
		pageBanner();?>

	  	<div class="container container--narrow page-section">


	  		<div class="generic-content">
	  			<div class="metabox metabox--position-up metabox--with-home-link">
			      <p>
			      	<a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i>Blog Home</a> 
			      	<span class="metabox__main">E postuar nga <?php the_author_posts_link(); ?> me daten <?php the_time('d-M-Y'); ?> ne kategorine <?php echo get_the_category_list(', '); ?></span>
			      </p>
			    </div>
	  			<?php the_content(); ?>
	  		</div>
  		</div>
	<?php }
	get_footer();
?>

<!-- <h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p> -->