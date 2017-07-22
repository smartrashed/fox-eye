<?php
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => esc_html__('FoxEye Option','fox-eye'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Fox Eye Option Panel <small>by CodexCoder</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
    'name'        => 'fy_general_settings',
    'title'       => esc_html__('Header Settings', 'fox-eye'),
    'icon'          => 'fa fa-cogs',
    'fields'      => array(
              
        array(
            'id'        => 'fy_site_logo',
            'type'      => 'image',
            'title'     => esc_html__('Fox Eye Logo :', 'fox-eye'),
            'add_title' => esc_html__('Add Logo', 'fox-eye'),
        ),
         array(
            'id'        => 'fy_time',
            'type'      => 'textarea',
            'title'     => esc_html__('Timing :', 'fox-eye'),
            'add_title' => esc_html__('Add Office Time', 'fox-eye'),
        ),
         array(
            'id'        => 'fy_contact',
            'type'      => 'textarea',
            'title'     => esc_html__('Contact Info :', 'fox-eye'),
            'add_title' => esc_html__('Add Contact Information', 'fox-eye'),
        ),
         array(
            'id'        => 'fy_address',
            'type'      => 'textarea',
            'title'     => esc_html__('Address Line :', 'fox-eye'),
            'add_title' => esc_html__('Add Address Line', 'fox-eye'),
        ),
        array(
            'id'              => 'fy_socials_icons',
            'type'            => 'group',
            'title'           => esc_html__('Social Profiles :', 'fox-eye'),
            'button_title'    => 'Add New',
            'accordion_title' => esc_html__('Add New Social Profile', 'fox-eye'),
            'fields'          => array(

                array(
                    'id'          => 'name',
                    'type'        => 'text',
                    'title'       => esc_html__('Name', 'fox-eye'),
                ),

                array(
                    'id'          => 'link',
                    'type'        => 'text',
                    'title'       => esc_html__('URL', 'fox-eye'),
                ),

                array(
                    'id'          => 'icon',
                    'type'        => 'icon',
                    'title'       => esc_html__('Icon', 'fox-eye'),
                ),

            ),
            
        ),
    ),
);
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS Section Sorter
// -----------------------------------------------------------------------------------------------

$options[] = array(
    'name' => 'fox_eye_sorter',
    'title' => esc_html__('One Page Settings', 'fox-eye'),
    'icon' => 'fa fa-home',
    // begin: fields
    'fields' => array(
        array(
            'type' => 'heading',
            'content' => 'One Page Layout',
        ),
        array(
            'type' => 'notice',
            'class' => 'info',
            'content' => esc_html__('Fox Eye Options allows you to enable, disable and re-arrange each section on your homepage. Simply use the drag-and-drop interface below to get the layout you need. Note that any section in the "Disabled" column will not be deleted, just removed from the layout. You can re-add them at any time', 'fox-eye'),
        ),
        array(
            'id' => 'fox_eye_sections_sorter',
            'type' => 'sorter',
            'title' => esc_html__('Edit Layout', 'fox-eye'),
            'default' => array(
                'enabled' => array(
                    'slider'         => esc_html__( 'Slider', 'fox-eye' ),
                    'about'     => esc_html__( 'About', 'fox-eye' ),
                    'history'        => esc_html__( 'History', 'fox-eye' ),
                    'counterup'      => esc_html__( 'Counter Up', 'fox-eye' ),
                    'latestworks'    => esc_html__( 'Latest Works', 'fox-eye' ),
                    'service'        => esc_html__( 'Service', 'fox-eye' ),
                    'video'          => esc_html__( 'Video', 'fox-eye' ),
                    'price'          => esc_html__( 'Pricing Table', 'fox-eye' ),
                    'team'           => esc_html__( 'Team', 'fox-eye' ),
                    'testimonial'    => esc_html__( 'Testimonial', 'fox-eye' ),
                    'blog'           => esc_html__( 'Blog', 'fox-eye' ),
                    'products'       => esc_html__( 'Products', 'fox-eye' ),
                    'newsletter'     => esc_html__( 'Newsletter', 'fox-eye' ),
                    'partners'       => esc_html__( 'Partners', 'fox-eye' ),
                    'contact'        => esc_html__( 'Contact', 'fox-eye' ),
                    'map'            => esc_html__( 'Map', 'fox-eye' ),
                ),
                'disabled' => array(
                ),
            ),
            'enabled_title'  => esc_html__( 'Active Sections', 'fox-eye' ),
            'disabled_title' => esc_html__( 'Deactive Sections', 'fox-eye' ),
        ),
    )
);


