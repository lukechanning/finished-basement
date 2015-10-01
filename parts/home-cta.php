<?php
	if( get_theme_mod( 'basement_cta-bg') ) :
		$bg = get_theme_mod('basement_cta-bg');
		echo '<section class="home-cta row" style="background-image: url(\'' . $bg .  '\')">';
	else:	
		echo '<section class="home-cta row" style="background-image: url(https://images.unsplash.com/photo-1425363352475-960422935a30?q=80&fm=jpg&s=ef0c859e8f303ead0f39cb526688aee0)">';
	endif;
?>
    <div class="large-4 hide-for-medium-only hide-for-small-only columns ">
        <?php
        if( get_theme_mod('basement_cta') ) :
            $image = esc_url( get_theme_mod( 'basement_cta' ) );
            echo '<img src="' . $image .  '">';
        else:
            echo '<img src="';
            echo bloginfo("stylesheet_directory");
            echo '/assets/images/agent.png" />';
        endif;
        ?>
    </div>
    <?php
        if ( is_active_sidebar('home-cta') ):
            dynamic_sidebar('home-cta');
        else:
            ?>
            <div class="large-8 columns excerpt">
                <h2>The Best Around</h2>
                <p>Migas cray gluten-free, photo booth Brooklyn cronut keffiyeh. Synth lo-fi Kickstarter art party, scenester hoodie heirloom brunch health goth lumbersexual YOLO photo booth fixie raw denim. Tilde lo-fi Vice bicycle rights shabby chic literally, Kickstarter four dollar toast cronut chambray. Actually wayfarers banh mi flannel meditation.</p>
                </div>
            </div>
            <?php
        endif;
    ?>
    
</section>