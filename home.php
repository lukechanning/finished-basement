<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="large-12 columns home-content" id="content" role="main">
	 
	 <?php
	 
	 //Fire off the slider
	 get_template_part( 'parts/hero-slider' );
	 //Fire off the middle
	 get_template_part( 'parts/home-middle' ); 
	 //Then get the CTA
	 get_template_part( 'parts/home-cta' ); 
	 
	 ?>
	    
	</div>
		
<?php get_footer(); ?>