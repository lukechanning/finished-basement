<?php
/*
Template Name: Listing Wall
*/
get_header(); ?>

<?php get_template_part( 'parts/featured-image' ); ?>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
	    <div class="row sort-type">
	        <div class="large-8 columns">
	            <h3 class="sort-title">Change Options</h3>
	        </div>
	        <div class="large-4 columns">
        	   <?php
        	    $args = array( 'hide_empty' => 0 );
                $terms = get_terms( 'listing-status', $args );
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    $count = count( $terms );
                    $i = 0;
                    $term_list = '<ul class="sort-links">';
                    foreach ( $terms as $term ) {
                        $i++;
                    	$term_list .= '<li class="sort-link"><a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'foundationpress' ), $term->name ) . '">' . $term->name . '</a></li>';
                    	if ( $count != $i ) {
                            //$term_list .= ' &middot; ';
                        }
                        else {
                            $term_list .= '</ul>';
                        }
                    }
                    echo $term_list;
                }
        	    ?>
        	</div>
        </div>
        <div class="row">
        	<?php
        	// Pull in the Loop
        	query_posts( array ( 'post_type' => 'listing', 'posts_per_page' => -8, 'order' => 'ASC' ) );
        	while ( have_posts() ) : the_post();
        	//Let's get the variables that we need
                $squarefeet = property_information_get_meta( 'property_information_squarefeet' );
            	$bedrooms = property_information_get_meta( 'property_information_bedrooms' );
            	$bathrooms = property_information_get_meta( 'property_information_bathrooms' );
            	$price = property_information_get_meta( 'property_information_price' );
            	$permalink = get_permalink();  //Get the permalink
        	?>
            <div class="large-6 columns">
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <div class="row panel-body">
                        <div class="large-6 small-centered large-uncentered columns">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="large-6 small-centered large-uncentered columns">
                            <div class="entry-content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 50) ); ?></p>
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>" class="button">View Now</a>
                        </div>
                    </div>
                    <div class="row panel-footer">
                        <div class="small-12 large-12 columns">
                            <?php get_template_part('parts/info-icons'); ?>
                        </div>
                    </div>
        		</article>
            </div>
        	<?php endwhile; // End the loop ?>
        </div>

	</div>
</div>

<?php get_footer(); ?>