// ----------------------------------------
// Slider  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_slider_section',
    'title'       => esc_html__('Slider Section', 'fox-eye'),
    'icon'          => 'fa fa-sliders',
    'fields'      => array(
       array(
            'id'              => 'fy_slider_image',
            'type'            => 'group',
            'title'           => esc_html__('Slider Images :', 'fox-eye'),
            'button_title'    => 'Add New Image',
            'accordion_title' => esc_html__('Add New Slider Image', 'fox-eye'),
            'fields'          => array(

                array(
                    'id'          => 'slider_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Slider title', 'fox-eye'),
                ),

                array(
                    'id'          => 'slider_subtitle',
                    'type'        => 'text',
                    'title'       => esc_html__('Slider Sub Title', 'fox-eye'),
                ),
                array(
                    'id'          => 'slider_description',
                    'type'        => 'textarea',
                    'title'       => esc_html__('Slider Description', 'fox-eye'),
                ),

                array(
                    'id'          => 'slider_image',
                    'type'        => 'image',
                    'title'       => esc_html__('Slider Image', 'fox-eye'),
                ),

            ),
            
        ),

    ),
);
// ----------------------------------------
// About  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_about_section',
    'title'       => esc_html__('About Section', 'fox-eye'),
    'icon'          => 'fa fa-globe',
    'fields'      => array(
                            array(
                  'id'      => 'unique_option_3003',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#fff',
                  'rgba'    => true,
                ),


             array(
                'id'              => 'fy_about',
                'type'            => 'group',
                'title'           => esc_html__('About US :', 'fox-eye'),
                'button_title'    => 'Add New About Section',
                'accordion_title' => esc_html__('Add New About Section', 'fox-eye'),
                'fields'          => 
                array(

                    array(
                        'id'          => 'about_title',
                        'type'        => 'text',
                        'title'       => esc_html__('Section title', 'fox-eye'),
                    ),
                    array(
                        'id'          => 'about_description',
                        'type'        => 'textarea',
                        'title'       => esc_html__('Section Description', 'fox-eye'),
                    ),
                     array(
                        'id'          => 'about_image',
                        'type'        => 'image',
                        'title'       => esc_html__('Section Image', 'fox-eye'),
                    ),
                
                 ),
            
            ),

    ),
);

// ----------------------------------------
// History  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_history_section',
    'title'       => esc_html__('History Section', 'fox-eye'),
    'icon'          => 'fa fa-history',
    'fields'      => array(
        array(
                  'id'      => 'unique_option_3004',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),   
        array(
            'id'      => 'history_title',
            'type'    => 'text',
            'title'   => esc_html__('Section Title', 'fox-eye'),
            'desc'    => esc_html__('Add Company History Title', 'fox-eye'),
        ),
         array(
            'id'      => 'history_subtitle',
            'type'    => 'text',
            'title'   => esc_html__('Section Sub Title', 'fox-eye'),
            'desc'    => esc_html__('Add Company History Subtitle Title', 'fox-eye'),
        ),
          array(
            'id'      => 'history_description',
            'type'    => 'wysiwyg',
            'title'   => esc_html__('Section Sub Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Company Desctiption', 'fox-eye'),
        ),
          array(
            'id'      => 'history_readmore',
            'type'    => 'text',
            'title'   => esc_html__('Readmore Link', 'fox-eye'),
            'desc'    => esc_html__('Put Readmore Link Here', 'fox-eye'),
        ),
             array(
            'id'      => 'history_pricing',
            'type'    => 'text',
            'title'   => esc_html__('Pricing Page Link', 'fox-eye'),
            'desc'    => esc_html__('Put Price Page Here', 'fox-eye'),
        ),
            
             array(
            'id'              => 'history_category',
            'type'            => 'group',
            'title'           => esc_html__('Subject Category :', 'fox-eye'),
            'button_title'    => 'Add New Category || Progress Bar',
            'accordion_title' => esc_html__('Add New Category', 'fox-eye'),
            'fields'          => array(

                array(
                    'id'          => 'category_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Category Title', 'fox-eye'),
                ),

                array(
                    'id'          => 'category_progress',
                    'type'        => 'number',
                    'title'       => esc_html__('Progress Bar Percentage', 'fox-eye'),
                ),
                 array(
                  'id'       => 'progress_color',
                  'type'     => 'select',
                  'title'    => 'Select Progress Bar Color',
                  'options'  => array(
                    'danger'        => 'Red',
                    'success'   => 'Yellow',
                    'info' => 'Orange',
                    'warning' => 'Pink',
                  ),
                  'default'  => 'danger',
                ),
               

            ),
            
        ),

    ),
);


