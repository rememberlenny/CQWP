<?php

  // Get stickied posts
  $sticky = get_option('sticky_posts');

  // Sort by most recent
  rsort( $sticky );
  $sticky = array_slice( $sticky, 0, 4);

  // Query sticky posts
  query_posts( array('post__in' => $sticky) );

?>
<?php if( have_posts() ) : ?>

<div class="cbv-carousel">

	<ul id="cbv-carousel-content">

	<?php $i = 1; ?>
    
    <?php while( have_posts()) : the_post(); ?>
      <?php $sticky_postID = get_the_ID(); ?>
      
      <?php if( $i == 1 ) : ?>
      <li id="cbv-slide-<?php echo $sticky_postID ?>">
      <?php else : ?>
      <li id="cbv-slide-<?php echo $sticky_postID ?>" class="hidden-slide">
      <?php endif; ?>
        <?php the_post_thumbnail('large'); ?>
        <div class="cbv-carousel-slide-caption">
        	<?php if ( has_post_thumbnail() ) : ?>
            <?php endif; ?>
        	<p><?php  the_title(); ?></p>
        </div>
      </li>
      <?php $i++; ?>
    <?php endwhile; ?>

    </ul>

    <?php rewind_posts(); ?>

    <ul id="cbv-carousel-nav">

    <?php while (have_posts()) : the_post(); ?>
      <?php $sticky_postID = get_the_ID(); ?>

      <li class="cbv-carousel-nav-item">
        <a href="#cbv-slide-<?php echo $sticky_postID ?>">
        	<?php the_post_thumbnail('thumb-50'); ?>
        </a>
      </li>

    <?php endwhile; ?>

    </ul>

</div>

<?php endif; ?>
 
<script>

    jQuery("#cbv-carousel-nav a[href]").click(function(event){
      // Prevent default <a> click event
      event.preventDefault ? event.preventDefault() : event.returnValue = false;
      
      // Fade in the corresponding slide and hide the rest
      jQuery("#cbv-carousel-content " + jQuery(this).attr("href")).fadeIn().siblings().hide();
    });

</script>