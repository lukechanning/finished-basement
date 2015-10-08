<?php
?>
<div class="home-middle row owl-carousel-properties owl-theme">
         
    <?php
    query_posts( array ( 'post_type' => 'listing', 'posts_per_page' => -1, 'order' => 'ASC' ) );
    	while (have_posts()) : the_post(); //Make sure there are posts to get
        
        	//Let's get the variables that we need
            $squarefeet = property_information_get_meta( 'property_information_squarefeet' );
        	$bedrooms = property_information_get_meta( 'property_information_bedrooms' );
        	$bathrooms = property_information_get_meta( 'property_information_bathrooms' );
        	$price = property_information_get_meta( 'property_information_price' );
    	
    	    //Author specific variables
    		$permalink = get_permalink();  //Get the permalink
    		$author = get_the_author(); //Snag the author permalink
    		$authID = get_the_author_id();
    		
            //Start the content via HTML
            ?>
            <div class="item">
                <article class="article-card">
                    
                    <?php the_post_thumbnail('medium'); ?>
                    
                    <div class="card-content">
                        
                        <div class="post-icon">
                            	<?php
	                        if ( userphoto_exists($authID) ) :
	                            userphoto_the_author_thumbnail();
                            else:
                                echo get_avatar($authID, "50px");
                            endif;
                            ?>
                        </div>
                       
                       <?php get_template_part('parts/info-icons'); ?>
                       
                        <p class="post-author">Agent <a href="<?php $author ?>"><?php the_author(); ?></a></p>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 125) ); ?></p>
                        <p>
                          <a href="<?php echo esc_url($permalink); ?>">Read on...</a> 
                        </p>
                    </div>
                    
                </article>
            </div>
            <?php
            //End the content via HTML
        endwhile;		
    ?>
      
</div>
    
