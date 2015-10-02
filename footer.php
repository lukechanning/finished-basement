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

<?php do_action( 'foundationpress_before_footer' ); ?>

<footer class="footer">
  <div class="row">
  	<?php dynamic_sidebar( 'footer-widgets' ); ?>
    <div class="small-12 columns">
      <p class="slogan">Finger-lickin' good</p>
      <p class="links">
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">Pricing</a>
        <a href="#">About</a>
        <a href="#">Faq</a>
        <a href="#">Contact</a>
      </p>
      <p class="copywrite">Copywrite not copypwrite © 2015</p>
    </div>
  </div>
</footer>

<?php do_action( 'foundationpress_after_footer' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php
wp_footer();
do_action( 'foundationpress_before_closing_body' );
get_template_part('parts/custom-js');
?>

</body>
</html>
