<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Widget;

add_action( 'carbon_fields_register_fields', 'custom_meta_fields' );
function custom_meta_fields() {
    
    $basic_options_container = Container::make( 'theme_options', __( 'Theme Options' ) )
    ->set_icon('dashicons-admin-tools')
    ->set_page_menu_position( 3 )
    ->add_fields( array(
        Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
        Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
    ) );

    // Add first options page under 'Theme Options'

    Container::make( 'theme_options', __( 'Header Navigation' ) )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
            Field::make( 'text', 'header_calling_btn_text', __( 'Header Calling Button Text' ) ),
            Field::make( 'text', 'header_calling_btn_url', __( 'Calling Button Phone Number' ) ),
            Field::make( 'text', 'header_btn_text', __( 'Header Button Text' ) ),
            Field::make( 'text', 'header_btn_url', __( 'Header Button URL' ) )
        ) );

    // Add second options page under 'Theme Options'
    Container::make( 'theme_options', __( 'Social Links' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    ->add_fields( array(
        Field::make( 'text', 'facebook_link', __( 'Facebook Link' ) ),
        Field::make( 'text', 'instagram_link', __( 'Instagram Link' ) ),
        Field::make( 'text', 'linkedin_link', __( 'linkedin Link' ) ),
        Field::make( 'text', 'twitter_link', __( 'Twitter Link' ) ),
        Field::make( 'text', 'youtube_link', __( 'Youtube Link' ) )
    ) );  

    // Add third options page under 'Theme Options'

    Container::make( 'theme_options', __( 'Footer Buttons' ) )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
            Field::make( 'text', 'btn_one_text', __( 'Button one text' ) )->set_help_text("Leave empty if you don't want button."),
            Field::make( 'text', 'btn_one_url', __( 'Button one URL' ) ),
            Field::make( 'text', 'btn_two_text', __( 'Button two text' ) )->set_help_text("Leave empty if you don't want button."),
            Field::make( 'text', 'btn_two_url', __( 'Button two URL' ) ),
        ) );

    Container::make( 'theme_options', __( 'Footer' ) )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
            Field::make( 'text', 'copyright_msg', __( 'Copyright Message' ) ),
            Field::make( 'text', 'registration_info', __( 'Registration Info' ) ),
        ) );
    
    Container::make( 'theme_options', __( 'Secondary Footer' ) )
        ->set_page_parent( $basic_options_container ) // reference to a top level container
        ->add_fields( array(
            Field::make( 'image', 'footer_logo', __( 'Secondary logo' ) ),
            Field::make( 'text', 'text_beside_logo', __( 'Text beside logo' ) ),
            Field::make( 'text', 'privacy_url', __( 'Privacy Policy Page URL' ) ),
            Field::make( 'text', 'terms_url', __( 'Terms of Use Page URL' ) ),
            Field::make( 'text', 'tcs_url', __( 'T&Cs Page URL' ) ),
            Field::make( 'text', 'cookies_url', __( 'Cookies Page URL' ) ),
            Field::make( 'text', 'site_builder', __( 'Site Built by' ) ),
            Field::make( 'text', 'site_builder_url', __( 'Company / Individual Website Url' ) ),
        ) );    

}

?>