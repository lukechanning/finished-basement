<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
			//Let's define some variables
				//user specific stuff	
	    		$permalink = get_permalink();  //Get the permalink
	    		$author = get_the_author(); //Snag the author permalink
	    		$authID = get_the_author_id();
	    		
	    		//Location specific stuff
		    	$address = listing_address_get_meta( 'listing_address_property_address_in_full' );
		    	$postal = listing_address_get_meta( 'listing_address_postal_code' );
		    	$country = listing_address_get_meta( 'listing_address_property_country' );
		    	$find = array('/\s+/','/,/');
		    	$replace = array('+','%2C');
			    $searchString = strtolower( preg_replace($find, $replace, $address) );
			?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div id="address">
	<div class="address-bar row">
		<div class="large-8 columns">
			<i class="fa fa-map-marker fa-2x"></i> <a target="_blank" href="https://www.google.com/maps?&q=<?php echo $searchString ?>"><?php echo $address, " ", $postal, " ", $country; ?></a>
		</div>
		<?php if ( ! dynamic_sidebar('contact-text') ) : ?>
			<?php dynamic_sidebar('contact-text'); ?>
		<?php endif; ?>
	</div>
</div>

<div class="row">
	<div class="large-8 small-12 columns" role="main">
		
	<div class="info row">
		<div class="small-3 columns">
	        <div class="info-author">
				<?php
                if ( userphoto_exists($authID) ) :
                    userphoto_the_author_photo();
                else:
                    echo get_avatar($authID, "100px");
                endif;
                ?>
			</div>
		</div>
		<div class="small-9 columns">
	        <?php echo '<h4>listing agent<divider></divider></h4><h2 class="author">'. $author .'</h2>'; ?>
	        <?php get_template_part('parts/info-icons'); ?>
		</div>
	</div>

	<?php do_action( 'foundationpress_before_content' ); ?>
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			
			<div class="entry-content">
    			<div class="row">
    				<div class="large-12 large-centered featured columns">
    					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
    				</div>
    				<div class="row">
    					<h4 class="entry-header">Description</h4>
						<?php the_content(); ?>    			        
					</div>
    			</div>
			</div>
			
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php endwhile;?>
<?php get_footer(); ?>