// ----------------------------------------
// Counter  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_counter_up',
    'title'       => esc_html__('Counter Up Section', 'fox-eye'),
    'icon'          => 'fa fa-bar-chart',
    'fields'      => array(
         array(
            'id'      => 'counter_section_bg',
            'type'    => 'image',
            'title'   => esc_html__('Section Background', 'fox-eye'),
            'desc'    => esc_html__('Add Video Background Image', 'fox-eye'),
        ),  
           array(
            'id'              => 'fy_counter',
            'type'            => 'group',
            'title'           => esc_html__('Counter Up :', 'fox-eye'),
            'button_title'    => 'Add New Counter Section',
            'accordion_title' => esc_html__('Add New Counter Up', 'fox-eye'),
            'fields'          => array(
                array(
                    'id'          => 'counter_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Section Title', 'fox-eye'),
                    'desc'       => esc_html__('EX: Happy Customer', 'fox-eye'),
                ),
                array(
                    'id'          => 'counter_count',
                    'type'        => 'text',
                    'title'       => esc_html__('Section Count', 'fox-eye'),
                    'desc'       => esc_html__('Ex:2500', 'fox-eye'),
                ),
                array(
                    'id'          => 'counter_image',
                    'type'        => 'image',
                    'title'       => esc_html__('Section Image', 'fox-eye'),
                ),

            ),
            
        ),
            
    ),
);


// ----------------------------------------
// Latest Works  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_latest_work',
    'title'       => esc_html__('Portfolio Section', 'fox-eye'),
    'icon'          => 'fa fa-picture-o',
    'fields'      => array(
         array(
                  'id'      => 'unique_option_3005',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#fff',
                  'rgba'    => true,
                ),  
        array(
            'id'      => 'fy_latest_works_title',
            'type'    => 'text',
            'title'   => esc_html__('Section Title', 'fox-eye'),
            'desc'    => esc_html__('Add latest works title', 'fox-eye'),
        ),
         array(
            'id'      => 'fy_latest_works_sub_title',
            'type'    => 'wysiwyg',
            'title'   => esc_html__('Section Sub Title', 'fox-eye'),
            'desc'    => esc_html__('Add latest works sub title', 'fox-eye'),
        ),

          array(
            'id'              => 'fy_latest',
            'type'            => 'group',
            'title'           => esc_html__('Latest Works :', 'fox-eye'),
            'button_title'    => 'Add New Latest Works',
            'accordion_title' => esc_html__('Add New Portfolio', 'fox-eye'),
            'fields'          => array(
                array(
                    'id'          => 'portfolio_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Image Title', 'fox-eye'),
                    
                ),
                array(
                    'id'          => 'portfolio_sub_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Project By', 'fox-eye'),
                    
                ),
                array(
                    'id'          => 'portfolio_image',
                    'type'        => 'image',
                    'title'       => esc_html__('Portfolio Image', 'fox-eye'),
                ),

            ),
          )  
        
    ),
);




// ----------------------------------------
// Service  Section           -
// ----------------------------------------


