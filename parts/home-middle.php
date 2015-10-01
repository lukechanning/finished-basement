<?php
?>
<div class="home-middle row owl-carousel-properties owl-theme">
         
        <div class="item">
        <article class="article-card">
          <img src="http://i.onionstatic.com/avclub/5199/85/16x9/960.jpg">
          <div class="card-content">
            <img class="post-icon" src="http://zurb.com/stickers/images/intro-foundation.png" alt="foundation icon">
            <p class="post-author">By <a href="#">Vincent Vega</a></p>
            <h4>Pulp Fiction brought guns, gimps, and glory to the Cannes Film Festival</h4>
            <p>If my answers frighten you then you should cease asking scary questions. Zed's dead, baby. Zed's dead. I love you, Pumpkin. I love you, Honey Bunny. All right, everybody be cool, this is a robbery!</p>
            <p>
              <a href="#">Read on...</a> 
            </p>
          </div>
        </article>
      </div>
      
      <div class="item">
        <article class="article-card">
          <img src="http://www.sonymoviechannel.com/sites/default/files/movies/images/syn__0055_snatch.jpg?1284493346">
          <div class="card-content">
            <img class="post-icon" src="http://zurb.com/stickers/images/intro-foundation.png" alt="foundation icon">
            <p class="post-author">By <a href="#">Brick Top</a></p>
            <h4>Santch. The best gangster movie of all time? I'll fight ya for it.</h4>
            <p>It's behind you Tyrone. Whenever you reverse, things come from behind you. Who took the jam outta your doughnut? Yes, London. You know: fish, chips, cup 'o tea, bad food, worse weather, Mary f-king Poppins... LONDON.</p>
            <p>
              <a href="#">Read on...</a> 
            </p>
          </div>
        </article>
      </div>
      
       <div class="item">
        <article class="article-card">
          <img src="http://www.sonymoviechannel.com/sites/default/files/movies/images/syn__0055_snatch.jpg?1284493346">
          <div class="card-content">
            <img class="post-icon" src="http://zurb.com/stickers/images/intro-foundation.png" alt="foundation icon">
            <p class="post-author">By <a href="#">Brick Top</a></p>
            <h4>Santch. The best gangster movie of all time? I'll fight ya for it.</h4>
            <p>It's behind you Tyrone. Whenever you reverse, things come from behind you. Who took the jam outta your doughnut? Yes, London. You know: fish, chips, cup 'o tea, bad food, worse weather, Mary f-king Poppins... LONDON.</p>
            <p>
              <a href="#">Read on...</a> 
            </p>
          </div>
        </article>
      </div>
      
       <div class="item">
        <article class="article-card">
          <img src="http://www.sonymoviechannel.com/sites/default/files/movies/images/syn__0055_snatch.jpg?1284493346">
          <div class="card-content">
            <img class="post-icon" src="http://zurb.com/stickers/images/intro-foundation.png" alt="foundation icon">
            <p class="post-author">By <a href="#">Brick Top</a></p>
            <h4>Santch. The best gangster movie of all time? I'll fight ya for it.</h4>
            <p>It's behind you Tyrone. Whenever you reverse, things come from behind you. Who took the jam outta your doughnut? Yes, London. You know: fish, chips, cup 'o tea, bad food, worse weather, Mary f-king Poppins... LONDON.</p>
            <p>
              <a href="#">Read on...</a> 
            </p>
          </div>
        </article>
      </div>
      
</div>
    
<?php
query_posts( array ( 'post_type' => 'listing', 'posts_per_page' => -1, 'order' => 'ASC' ) );
	while (have_posts()) : the_post(); //Make sure there are posts to get
		$permalink = get_permalink();  //Get the permalink
        ?>
        <h3><?php the_title(); ?></h3>
        <?php
    endwhile;		
?>