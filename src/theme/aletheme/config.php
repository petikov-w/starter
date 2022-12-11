<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function ale_get_options() {

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll',
        'background-size'=>'cover'
    );

    // to do 
    $archive_sidebar = array(
        'no' => esc_html__('No Sideabar','alekids'),
        'left_third' => esc_html__('1/3 Left','alekids'),
        'left_fourth' => esc_html__('1/4 Left','alekids'),
        'right_third' => esc_html__('1/3 Right','alekids'),
        'right_fourth' => esc_html__('1/4 Right','alekids')
    );
   
    $archive_columns = array(
        '1' => esc_html__('One Column','alekids'),
        '2' => esc_html__('Two Columns','alekids'),
        '3' => esc_html__('Three Columns','alekids'),
        '4' => esc_html__('Four Columns','alekids')
    );


	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();

    $options[] = array("name" => esc_html__("Brand","alekids"),
                        "tab" => "ale-brand",
                        "type" => "heading",
                        "icon" => "fa-desktop"); 

    $options[] = array( "name" => esc_html__("Site Logo","alekids"),
                        "desc" => esc_html__("Upload or put the site logo link.","alekids"),
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Site Logo Retina","alekids"),
                        "desc" => esc_html__("Upload or put the site logo link for retina devices. 2X.","alekids"),
                        "id" => "ale_sitelogoretina",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Footer Logo","alekids"),
                        "desc" => esc_html__("Upload or put the footer logo link.","alekids"),
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload",
                    );

    $options[] = array( "name" => esc_html__("Footer Logo Retina","alekids"),
                        "desc" => esc_html__("Upload or put the footer logo link for retina devices. 2X.","alekids"),
                        "id" => "ale_footerlogoretina",
                        "std" => "",
                        "type" => "upload");
		
	$options[] = array("name" => esc_html__("Style","alekids"),
                        "tab" => "ale-style",
						"type" => "heading",
                        "icon" => "fa-window-restore");

    $options[] = array( 'name' => esc_html__("Manage Background","alekids"),
                        'desc' => esc_html__("Select the background color, or upload a custom background image. Default background is the #f5f5f5 color","alekids"),
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => esc_html__("Site Pre Loader","alekids"),
                        "desc" => esc_html__("Enable or Disable the site preloader","alekids"),
                        "id" => "ale_preloder",
                        "std" => "disable",
                        "type" => "select",
                        "options" => array(
                            'disable' => esc_html__('Disable','alekids'),
                            'enable' => esc_html__('Enable','alekids')
                        ));


    

    $options[] = array("name" => esc_html__("Footer Options","alekids"),
                        "tab" => "ale-footer-settings",
                        "type" => "heading",
                        "icon" => "fa-copyright");

    $options[] = array( "name" => esc_html__("Footer Info","alekids"),
                        "desc" => esc_html__("Insert the footer info text","alekids"),
                        "id" => "ale_footer_info",
                        "std" => "",
                        "type" => "editor",
                    );

    $options[] = array( "name" => esc_html__("Openning Hours Title","alekids"),
                        "desc" => esc_html__("Specify the title","alekids"),
                        "id" => "ale_footer_openning_title",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Openning Hours","alekids"),
                        "desc" => esc_html__("Insert the text","alekids"),
                        "id" => "ale_footer_openning_info",
                        "std" => "",
                        "type" => "editor",
                    );

    $options[] = array( "name" => esc_html__("Navigation Title","alekids"),
                        "desc" => esc_html__("Specify the title","alekids"),
                        "id" => "ale_footer_navigation_title",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Contacts Title","alekids"),
                        "desc" => esc_html__("Specify the title","alekids"),
                        "id" => "ale_footer_contacts_title",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Address","alekids"),
                        "desc" => esc_html__("Specify the address","alekids"),
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text",
                        );
                        
    $options[] = array( "name" => esc_html__("Phone 1","alekids"),
                        "desc" => esc_html__("Specify the phone","alekids"),
                        "id" => "ale_footer_phone1",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Phone 2","alekids"),
                        "desc" => esc_html__("Specify the phone","alekids"),
                        "id" => "ale_footer_phone2",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Email","alekids"),
                        "desc" => esc_html__("Specify the email","alekids"),
                        "id" => "ale_footer_email",
                        "std" => "",
                        "type" => "text",
                        );


    $options[] = array( "name" => esc_html__("Copyrights","alekids"),
                        "desc" => esc_html__("Insert the Copyrights text","alekids"),
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor",
                    );

    

    $options[] = array( "name" => esc_html__("Typography","alekids"),
                        "tab" => "ale-typography",
                        "type" => "heading",
                        "icon" => "fa-font");

    $options[] = array( "name" => esc_html__("Select the First Font from Google Library","alekids"),
                        "desc" => esc_html__("The default Font is - Nunito","alekids"),
                        "id" => "ale_font_one",
                        "std" => "Nunito",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the First Font Properties from Google Library","alekids"),
                        "desc" => esc_html__("The default Font (extended) is - 700,900","alekids"),
                        "id" => "ale_font_one_ex",
                        "std" => "400;700;900",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Select the Second Font from Google Library","alekids"),
                        "desc" => esc_html__("The default Font is - Playfair Display","alekids"),
                        "id" => "ale_font_two",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the Second Font Properties from Google Library","alekids"),
                        "desc" => esc_html__("The default Font (extended) is - 400","alekids"),
                        "id" => "ale_font_two_ex",
                        "std" => "400;700;900",
                        "type" => "text",
                        );


    $options[] = array( 'name' => esc_html__("H1 Style","alekids"),
                        'desc' => esc_html__("Change the h1 style","alekids"),
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H2 Style","alekids"),
                        'desc' => esc_html__("Change the h2 style","alekids"),
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '28px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H3 Style","alekids"),
                        'desc' => esc_html__("Change the h3 style","alekids"),
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '24px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H4 Style","alekids"),
                        'desc' => esc_html__("Change the h4 style","alekids"),
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '20px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H5 Style","alekids"),
                        'desc' => esc_html__("Change the h5 style","alekids"),
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '16px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H6 Style","alekids"),
                        'desc' => esc_html__("Change the h6 style","alekids"),
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '14px','face' => 'Nunito','style' => 'normal','transform'=>'none', 'weight'=>'900','lineheight'=>'normal','color' => '#304566'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("Body Style","alekids"),
                        'desc' => esc_html__("Change the body font style","alekids"),
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '18px','face' => 'Roboto','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'28px','color' => '#7D7D7D'),
                        'type' => 'typography');

	$options[] = array( "name" => esc_html__("Social Profiles & Share","alekids"),
                        "tab" => "ale-social-profile",
						"type" => "heading",
                        "icon" => "fa-address-book");

    $options[] = array( "name" => esc_html__("Twitter","alekids"),
                        "desc" => esc_html__("Your twitter profile URL.","alekids"),
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook","alekids"),
						"desc" => esc_html__("Your facebook profile URL.","alekids"),
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => esc_html__("Youtube","alekids"),
                        "desc" => esc_html__("Your youtube profile URL.","alekids"),
                        "id" => "ale_you",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("LinkedIn","alekids"),
                        "desc" => esc_html__("Your LinkedIn profile URL.","alekids"),
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("Pinterest","alekids"),
                        "desc" => esc_html__("Your Pinterest profile URL.","alekids"),
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text"
                    );


    $options[] = array( "name" => esc_html__("Tumblr","alekids"),
                        "desc" => esc_html__("Your Tumblr profile URL.","alekids"),
                        "id" => "ale_tum",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("Instagram","alekids"),
                        "desc" => esc_html__("Your Instagram profile URL.","alekids"),
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Reddit","alekids"),
                        "desc" => esc_html__("Your Reddit profile URL.","alekids"),
                        "id" => "ale_red",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );

    $options[] = array( "name" => esc_html__("VK","alekids"),
                        "desc" => esc_html__("Your VK profile URL.","alekids"),
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text",
                        "hidefor" => array("ale_design_variant", array('bebe'))
                    );


    $options[] = array("name" => esc_html__("Gallery Settings","alekids"),
                        "tab" => "ale-gallery-settings",
                       "type" => "heading",
                       );

    $options[] = array( "name" => esc_html__("Posts Count","alekids"),
                        "desc" => esc_html__("Specify posts per page count","alekids"),
                        "id" => "ale_gallery_count",
                        "std" => "4",
                        "type" => "text"
                   );
    
    $options[] = array( "name" => esc_html__("WooCommerce Settings","alekids"),
                        "tab" => "ale-woocommerce-settings",
                        "type" => "heading",
                        "icon" => "fa-newspaper-o");

    $options[] = array( "name" => esc_html__("Columns Count","alekids"),
                        "desc" => esc_html__("Select the columns count for WooCommerce pages","alekids"),
                        "id" => "ale_woo_columns",
                        "std" => "3",
                        "type" => "select",
                        "options" => $archive_columns);

    $options[] = array( "name" => esc_html__("Products per page","alekids"),
                        "desc" => esc_html__("Specify the products per page count. by default it is 8","alekids"),
                        "id" => "ale_products_per_page",
                        "std" => "9",
                        "type" => "text");

	return $options;
}




/**
 * Get image sizes for images
 * 
 * @return array
 */
function ale_get_images_sizes() {
	return array(

        'post' => array(
            array(
                'name'      => 'post-smallimage',
                'width'     => 380,
                'height'    => 300,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-bigimage',
                'width'     => 780,
                'height'    => 300,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-featured',
                'width'     => 1180,
                'height'    => 700,
                'crop'      => true,
            ),
            
        ),

        'gallery' => array(
            array(
                'name'      => 'gallery-square',
                'width'     => 495,
                'height'    => 500,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-slider',
                'width'     => 780,
                'height'    => 480,
                'crop'      => true,
            ),
            
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function ale_get_post_formats() {
	return array('gallery','link','quote','video','audio');
}


/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function ale_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function ale_media_custom_fields() {
	return array();
}