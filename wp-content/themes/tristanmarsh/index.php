<?php get_header('header'); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_title(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_template_part('sidebar.php'); ?>

<?php get_footer(); ?>