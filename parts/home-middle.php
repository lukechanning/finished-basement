<?php
?>
<div class="home-middle row owl-carousel-properties owl-theme">
         
    <?php
    query_posts( array ( 'post_type' => 'listing', 'posts_per_page' => -1, 'order' => 'ASC' ) );
    	while (have_posts()) : the_post(); //Make sure there are posts to get
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
                            <?php echo get_avatar($authID, "50px"); ?>
                        </div>
                        <p class="post-author">By <a href="<?php $author ?>"><?php the_author(); ?></a></p>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) ); ?></p>
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
    
