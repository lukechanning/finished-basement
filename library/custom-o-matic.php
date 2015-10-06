<?php

//A. Add Our custom areas for basement

    function basement_customize_register( $wp_customize ) {
        //Add Custom Logo
        $wp_customize->add_section( 'basement_logo_section' , array(
            'title'       => __( 'Basement Logo', 'foundation' ),
            'priority'   => 30,
            'description' => 'Upload a logo to replace the default basement name and description in the header',
        ) );
        $wp_customize->add_setting( 'basement_logo' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'basement_logo', array(
            'label'   => __( 'Logo', 'foundation' ),
            'section' => 'basement_logo_section',
            'settings' => 'basement_logo',
        ) ) );
        
        //Add Home CTA Image
        $wp_customize->add_section( 'basement_cta_section' , array(
            'title'       => __( 'Basement CTA', 'foundation' ),
            'priority'   => 40,
            'description' => 'Upload a call-to-action hero photo to replace the default on the homepage',
        ) );
        $wp_customize->add_setting( 'basement_cta' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'basement_cta', array(
            'label'   => __( 'CTA', 'foundation' ),
            'section' => 'basement_cta_section',
            'settings' => 'basement_cta',
        ) ) );
        
        //Add Home CTA Background Image
        $wp_customize->add_section( 'basement_cta-bg_section' , array(
            'title'       => __( 'Basement CTA Background', 'foundation' ),
            'priority'   => 40,
            'description' => 'Upload an image to use as the call-to-action section background',
        ) );
        $wp_customize->add_setting( 'basement_cta-bg' );
        $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize, 'basement_cta-bg', array(
            'label'   => __( 'CTA BG', 'foundation' ),
            'section' => 'basement_cta-bg_section',
            'settings' => 'basement_cta-bg',
        ) ) );
        
    }
    add_action( 'customize_register', 'basement_customize_register' );

