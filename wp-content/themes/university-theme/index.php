<?php 
	get_header();
	pageBanner(array(
		'title' => 'Welcome to our Blog',
		'subtitle' => 'Keep up with our latest news'
	));?>

  	<div class="container container--narrow page-section">
  		<?php
	  		while(have_posts()){
	  			the_post(); ?>
	  			<div class="post-item">
	  				<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	  				<div class="metabox">
	  					<p>E postuar nga <?php the_author_posts_link(); ?> me daten <?php the_time('d-M-Y'); ?> ne kategorine <?php echo get_the_category_list(', '); ?></p>
	  				</div>

	  				<div class="generic-content">
	  					<?php the_excerpt(); ?>
	  					<p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
	  				</div>

	  			</div>
		<?php
	  		}
			echo paginate_links();
  		?>

  	</div>

<?php
	get_footer();
?>