<?php
/**
 * The template for displaying search forms in cablevision
 *
 * @package cablevision
 */
?>
<form role="search" method="get" id="primaryNav-search" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <fieldset>
    <input type="search" class="input-text" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'cablevision' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'cablevision' ); ?>">
    <input type="submit" class="input-submit " value="<?php echo esc_attr_x( 'Search', 'submit button', 'cablevision' ); ?>">
  </fieldset>
</form>