$options[]      = array(
    'name'        => 'fy_service_sction',
    'title'       => esc_html__('Service Section', 'fox-eye'),
    'icon'          => 'fa fa fa-cogs',
    'fields'      => array(
          array(
                  'id'      => 'unique_option_3006',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),
        
        array(
            'id'      => 'fy_service_title',
            'type'    => 'text',
            'title'   => esc_html__('Section Title', 'fox-eye'),
            'desc'    => esc_html__('Add service title', 'fox-eye'),
        ),
         array(
            'id'      => 'fy_service_sub_title',
            'type'    => 'wysiwyg',
            'title'   => esc_html__('Section Sub Title', 'fox-eye'),
            'desc'    => esc_html__('Add survice sub title', 'fox-eye'),
        ),

          array(
            'id'              => 'fy_services',
            'type'            => 'group',
            'title'           => esc_html__('Services :', 'fox-eye'),
            'button_title'    => 'Add New Service',
            'accordion_title' => esc_html__('Add New Service', 'fox-eye'),
            'fields'          => array(
                array(
                    'id'          => 'service_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Service Title', 'fox-eye'),
                    
                ),
                array(
                    'id'          => 'srvice_description',
                    'type'        => 'textarea',
                    'title'       => esc_html__('Service Description', 'fox-eye'),
                    
                ),
                array(
                    'id'          => 'service_image',
                    'type'        => 'image',
                    'title'       => esc_html__('Service Image', 'fox-eye'),
                ),

            ),
          )  
        
    ),
);



// ----------------------------------------
// Video  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_video_section',
    'title'       => esc_html__('video Section', 'fox-eye'),
    'icon'          => 'fa fa-video-camera',
    'fields'      => array(
          array(
            'id'      => 'section_bg',
            'type'    => 'image',
            'title'   => esc_html__('Section Background', 'fox-eye'),
            'desc'    => esc_html__('Add Video Background Image', 'fox-eye'),
        ),     
        array(
            'id'      => 'video_title',
            'type'    => 'text',
            'title'   => esc_html__('Video Title', 'fox-eye'),
        ),
         array(
            'id'      => 'video_thumb',
            'type'    => 'image',
            'title'   => esc_html__('Video Thumb Image', 'fox-eye'),
        ),
         array(
            'id'      => 'video_link',
            'type'    => 'text',
            'title'   => esc_html__('Video Link', 'fox-eye'),
        ),

    ),
);

// ----------------------------------------
//  Pricing  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_pricing_section',
    'title'       => esc_html__('Pricing Section', 'fox-eye'),
    'icon'          => 'fa fa-credit-card',
    'fields'      => array(
       
        array(
                  'id'      => 'unique_option_3007',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),     
        array(
            'id'      => 'fy_price_title',
            'type'    => 'text',
            'title'   => esc_html__('Priceing Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Pricing Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_price_description',
            'type'    => 'textarea',
            'title'   => esc_html__('Price Description', 'fox-eye'),
            
        ),
        array(
            'id'      => 'fy_price_post_limit',
            'type'    => 'text',
            'title'   => esc_html__('Price Post Limit', 'fox-eye'),
            
        ),

       

    ),
);

// ----------------------------------------
//  Team  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_team_section',
    'title'       => esc_html__('Team Section', 'fox-eye'),
    'icon'          => 'fa fa-users',
    'fields'      => array(
           
        array(
                  'id'      => 'unique_option_3008',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),     
        array(
            'id'      => 'fy_team_title',
            'type'    => 'text',
            'title'   => esc_html__('Team Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Team Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_team_description',
            'type'    => 'textarea',
            'title'   => esc_html__('Team Description', 'fox-eye'),
            
        ),
        array(
            'id'      => 'fy_team_post_limit',
            'type'    => 'text',
            'title'   => esc_html__('Team Post Limit', 'fox-eye'),
            
        ),

    ),
);

// ----------------------------------------
//  Testimonial  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_testimonial_section',
    'title'       => esc_html__('Testimonial Section', 'fox-eye'),
    'icon'          => 'fa fa-commenting',
    'fields'      => array(
           
         array(
                  'id'      => 'unique_option_3009',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),     
        array(
            'id'      => 'fy_testimonial_title',
            'type'    => 'text',
            'title'   => esc_html__('Team Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Team Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_testimonial_description',
            'type'    => 'wysiwyg',
            'title'   => esc_html__('Team Description', 'fox-eye'),
            
        ),
        array(
            'id'      => 'fy_testimonial_post_limit',
            'type'    => 'text',
            'title'   => esc_html__('Team Post Limit', 'fox-eye'),
            
        ),

    ),
);

