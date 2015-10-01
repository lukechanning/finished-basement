<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

<!-- Let's add the Owl Carousel -->
<script src="/wp-content/themes/finished-basement/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
    	jQuery('.owl-carousel').owlCarousel({
            loop:true,
            items: 1,
            center: true,
            margin:10
        });	
       jQuery('.owl-carousel-properties').owlCarousel({
            items: 4,
            margin:20,
            nav:true,
            lazyLoad: true,
        });	 
</script>

</body>
</html>
