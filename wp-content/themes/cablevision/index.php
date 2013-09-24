<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cablevision
 */

get_header(); ?>

	<div id="primary" class="grid-11 content-area" >
		<main id="main" class="site-main" role="main" style="margin-top:1em;">

		<?php 
		if(is_home()):
			//echo '<div style="margin-bottom:1.5em; text-align: center;"><img src="http://fakeimg.pl/611x540/" alt=""></div>';
		    get_template_part( 'inc/cbv-carousel' );
		endif;
		?>
		<div class="split-content-wrap clearfix">
		
		<div class="grid-11 stream-col copy-style-b wrap-body">
		 <div class="parsys streamtop"></div>
			 <div class="stream-header">
				 <h2>LATEST COVERAGE</h2>
				 <div class="ribbon-tail"></div>
			 </div>
		 </div>
		</div>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php cablevision_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>