//B. Let's add our custom post type for listings

    // Register Custom Post Type
    function basement_listing_post() {
    
    	$labels = array(
    		'name'                => _x( 'Listings', 'Post Type General Name', 'text_domain' ),
    		'singular_name'       => _x( 'Listing', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'           => __( 'Listing', 'text_domain' ),
    		'name_admin_bar'      => __( 'Listings', 'text_domain' ),
    		'parent_item_colon'   => __( 'Parent Listing:', 'text_domain' ),
    		'all_items'           => __( 'All Listings', 'text_domain' ),
    		'add_new_item'        => __( 'Add New Listing', 'text_domain' ),
    		'add_new'             => __( 'Add New', 'text_domain' ),
    		'new_item'            => __( 'New Listing', 'text_domain' ),
    		'edit_item'           => __( 'Edit Listing', 'text_domain' ),
    		'update_item'         => __( 'Update Listing', 'text_domain' ),
    		'view_item'           => __( 'View Listing', 'text_domain' ),
    		'search_items'        => __( 'Search Listing', 'text_domain' ),
    		'not_found'           => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    	);
    	$args = array(
    		'label'               => __( 'Listing', 'text_domain' ),
    		'description'         => __( 'Listing posts used to display homes and properties', 'text_domain' ),
    		'labels'              => $labels,
    		'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
    		'taxonomies'          => array( 'category', 'location' ),
    		'hierarchical'        => false,
    		'public'              => true,
    		'show_ui'             => true,
    		'show_in_menu'        => true,
    		'menu_position'       => 5,
    		'menu_icon'           => 'dashicons-admin-multisite',
    		'show_in_admin_bar'   => true,
    		'show_in_nav_menus'   => true,
    		'can_export'          => true,
    		'has_archive'         => true,		
    		'exclude_from_search' => false,
    		'publicly_queryable'  => true,
    		'capability_type'     => 'page',
    	);
    	register_post_type( 'listing', $args );
    
    }
    add_action( 'init', 'basement_listing_post', 0 );
    
    //Add Location taxonomy tied to our listing post type
    
   // Register Custom Taxonomy
    function basement_location() {
    
    	$labels = array(
    		'name'                       => _x( 'Locations', 'Taxonomy General Name', 'text_domain' ),
    		'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'text_domain' ),
    		'menu_name'                  => __( 'Locations', 'text_domain' ),
    		'all_items'                  => __( 'All Locations', 'text_domain' ),
    		'parent_item'                => __( 'Parent Location', 'text_domain' ),
    		'parent_item_colon'          => __( 'Parent Location:', 'text_domain' ),
    		'new_item_name'              => __( 'New Location', 'text_domain' ),
    		'add_new_item'               => __( 'Add Location', 'text_domain' ),
    		'edit_item'                  => __( 'Edit Location', 'text_domain' ),
    		'update_item'                => __( 'Update Location', 'text_domain' ),
    		'view_item'                  => __( 'View Location', 'text_domain' ),
    		'separate_items_with_commas' => __( 'Separate location with commas', 'text_domain' ),
    		'add_or_remove_items'        => __( 'Add or remove locations', 'text_domain' ),
    		'choose_from_most_used'      => __( 'Choose from most used locations', 'text_domain' ),
    		'popular_items'              => __( 'Popular Locations', 'text_domain' ),
    		'search_items'               => __( 'Search Locations', 'text_domain' ),
    		'not_found'                  => __( 'Not Found', 'text_domain' ),
    	);
    	$args = array(
    		'labels'                     => $labels,
    		'hierarchical'               => true,
    		'public'                     => true,
    		'show_ui'                    => true,
    		'show_admin_column'          => true,
    		'show_in_nav_menus'          => true,
    		'show_tagcloud'              => true,
    	);
    	register_taxonomy( 'location', array( 'listing' ), $args );
    
    }
    add_action( 'init', 'basement_location', 0 );
    
//Now let's add our custom meta boxes
    
    function property_information_get_meta( $value ) {
    	global $post;
    
    	$field = get_post_meta( $post->ID, $value, true );
    	if ( ! empty( $field ) ) {
    		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
    	} else {
    		return false;
    	}
    }
    
    function property_information_add_meta_box() {
    	add_meta_box(
    		'property_information-property-information',
    		__( 'Property Information', 'property_information' ),
    		'property_information_html',
    		'listing',
    		'normal',
    		'high'
    	);
    }
    add_action( 'add_meta_boxes', 'property_information_add_meta_box' );
    
    function property_information_html( $post) {
    	wp_nonce_field( '_property_information_nonce', 'property_information_nonce' ); ?>
    
    	<p>Additional information related to the property</p>
    
    	<p>
    		<label for="property_information_squarefeet"><?php _e( 'Squarefeet', 'property_information' ); ?></label><br>
    		<input type="text" name="property_information_squarefeet" id="property_information_squarefeet" value="<?php echo property_information_get_meta( 'property_information_squarefeet' ); ?>">
    	</p>
    	<p>
    		<label for="property_information_bedrooms"><?php _e( 'Bedrooms', 'property_information' ); ?></label><br>
    		<input type="text" name="property_information_bedrooms" id="property_information_bedrooms" value="<?php echo property_information_get_meta( 'property_information_bedrooms' ); ?>">
    	</p>
    	<p>
    		<label for="property_information_bathrooms"><?php _e( 'Bathrooms', 'property_information' ); ?></label><br>
    		<input type="text" name="property_information_bathrooms" id="property_information_bathrooms" value="<?php echo property_information_get_meta( 'property_information_bathrooms' ); ?>">
    	</p>
    	<p>
    		<label for="property_information_price"><?php _e( 'Price', 'property_information' ); ?></label><br>
    		<input type="text" name="property_information_price" id="property_information_price" value="<?php echo property_information_get_meta( 'property_information_price' ); ?>">
    	</p>
    	<p>
    		<label for="property_information_more_info"><?php _e( 'More Info', 'property_information' ); ?></label><br>
    		<textarea name="property_information_more_info" id="property_information_more_info" ><?php echo property_information_get_meta( 'property_information_more_info' ); ?></textarea>
    	
    	</p><?php
    }
    
    function property_information_save( $post_id ) {
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    	if ( ! isset( $_POST['property_information_nonce'] ) || ! wp_verify_nonce( $_POST['property_information_nonce'], '_property_information_nonce' ) ) return;
    	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    
    	if ( isset( $_POST['property_information_squarefeet'] ) )
    		update_post_meta( $post_id, 'property_information_squarefeet', esc_attr( $_POST['property_information_squarefeet'] ) );
    	if ( isset( $_POST['property_information_bedrooms'] ) )
    		update_post_meta( $post_id, 'property_information_bedrooms', esc_attr( $_POST['property_information_bedrooms'] ) );
    	if ( isset( $_POST['property_information_bathrooms'] ) )
    		update_post_meta( $post_id, 'property_information_bathrooms', esc_attr( $_POST['property_information_bathrooms'] ) );
    	if ( isset( $_POST['property_information_price'] ) )
    		update_post_meta( $post_id, 'property_information_price', esc_attr( $_POST['property_information_price'] ) );
    	if ( isset( $_POST['property_information_more_info'] ) )
    		update_post_meta( $post_id, 'property_information_more_info', esc_attr( $_POST['property_information_more_info'] ) );
    }
    add_action( 'save_post', 'property_information_save' );
    
    /*
    	Usage: property_information_get_meta( 'property_information_squarefeet' )
    	Usage: property_information_get_meta( 'property_information_bedrooms' )
    	Usage: property_information_get_meta( 'property_information_bathrooms' )
    	Usage: property_information_get_meta( 'property_information_price' )
    	Usage: property_information_get_meta( 'property_information_more_info' )
    */
    
    //Let's generate some rudimentary location data that we'll use to pull Google data
    
    function listing_address_get_meta( $value ) {
    	global $post;
    
    	$field = get_post_meta( $post->ID, $value, true );
    	if ( ! empty( $field ) ) {
    		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
    	} else {
    		return false;
    	}
    }
    
    function listing_address_add_meta_box() {
    	add_meta_box(
    		'listing_address-listing-address',
    		__( 'Listing Address', 'listing_address' ),
    		'listing_address_html',
    		'listing',
    		'normal',
    		'high'
    	);
    }
    add_action( 'add_meta_boxes', 'listing_address_add_meta_box' );
    
    function listing_address_html( $post) {
    	wp_nonce_field( '_listing_address_nonce', 'listing_address_nonce' ); ?>
    
    	<p>Add some location information here for the listing to appear within the theme.</p>
    
    	<p>
    		<label for="listing_address_property_address_in_full"><?php _e( 'Property Address in Full', 'listing_address' ); ?></label><br>
    		<textarea name="listing_address_property_address_in_full" id="listing_address_property_address_in_full" ><?php echo listing_address_get_meta( 'listing_address_property_address_in_full' ); ?></textarea>
    	
    	</p>	<p>
    		<label for="listing_address_postal_code"><?php _e( 'Postal Code', 'listing_address' ); ?></label><br>
    		<input type="text" name="listing_address_postal_code" id="listing_address_postal_code" value="<?php echo listing_address_get_meta( 'listing_address_postal_code' ); ?>">
    	</p>	<p>
    		<label for="listing_address_property_country"><?php _e( 'Property Country', 'listing_address' ); ?></label><br>
    		<input type="text" name="listing_address_property_country" id="listing_address_property_country" value="<?php echo listing_address_get_meta( 'listing_address_property_country' ); ?>">
    	</p><?php
    }
    
    function listing_address_save( $post_id ) {
    	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    	if ( ! isset( $_POST['listing_address_nonce'] ) || ! wp_verify_nonce( $_POST['listing_address_nonce'], '_listing_address_nonce' ) ) return;
    	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
    
    	if ( isset( $_POST['listing_address_property_address_in_full'] ) )
    		update_post_meta( $post_id, 'listing_address_property_address_in_full', esc_attr( $_POST['listing_address_property_address_in_full'] ) );
    	if ( isset( $_POST['listing_address_postal_code'] ) )
    		update_post_meta( $post_id, 'listing_address_postal_code', esc_attr( $_POST['listing_address_postal_code'] ) );
    	if ( isset( $_POST['listing_address_property_country'] ) )
    		update_post_meta( $post_id, 'listing_address_property_country', esc_attr( $_POST['listing_address_property_country'] ) );
    }
    add_action( 'save_post', 'listing_address_save' );
    
    /*
    	Usage: listing_address_get_meta( 'listing_address_property_address_in_full' )
    	Usage: listing_address_get_meta( 'listing_address_postal_code' )
    	Usage: listing_address_get_meta( 'listing_address_property_country' )
    */



?>