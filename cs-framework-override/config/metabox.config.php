<?php
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();



// -----------------------------------------
// Pricing Table Metabox Options           -
// -----------------------------------------
$options[]    = array(
  'id'        => '_fy_custom_pricing_table_options',
  'title'     => esc_html__('Package Options', 'fox-eye'),
  'post_type' => 'pricing_table',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'pricing_rate',
            'type'        => 'text',
            'title'       => esc_html__('Package Rate', 'fox-eye'),
        ),        
        array(
            'id'              => 'offers',
            'type'            => 'group',
            'title'           => esc_html__('Package Offers', 'fox-eye'),
            'button_title'    => esc_html__('Add New Offer', 'fox-eye'),
            'accordion_title' => esc_html__('New Offer', 'fox-eye'),
            'fields'          => array(
                array(
                    'id'          => 'offer_title',
                    'type'        => 'text',
                    'title'       => esc_html__('Offer Title', 'fox-eye'),
                ),
                array(
                    'id'      => 'et_offer_icon',
                    'type'    => 'icon',
                    'title'   => 'Icon Field',
                    'default' => 'fa fa-check',
                ),                
            ),            
        ),
        array(
            'id'          => 'offer_btn_txt',
            'type'        => 'text',
            'title'       => esc_html__('Button Text', 'fox-eye'),
        ),
        array(
            'id'          => 'offer_btn_link',
            'type'        => 'text',
            'title'       => esc_html__('Button Link', 'fox-eye'),
        ),
      ),
    ),
    // end: a section
    
  ),
);

// -----------------------------------------
// Team Metabox Options           -
// -----------------------------------------
$options[]    = array(
  'id'        => '_fy_custom_team_options',
  'title'     => esc_html__('Team Member Info', 'fox-eye'),
  'post_type' => 'team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'client',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'fy_team_designation',
            'type'        => 'text',
            'title'       => esc_html__('Team Member Designation', 'fox-eye'),
        ),        
        array(
            'id'              => 'social_profiles',
            'type'            => 'group',
            'title'           => esc_html__('Social Profile', 'fox-eye'),
            'button_title'    => esc_html__('Add New Profile', 'fox-eye'),
            'accordion_title' => esc_html__('New Profile', 'fox-eye'),
            'fields'          => array(
              
                array(
                    'id'      => 'fy_social_icon',
                    'type'    => 'icon',
                    'title'   => 'Icon Field',
                    'default' => 'fa fa-check',
                ),   
                 array(
                    'id'          => 'fy_social_link',
                    'type'        => 'text',
                    'title'       => esc_html__('Social Profile Link', 'fox-eye'),
                ),             
            ),            
        ),
       
       
      ),
    ),
    // end: a section
    
  ),
);
// -----------------------------------------
// Testimonial Metabox Options           -
// -----------------------------------------
$options[]    = array(
  'id'        => '_fy_custom_testimonial_options',
  'title'     => esc_html__('Testimonial Info', 'fox-eye'),
  'post_type' => 'testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'testimonial',
      'icon'  => 'fa fa-eye',
      'fields' => array(
        array(
            'id'          => 'fy_testimonial_designation',
            'type'        => 'text',
            'title'       => esc_html__('Testimonial People Designation', 'fox-eye'),
        ),        
        
       
      ),
    ),
    // end: a section
    
  ),
);

CSFramework_Metabox::instance( $options );
