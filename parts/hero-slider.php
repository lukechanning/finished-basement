  <div class="owl-carousel owl-theme">
  	        <?php
  	        //Let's call up our query to pull posts in the "Featured" category
  	          query_posts( array ( 'category_name' => 'featured', 'posts_per_page' => -1, 'order' => 'ASC' ) );
	              //Make sure there are posts to get
	              while (have_posts()) : the_post();
	                //If it's got a thumbnail, let's get that custom photo
	                if (has_post_thumbnail( $post->ID ) ): ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <section class="hero item" style="background-image: url('<?php echo $image[0]; ?>')">
                        <?php else: ?>
                        <section class="hero item">
                    <?php endif; ?>
	                     <div class="row">
	                       <?php //Let's get the title side of the deal ?>
	                       <div class="large-6 large-push-2 columns">
                            <div class="circle-bg quote-1">
                              <h2><?php the_title(); ?></h3>
                            </div>
                          </div>
                         <?php //Time to get the other side with the content ?> 
                          <div class="large-6 large-pull-2 columns">
                            <div class="circle-bg quote-2">
                                <?php 
                                the_content();
                                ?>
                            </div>
                          </div>
                          
	                     </div>
	                  </section>
	                <?php
	              endwhile;
	              //Let's reset the query just in case
  	        wp_reset_query();
  	        ?>
          </div>