<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	
	register_sidebar(array(
	  'id' => 'home-cta',
	  'name' => __( 'Home CTA Content', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this container for the Home CTA section', 'foundationpress' ),
	  'before_widget' => '<div class="large-8 columns excerpt">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));
	
	register_sidebar(array(
	  'id' => 'home-cta-buttons',
	  'name' => __( 'Home CTA Buttons (Left)', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this container for the Home CTA Buttons (Left)', 'foundationpress' ),
	  'before_widget' => '<div class="large-4 medium-12 buttons columns">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));

	register_sidebar(array(
	  'id' => 'home-cta-buttons-right',
	  'name' => __( 'Home CTA Buttons (Right)', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this container for the Home CTA Buttons (Right)', 'foundationpress' ),
	  'before_widget' => '<div class="large-4 medium-12 buttons columns">',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));
	
	register_sidebar(array(
	  'id' => 'contact-text',
	  'name' => __( 'Listing Contact Info', 'foundationpress' ),
	  'description' => __( 'Add the text you want to appear within the listing page itself', 'foundationpress' ),
	  'before_widget' => '<div class="large-4 columns"><div class="contact-block">',
	  'after_widget' => '</div></div></div></div>',
	  'before_title' => '<div class="content"><div class="header"><h2>',
	  'after_title' => '</h2></div><divider></divider>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>