// ----------------------------------------
//  Blog  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_blog_section',
    'title'       => esc_html__('Blog Section', 'fox-eye'),
    'icon'          => 'fa fa-th-large',
    'fields'      => array(
           
       array(
                  'id'      => 'unique_option_3010',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),     
        array(
            'id'      => 'fy_blog_title',
            'type'    => 'text',
            'title'   => esc_html__('Blog Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Blog Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_blog_description',
            'type'    => 'textarea',
            'title'   => esc_html__('Blog Description', 'fox-eye'),
            
        ),
        array(
            'id'      => 'fy_blog_post_limit',
            'type'    => 'text',
            'title'   => esc_html__('Blog Post Limit', 'fox-eye'),
            
        ),
        array(
            'id'      => 'fy_blog_more',
            'type'    => 'text',
            'title'   => esc_html__('More Blog Link', 'fox-eye'),
            
        ),

    ),
);

// ----------------------------------------
//  Shop  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_shop_section',
    'title'       => esc_html__('Shop Section', 'fox-eye'),
    'icon'          => 'fa fa-shopping-basket',
    'fields'      => array(
           
         array(
                  'id'      => 'unique_option_3110',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#FAFAFA',
                  'rgba'    => true,
                ),     
        array(
            'id'      => 'fy_shop_title',
            'type'    => 'text',
            'title'   => esc_html__('Shop Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Shop Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_shop_description',
            'type'    => 'textarea',
            'title'   => esc_html__('Shop Description', 'fox-eye'),
            
        ),array(
            'id'      => 'fy_product_limit',
            'type'    => 'text',
            'title'   => esc_html__('Product Limit Show', 'fox-eye'),
            
        ),

    ),
);

// ----------------------------------------
//  Newsletter  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_newsletter_section',
    'title'       => esc_html__('Newsletter Section', 'fox-eye'),
    'icon'          => 'fa fa-newspaper-o',
    'fields'      => array(
           
                    array(
                        'id'      => 'section_bg',
                        'type'    => 'image',
                        'title'   => esc_html__('Section Background', 'fox-eye'),
                        'desc'    => esc_html__('Add Newsletter Background Image', 'fox-eye'),
                    ),   

               array(
                    'id'      => 'fy_newsletter_title',
                    'type'    => 'text',
                    'title'   => esc_html__('Newsletter Title', 'fox-eye'),
                    'desc'    => esc_html__('Add Newsletter Title', 'fox-eye'),
                ),
                array(
                    'id'      => 'fy_newsletter_description',
                    'type'    => 'textarea',
                    'title'   => esc_html__('Newsletter Description', 'fox-eye'),
                ),


    ),
);

// ----------------------------------------
//  Partner  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_partners_section',
    'title'       => esc_html__('Partner Section', 'fox-eye'),
    'icon'          => 'fa fa-adjust',
    'fields'      => array(
           
                array(
                  'id'      => 'unique_option_3001',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#fff',
                  'rgba'    => true,
                ),

               array(
                    'id'      => 'fy_partner_title',
                    'type'    => 'text',
                    'title'   => esc_html__('Partner Title', 'fox-eye'),
                    'desc'    => esc_html__('Add Your Partner Info', 'fox-eye'),
                ),
                array(
                    'id'      => 'fy_partner_description',
                    'type'    => 'textarea',
                    'title'   => esc_html__('Partner Description', 'fox-eye'),
                ),


             array(
                'id'              => 'fy_partners',
                'type'            => 'group',
                'title'           => esc_html__('Partners :', 'fox-eye'),
                'button_title'    => 'Add New Partner',
                'accordion_title' => esc_html__('Add New Partner', 'fox-eye'),
                'fields'          => 
                array(

                     array(
                        'id'          => 'partner_image',
                        'type'        => 'image',
                        'title'       => esc_html__('Partner Image', 'fox-eye'),
                    ),
                
                 ),
            
            ),

    ),
);

