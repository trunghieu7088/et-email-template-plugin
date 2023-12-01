<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ET_Email_template_Settings',999,0 );
function ET_Email_template_Settings() {
    $image_guide=esc_url( plugins_url( 'assets/img/guide.png', dirname(__FILE__) ) );
    Container::make( 'theme_options', __( 'Email Template Settings', 'crb' ) )
    	 ->set_icon( 'dashicons-email')
    	 ->set_page_menu_title( 'Email Template Settings' )
    	 ->set_page_menu_position(4)
       ->add_tab( __( 'Social Information' ), array(
        Field::make( 'text', 'et_email_template_facebook_link', __( 'Facebook Link' ) )->set_default_value('https://facebook.com'),
        Field::make( 'text', 'et_email_template_youtube_link', __( 'Youtube Link' ) )->set_default_value('https://youtube.com'),
        Field::make( 'text', 'et_email_template_instagram_link', __( 'Instagram Link' ) )->set_default_value('https://instagram.com'),        
    ))
       ->add_tab( __( 'Change Text & Logo & Set Color' ), array(        
        Field::make( 'text', 'et_email_template_site_title', __( 'Site Title' ) )->set_default_value('VOIXOFFMASTER'),        
        Field::make( 'file', 'custom_site_logo', __( 'File' ) )->set_type( array( 'image' ) )->set_value_type( 'url' ),
        
        Field::make( 'text', 'et_email_template_headline_footer', __( 'Headline Footer' ) )->set_default_value('Follow Us on Social Media'),        
        Field::make( 'text', 'et_email_template_second_headline_footer', __( 'Second Headline Footer' ) )->set_default_value('Connect with us on Facebook, Instagram, and YouTube for more updates!'),      
       
        Field::make( 'color', 'et_email_header_background_color', 'Email header background color' )->set_default_value('#00b3ff')->set_width(50),        
        Field::make( 'color', 'et_email_header_text_color', 'Email header text color' )->set_default_value('#ffffff')->set_width(50),        

        Field::make( 'color', 'et_email_content_background_color', 'Email content background color' )->set_default_value('#ffffff')->set_width(30),        
        Field::make( 'color', 'et_email_text_color', 'Email text color' )->set_default_value('#1f1f21')->set_width(30),        
        Field::make( 'color', 'et_email_link_color', 'Email link color' )->set_default_value('#00b3ff')->set_width(30),  

        Field::make( 'color', 'et_email_footer_background_color', 'Email footer background color' )->set_default_value('#00b3ff')->set_width(30),        
        Field::make( 'color', 'et_email_footer_text_color', 'Email footer text color' )->set_default_value('#ffffff')->set_width(30),        
        Field::make( 'color', 'et_email_footer_link_color', 'Email footer link color' )->set_default_value('#ffffff')->set_width(30),        


    ));

      


        
}

add_action( 'after_setup_theme', 'custom_email_crb_load',999,0 );
function custom_email_crb_load() {    
    if ( ! function_exists( 'carbon_get_post_meta' ) ) {
    require_once ET_EMAIL_TEMPLATE_PATH . '/includes/carbon/carbonvendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
    }
}
