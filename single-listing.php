<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="address">
	<div class="address-bar row">
		<div class="large-8 columns">
		<?php
			//Let's define some variables
	    	$address = listing_address_get_meta( 'listing_address_property_address_in_full' );
	    	$postal = listing_address_get_meta( 'listing_address_postal_code' );
	    	$country = listing_address_get_meta( 'listing_address_property_country' );
	    	$find = array('/\s+/','/,/');
	    	$replace = array('+','%2C');
		    $searchString = strtolower( preg_replace($find, $replace, $address) );
			?>
			<i class="fa fa-map-marker fa-2x"></i> <a target="_blank" href="https://www.google.com/maps?&q=<?php echo $searchString ?>"><?php echo $address, " ", $postal, " ", $country; ?></a>
		</div>
		<?php if ( ! dynamic_sidebar('contact-text') ) : ?>
			<?php dynamic_sidebar('contact-text'); ?>
		<?php endif; ?>
	</div>
</div>

<div class="info-icons row">
	<?php get_template_part('parts/info-icons'); ?>
</div>

<div class="row">
	<div class="large-12 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">


    			<div class="row">
    			    <div class="large-8 columns">
                        <?php the_content(); ?>    			        
    			    </div>
    				<div class="large-4 columns">
    					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
    				</div>
    			</div>

			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>