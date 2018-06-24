<?php 

add_action( 'acf/init', 'nd_acf_add_local_field_groups' );
/**
 * Add Advanced Custom Fields programatically (Flexible Content field).
 *
 * @link https://www.advancedcustomfields.com/resources/register-fields-via-php/
 * @link https://support.advancedcustomfields.com/forums/topic/register-two-locations-via-php-doesnt-work/
 * @link https://support.advancedcustomfields.com/forums/topic/adding-additional-layout-to-flexible_content-field-in-child-theme/
 *
 * @return void
 */
function nd_acf_add_local_field_groups() {
    
    acf_add_local_field_group( array(
        'key'        => 'acf_group_sections',
        'title'      => 'Welcome Section',
        'fields'     => array(
            array(
                'key'          => 'acf_sections',
                'name'         => 'front_sections',
                'type'         => 'flexible_content',
                'layouts'      => array(
                    array(
                        'label'      => 'Welcome Section',
                        'name'       => 'welcome_section',
                        'display'    => 'row',
                        'min'        => '',
                        'sub_fields' => array(
                            array(
                                'key'   => 'welcome_section_title',
                                'label' => 'Welcome Section Title',
                                'name'  => 'welcome_section_title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'welcome_section_description',
                                'label' => 'Welcome section description',
                                'name'  => 'welcome_section_description',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'welcome_section_back_image',
                                'label' => 'Background image',
                                'name'  => 'welcome_section_back_image',
                                'type'  => 'image',
                                'return_format' => 'url',
                            ),
                            array(
                                'key'   => 'additional_text_load',
                                'label' => 'Text for leading brands',
                                'name'  => 'additional_text_load',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
                'button_label' => 'Add Section',
                'min'          => '',
                'max'          => '',
            ),
        ),
        'location'   => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'default',
                ),
            ),
        ),
        'menu_order' => 0,
    ) );
    
}