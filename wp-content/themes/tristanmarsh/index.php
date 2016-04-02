<?php get_header('header'); ?>


<div class="container">
	
	<div class="row">
		
		<div class="main-content col-sm-9 col-md-9 col-lg-10">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php endwhile; else : ?>
			  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


		</div>

		<aside class="sidebar col-sm-3 col-md-3 col-lg-2">
			
			<?php get_template_part('sidebar.php'); ?>

		</aside>

	</div>

</div>


<?php get_footer(); ?>