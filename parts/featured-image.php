<?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		echo '<header id="featured-hero" role="banner" style="background-image: url(\'' . $image .  '\')">';
	else:	
		echo '<header id="featured-hero" role="banner" style="background-image: url(https://images.unsplash.com/photo-1416331108676-a22ccb276e35?q=80&fm=jpg&s=5a8395d0f502a4f63c1aaf8ae3fe0382)">';
	endif;
	?>
	 <h1 class="entry-title"><?php the_title(); ?></h1>
	</header>
