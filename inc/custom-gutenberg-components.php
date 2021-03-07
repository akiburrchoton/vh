<?php 

// Carbon custom field initialize

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;


/* Style for custom blocks */


add_action( 'carbon_fields_register_fields', 'custom_gutenberg_components' );
function custom_gutenberg_components() {
	
    //  Hero Slider Block

	Block::make( __( 'Hero Carousel' ) )
	->add_fields( array(
		Field::make( 'complex', 'hero_slides', 'Slides' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'image', 'image', 'Image' )->set_help_text('Dimensions 1920x1195 px, file type: jpg'),
				Field::make( 'text', 'title', 'Title' ),
				Field::make( 'textarea', 'subtitle', 'Subtitle' ),
				Field::make( 'text', 'btn-title', 'Button Text' ),
				Field::make( 'text', 'btn-url', 'Button URL' ),				
			) ),
		))
		->set_icon( 'images-alt2' )
		->set_keywords( [ __( 'Banner hero sliders slider carousel'  ) ] )
		->set_description( __( 'This is hero carousel block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/hero' );            
		});
	
    
    
    //@end hero



    // Counter section

    
    Block::make( __( 'Counters' ) )
	->add_fields( array(
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#EB233D', '#45515C' ) ),
		Field::make( 'complex', 'counter_items', 'Counters' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'count', 'Count' ),
				Field::make( 'textarea', 'count_text', 'Text' ),
			) ),
		))
		->set_icon( 'insert' )
		->set_keywords( [ __( 'Counter key points carousel'  ) ] )
		->set_description( __( 'This is counter block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/counters' );            
		});


    // @end counter



    // 50-50 section

    
    Block::make( __( 'Fifty Fifty Parallax' ) )
	->add_fields( array(
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#ffffff', '#EB233D', '#45515C' ) ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'textarea', 'detail', 'Details' ),
		Field::make( 'complex', 'point_items', 'Points' )
			->set_layout( 'tabbed-vertical' )
			->add_fields( array(
                Field::make( 'image', 'point_icon', 'Icon' ),
				Field::make( 'text', 'point', 'Point' ),
		) ),
        Field::make( 'text', 'first_btn_text', 'First Button Text' ),
        Field::make( 'text', 'first_btn_url', 'Button URL' ),
        Field::make( 'text', 'sec_btn_txt', 'Second Button Text' ),
        Field::make( 'text', 'sec_btn_url', 'Button URL' ),
        Field::make( 'image', 'parallax_img_one', 'Parallax Image 1' ),
        Field::make( 'image', 'parallax_img_two', 'Parallax Image 2' )
        ) )
		->set_icon( 'image-flip-horizontal' )
		->set_keywords( [ __( 'Parallax fifty half'  ) ] )
		->set_description( __( 'This is fifty fifty parallax block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/fifty-fifty' );            
		});
 

    // @end 50-50 section


    // Benchmark section

    Block::make( __( 'Benchmark' ) )
	->add_fields( array(
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#F2F4F7', '#EB233D', '#45515C' ) ),
        Field::make( 'image', 'background_pattern', 'Background Image' ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'complex', 'benchmark_items', 'Points' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
                Field::make( 'color', 'card_bg_color', 'Card Background Color' )
                    ->set_palette( array( '#EB233D', '#FFAD1F', '#5BBE80' ) ),
                Field::make( 'text', 'card_title', 'Card Title' ),
                Field::make( 'textarea', 'card_desc', 'Card Description' ),
                Field::make( 'image', 'initial_image', 'Initial Image' ),
                Field::make( 'image', 'benchmark_image', 'Hover Image' ),
                Field::make( 'text', 'btn_text', 'Button Text' )->set_default_value('Read more'),
                Field::make( 'text', 'btn_url', 'Button URL' ),
		) ),
        ) )
		->set_icon( 'embed-generic' )
		->set_keywords( [ __( 'Benchmark'  ) ] )
		->set_description( __( 'This is benchmark block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/benchmark' );            
		});
 

    // @end benchmark section
    


    // Generic Banner block

    Block::make( __( 'Banner (Generic)' ) )
    
    ->add_fields( array(
        Field::make( 'image', 'image', 'Background Image' )->set_help_text("Dimensions 1920x843 px, file type: jpg"),
        Field::make( 'text', 'title', 'Title' )->set_default_value( "Title" )->set_help_text("Leave empty if you want only image"),
        Field::make( 'text', 'subtitle', 'Subtitle' )->set_help_text("Leave empty if you want only title"),
        Field::make( 'textarea', 'description', 'Description' )->set_help_text("Leave empty if you want only title and subtitle")
    ))
    ->set_icon( 'format-image' )
    ->set_keywords( [ __( 'Banner hero generic block custom'  ) ] )
    ->set_description( __( 'This is generic banner block.' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/banner' );            
    });

    //@end generic banner block


    // Half and Half Block

    Block::make( __( 'Image/Video with detail' ) )
    
    ->add_fields( array(
        Field::make( 'checkbox', 'half_slider', __( 'Make carousel?' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'image', 'bg_img', __( 'Background Image' ) )
            ->set_help_text('Dimensions 1920x1160 px, file type: jpg'),
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#030f15', '#000000' ) )->set_help_text('Ignore if background image is set'),
        Field::make( 'text', 'section_title', __( 'Section Title' ) ),
        /* Repeater for half and half section */
    ) )

        /* Repeater ends */
    ->set_icon( 'image-flip-horizontal' )
    ->set_keywords( [ __( 'Half and half custom block carousel image video detail'  ) ] )
    ->set_description( __( 'This is half and half block. Use "+" to add section' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/half-n-half' );            
    });

    //@end Half and Half block


    // Video Section

    Block::make( __( 'Video Section (Self Hosted)' ) )
    
    ->add_fields( array(
        Field::make( 'image', 'image', 'Background Image' )
            ->set_help_text('Dimensions 1920x843 px, file type: jpg'),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'text', 'subtitle', 'Subtitle' ),
        Field::make( 'file', 'video_file', 'Background Video' )
            ->set_help_text("File type: mp4"),
        Field::make( 'image', 'video_poster', 'Video Poster Image' )
            ->set_help_text('Dimensions 1110x600 px, file type: jpg'),
    ))
    ->set_icon( 'video-alt' )
    ->set_keywords( [ __( 'Video with text title block custom self hosted'  ) ] )
    ->set_description( __( 'This is self hosted video section with title and background. Video must be uploaded to media and the link of the video should be put in the "Video URL" field.' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/vh-video' );            
    });

    //@end Video Section




   
    // Call to action full width block

    Block::make( __( 'Call To Action' ) )
    
    ->add_fields( array(
        Field::make( 'image', 'bg_image', 'Background Image' ),
        Field::make( 'text', 'title', 'Title' )->set_default_value( "Need help with your vehicle?" ),
        Field::make( 'textarea', 'details', 'Subtitle' )->set_default_value( "We offer member support 24 hours a day, 365 days a year. Our members can rest assured knowing they’re in safe hands when they give us a ring. We aim to provide you with a high level of service at all times. " ),
        Field::make( 'text', 'btn_text', 'Button Text' )->set_default_value( "Get help and support" ),
        Field::make( 'text', 'btn_url', 'Button URL' )
            ->set_default_value( home_url()."/contact-us" )
            ->set_help_text("https://(example).com"),
            Field::make( 'color', 'btn_color', 'Button Color' )
            ->set_palette( array( '#EB233D', '#FFAD1F' ) )
    ))
    ->set_icon( 'arrow-right-alt' )
    ->set_keywords( [ __( 'Call to action block custom'  ) ] )
    ->set_description( __( 'This is call to action block.' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/call-to-action' );            
    });

    //@end call to action


    // Hero video block

    Block::make( __( 'Hero video' ) )
    
    ->add_fields( array(
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'textarea', 'subtitle', 'Subtitle' ),
        Field::make( 'text', 'btn_text', 'Button Text' ),
        Field::make( 'text', 'btn_url', 'Button URL' ),
        Field::make( 'file', 'video_file', 'Background Video' )
            ->set_help_text("choose *.mp4 file"),
        Field::make( 'image', 'poster', 'Fallback Image' )
            ->set_help_text("Choose a video fallback image. Dimensions 1920x1080 px, file type: jpg"),
        Field::make( 'file', 'video_file_mobile', 'Background Video for Mobile' )
            ->set_help_text("choose *.mp4 file for mobile"),
        Field::make( 'image', 'poster_mob', 'Fallback Image (Mobile)' )
            ->set_help_text("Choose a video fallback image. Dimensions 768x1080 px, file type: jpg"),
        Field::make( 'text', 'card_one_title', 'Card 1 Title' ),
        Field::make( 'textarea', 'card_one_sub', 'Card 1 Subtitle' ),
        Field::make( 'text', 'card_one_link', 'Card 1 Link' ),
        Field::make( 'text', 'card_two_title', 'Card 2 Title' ),
        Field::make( 'textarea', 'card_two_sub', 'Card 2 Subtitle' ),
        Field::make( 'text', 'card_two_link', 'Card 2 Link' ),
    ))
    ->set_icon( 'video-alt2' )
    ->set_keywords( [ __( 'Video Hero Custom VH Block'  ) ] )
    ->set_description( __( 'This is Hero video block. Only supported format *.mp4.' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/hero-video' );            
    });

    //@end video block



    // Accordion

    Block::make( __( 'Accordion' ) )
    
    ->add_fields( array(
       
        /* Repeater for accordion section */
        Field::make( 'checkbox', 'accor_dark_bg', __( 'Dark background' ) )
            ->set_option_value( 'yes' ),
        Field::make( 'complex', 'accordion', 'Accordion' )
        ->set_layout( 'tabbed-vertical' )
        ->add_fields( array(
            Field::make( 'text', 'title', 'Title' ),
            Field::make( 'textarea', 'description', 'Description' )
        ) )

        /* Repeater ends */
    ))
    ->set_icon( 'editor-ol-rtl' )
    ->set_keywords( [ __( 'Accordion repeater custom block'  ) ] )
    ->set_description( __( 'This is "Accordion" block. Use "+" to add more items' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/accordion' );            
    });

    //@end Accordion



    // Tabs

    Block::make( __( 'Tabs' ) )
    
    ->add_fields( array(
       
        /* Repeater for tabs section */

        Field::make( 'complex', 'tabs', 'Tabs' )
        ->set_layout( 'tabbed-horizontal' )
        ->add_fields( array(
            Field::make( 'text', 'title', 'Title' ),
            Field::make( 'textarea', 'description', 'Description' )
        ) )

        /* Repeater ends */
    ))
    ->set_icon( 'editor-insertmore' )
    ->set_keywords( [ __( 'Tabs repeater custom block'  ) ] )
    ->set_description( __( 'This is "Tabs" block. Use "+" to add more items' ) )
    ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
        setData($fields);
        get_template_part( 'components/tabs' );            
    });

    //@end Tabs


    // Key selling points section

    
    Block::make( __( 'Key Selling Points Parallax' ) )
	->add_fields( array(
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#ffffff', '#EB233D', '#45515C' ) ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'textarea', 'detail', 'Details' ),
		Field::make( 'complex', 'point_items', 'Points' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
                Field::make( 'image', 'point_icon', 'Icon' ),
                Field::make( 'text', 'point_title', 'Point Title' ),
                Field::make( 'textarea', 'point_desc', 'Point Description' ),
		) ),
        Field::make( 'image', 'parallax_img_one', 'Parallax Image 1' ),
        Field::make( 'image', 'parallax_img_two', 'Parallax Image 2' )
        ) )
		->set_icon( 'admin-network' )
		->set_keywords( [ __( 'Parallax fifty half Key selling points'  ) ] )
		->set_description( __( 'This is key selling points parallax block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/key-selling-points' );            
		});
 

    // @end key selling points section


    // National recovery section

    Block::make( __( 'National Recovery' ) )
	->add_fields( array(
        Field::make( 'color', 'background_color', 'Background Color' )
            ->set_palette( array( '#F2F4F7', '#EB233D', '#45515C' ) ),
        Field::make( 'image', 'background_pattern', 'Background Image' ),
        Field::make( 'text', 'title', 'Title' ),
        Field::make( 'textarea', 'details', 'Details' ),
        Field::make( 'complex', 'point_items', 'Points' )
            ->set_layout( 'tabbed-vertical' )
            ->add_fields( array(
                Field::make( 'textarea', 'point', 'Point' ),
            ) ),
        Field::make( 'textarea', 'hint', 'Hint' )
        ) )
		->set_icon( 'admin-site-alt3' )
		->set_keywords( [ __( 'Nation wide offer'  ) ] )
		->set_description( __( 'This is national recovery block. Use "+" icon to add multiple items.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/national-recovery' );            
		});
 

    // @end national recovery section



    // Custom button

    Block::make( __( 'Custom button' ) )
	->add_fields( array(
        Field::make( 'text', 'title', 'Button title' ),
        Field::make( 'text', 'url', 'Button url' ),
    ) )
		->set_icon( 'admin-site-alt3' )
		->set_keywords( [ __( 'button custom'  ) ] )
		->set_description( __( 'This is custom button block.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/custom-button' );            
		});
 

    // @end custom button


    // Trustpilot button

    Block::make( __( 'Trustpilot reviews' ) )
	->add_fields( array(
        Field::make( 'text', 'title', 'Button title' ),
        Field::make( 'text', 'url', 'Button url' ),
    ) )
		->set_icon( 'admin-site-alt3' )
		->set_keywords( [ __( 'button custom'  ) ] )
		->set_description( __( 'This is custom button block.' ) )
		->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
			setData($fields);
			get_template_part( 'components/trustpilot' );            
		});
 

    // @end custom button
}

?>