// ----------------------------------------
//  Contact  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_contact_section',
    'title'       => esc_html__('Contact Section', 'fox-eye'),
    'icon'          => 'fa fa-phone',
    'fields'      => array(
           
                array(
                  'id'      => 'unique_option_3015',
                  'type'    => 'color_picker',
                  'title'   => 'Background Color',
                  'default' => '#fff',
                  'rgba'    => true,
                ),

               array(
                    'id'      => 'fy_contact_title',
                    'type'    => 'text',
                    'title'   => esc_html__('Contact Title', 'fox-eye'),
                    'desc'    => esc_html__('Add Your Contact Info', 'fox-eye'),
                ),
                array(
                    'id'      => 'fy_contact_description',
                    'type'    => 'textarea',
                    'title'   => esc_html__('Contact Description', 'fox-eye'),
                ), 
                array(
                    'id'      => 'fy_contact_page',
                    'type'    => 'wysiwyg',
                    'title'   => esc_html__('Contact from Short code', 'fox-eye'),
                ),


    ),
);

// ----------------------------------------
//  Map  Section           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_map_section',
    'title'       => esc_html__('Map Section', 'fox-eye'),
    'icon'          => 'fa fa-map-marker',
    'fields'      => array(
           
        array(
            'id'      => 'fox_eye_gmap_api',
            'type'    => 'text',
            'title'   => esc_html__('Map API', 'fox-eye'),
            'desc'    => esc_html__('Add Your Map API', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_map_title',
            'type'    => 'text',
            'title'   => esc_html__('Map Title', 'fox-eye'),
            'desc'    => esc_html__('Add Your Map Info', 'fox-eye'),
        ),
        array(
            'id'      => 'fy_map_icon',
            'type'    => 'image',
            'title'   => esc_html__('Map Icon', 'fox-eye'),
            'desc'    => esc_html__('Add Map Icon', 'fox-eye'),
        ),
         array(
            'id'      => 'fy_map_latitude',
            'type'    => 'text',
            'title'   => esc_html__('Map Latitude', 'fox-eye'),
            'desc'    => esc_html__('Put Latitude Info', 'fox-eye'),
        ),
          array(
            'id'      => 'fy_map_longitude',
            'type'    => 'text',
            'title'   => esc_html__('Map Longitude', 'fox-eye'),
            'desc'    => esc_html__('Put Longitude Info', 'fox-eye'),
        ),array(
            'id'      => 'fy_map_zoom',
            'type'    => 'text',
            'title'   => esc_html__('Map Zoom', 'fox-eye'),
            'desc'    => esc_html__('Put Zoom Info', 'fox-eye'),
        ),

    ),
);
// ----------------------------------------
// Footer sections           -
// ----------------------------------------

$options[]      = array(
    'name'        => 'fy_footer_settings',
    'title'       => esc_html__('Footer Settings', 'fox-eye'),
    'icon'          => 'fa fa-share-alt',
    'fields'      => array(
           
        array(
            'id'      => 'footer_info',
            'type'    => 'wysiwyg',
            'title'   => esc_html__('Footer Info', 'fox-eye'),
            'desc'    => esc_html__('Write your footer text.', 'fox-eye'),
        ),
        
       
         
         array(
            'id'              => 'fy_footer_socials_icons',
            'type'            => 'group',
            'title'           => esc_html__('Social Profiles :', 'fox-eye'),
            'button_title'    => 'Add New',
            'accordion_title' => esc_html__('Add New Profile', 'fox-eye'),
            'fields'          => array(

                array(
                    'id'          => 'name',
                    'type'        => 'text',
                    'title'       => esc_html__('Name', 'fox-eye'),
                ),

                array(
                    'id'          => 'link',
                    'type'        => 'text',
                    'title'       => esc_html__('URL', 'fox-eye'),
                ),

                array(
                    'id'          => 'icon',
                    'type'        => 'icon',
                    'title'       => esc_html__('Icon', 'fox-eye'),
                ),

            ),
           
        ),

    ),
);
CSFramework::instance( $settings, $options );
