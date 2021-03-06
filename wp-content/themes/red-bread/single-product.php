<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area inc-widget">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

      	<header class="entry-header">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>
      	</header><!-- .entry-header -->

      	<div class="entry-content">
					<div class="prod-price">Price: <?php echo CFS()->get( 'price' ); ?></div>

      		<?php the_content(); ?>
      	</div><!-- .entry-content -->


      </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
