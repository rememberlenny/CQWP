<?php
/**
 * The Template for displaying all single posts.
 *
 * @package cablevision
 */

get_header(); ?>
	

	<?php atc_catagory_header(); ?>
	<div class="">
		<div class="subheading">
			<div id="headerNav"></div>
		</div>
		<div id="primary" class="grid-11 content-area">
			<main id="main" class="site-main copy-style-b" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php cablevision_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>