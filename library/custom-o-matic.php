<?php
//Add Our custom areas for basement

function basement_customize_register( $wp_customize ) {
    //Add Custom Header
    $wp_customize->add_section( 'basement_logo_section' , array(
        'title'       => __( 'basement Logo', 'foundation' ),
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
}
add_action( 'customize_register', 'basement_customize_register' );
?>