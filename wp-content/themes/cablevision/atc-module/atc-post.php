<?php
  
  function custom_excerpt_length( $length ) {
    return 30;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'new_excerpt_more' );
  
  function read_full_story(){
    echo '<div class="expand-collapse-more"><a class="more arrowright " href="'. get_permalink( get_the_ID() ) . '">Read Full Story</a></div>';    
  }

  function atc_catagory_header(){
    $category = get_the_category(); 
    ?>
    <div class="topicHeading-ad-container">
      <h2>
        <?php echo '<span><a href="'.get_category_link( $category[0]->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category[0]->name ) ) . '">'. $category[0]->cat_name .'</a></span>'; ?>
      </h2>
    </div>
    <?php
  }

  ?>