<?php
/**
 * @package cablevision
 */
?>

<article style="padding-bottom:1em;" id="post-<?php the_ID(); ?>" <?php post_class('stream-item clearfix'); ?>>
	<div class="grid-2" style="padding-top:.5em;">
		<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
	</div>
	<div class="grid-8">
		<header class="entry-header">
			<h1 class="heading heading-style-i size-30 entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php cablevision_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_excerpt(); ?>
			<?php read_full_story(); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	</div>
</article><!-- #post-## -->
