<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package cablevision
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'stream-item clearfix' ); ?>>
	<div class="grid-6">
		<?php get_post_thumbnail(); ?>
	</div>
	<div class="grid-10">
		<header class="entry-header">
			<h1 class="heading heading-style-i size-30 entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content ">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'cablevision' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<?php edit_post_link( __( 'Edit', 'cablevision' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	</div>
</article><!-- #post-## -->
