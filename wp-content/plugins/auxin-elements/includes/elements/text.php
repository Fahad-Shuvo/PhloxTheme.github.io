<?php
/**
 * Text element
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       http://averta.net/phlox/
 * @copyright  (c) 2010-2017 
 */
function  auxin_get_text_master_array( $master_array ) {

    $master_array['aux_text'] = array(
        'name'                          => __('Text', 'auxin-elements'),
        'auxin_output_callback'         => 'auxin_widget_column_callback',
        'base'                          => 'aux_text',
        'description'                   => __('Simple text block.', 'auxin-elements'),
        'class'                         => 'aux-widget-text',
        'show_settings_on_create'       => true,
        'weight'                        => 1,
        'is_widget'                     => false,
        'is_shortcode'                  => true,
        'is_so'                         => true,
        'is_vc'                         => true,
        'so_api'                        => true,
        'category'                      => THEME_NAME,
        'group'                         => '',
        'admin_enqueue_js'              => '',
        'admin_enqueue_css'             => '',
        'front_enqueue_js'              => '',
        'front_enqueue_css'             => '',
        'icon'                          => 'aux-element aux-pb-icons-text',
        'custom_markup'                 => '',
        'js_view'                       => '',
        'html_template'                 => '',
        'deprecated'                    => '',
        'content_element'               => '',
        'as_parent'                     => '',
        'as_child'                      => '',
        'params' => array(
            array(
                'heading'           => __('Title','auxin-elements'),
                'description'       => __('Text title, leave it empty if you don`t need title.', 'auxin-elements'),
                'param_name'        => 'title',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'title',
                'description'       => '',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Subtitle','auxin-elements'),
                'description'       => '',
                'param_name'        => 'subtitle',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'subtitle',
                'description'       => '',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Title link','auxin-elements'),
                'description'       => '',
                'param_name'        => 'title_link',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'title_link',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Text align','auxin-elements'),
                'description'       => '',
                'param_name'        => 'text_align',
                'type'              => 'aux_visual_select',
                'def_value'         => 'top',
                'choices'           => array(
                    ''          => array(
                        'label'     => __('Theme Default', 'auxin-elements'),
                        'css_class' => 'axiAdminIcon-default',
                    ),
                    'left'      => array(
                        'label'     => __('Left', 'auxin-elements'),
                        'css_class' => 'axiAdminIcon-text-align-left',
                    ),
                    'center'    => array(
                        'label'     => __('Center', 'auxin-elements'),
                        'css_class' => 'axiAdminIcon-text-align-center'
                    ),
                    'right'     => array(
                        'label'     => __('Right', 'auxin-elements'),
                        'css_class' => 'axiAdminIcon-text-align-right'
                    )
                ),
                'holder'            => 'dropdown',
                'class'             => 'text_align',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Text color scheme','auxin-elements'),
                'description'       => '',
                'param_name'        => 'text_color_mode',
                'type'              => 'dropdown',
                'def_value'         => 'inherit',
                'value'             => array (
                    'inherit'       => __( 'Inherit'  , 'auxin-elements' ),
                    'light'         => __( 'Light'    , 'auxin-elements' ),
                    'dark'          => __( 'Dark'     , 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'text_color_mode',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Wrapper style','auxin-elements'),
                'description'       => '',
                'param_name'        => 'wrapper_style',
                'type'              => 'aux_visual_select',
                'def_value'         => 'simple',
                'choices'           => array(
                    'simple'          => array(
                        'label'     => __('Simple', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/text-normal.svg'
                    ),
                    'outline'      => array(
                        'label'     => __('Outlined', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/text-outline.svg'
                    ),
                    'box'    => array(
                        'label'     => __('Boxed', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/text-boxed.svg'
                    )
                ),
                'holder'            => 'dropdown',
                'class'             => 'wrapper_style',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Block background color', 'auxin-elements'),
                'description'       => __('Choose a background color for this block.', 'auxin-elements'),
                'param_name'        => 'wrapper_bg_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'wrapper_bg_color',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Block border color', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'wrapper_border_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'wrapper_border_color',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Block background image', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'wrapper_bg_image',
                'type'              => 'attach_image',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'wrapper_bg_image',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Block background overlay', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'overlay_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'overlay_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'key' => 'wrapper_bg_image',
                    'value'   => '',
                    'compare' => '!='
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Block Background Image Display', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'background_display',
                'type'              => 'dropdown',
                'value'             => array (
                    'cover'             => __( 'Cover', 'auxin-elements' ),
                    'tile'              => __( 'Tiled Image', 'auxin-elements' ),
                    'center'            => __( 'Centered, with original size', 'auxin-elements' ),
                    'fixed'             => __( 'Fixed', 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'background_display',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon or image', 'auxin-elements' ),
                'description'       => __('Please choose an icon from avaialable icons.', 'auxin-elements'),
                'heading'           => __('Display Icon or Image', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'icon_or_image',
                'type'              => 'dropdown',
                'def_value'         => 'icon',
                'value'             => array (
                    'icon'          => __( 'Icon'  , 'auxin-elements' ),
                    'image'         => __( 'Image' , 'auxin-elements' ),
                ),
                'holder'            => 'dropdown',
                'class'             => 'icon_or_image',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon', 'auxin-elements' ),
                'description'       => __('Please choose an icon from the list.', 'auxin-elements'),
                'param_name'        => 'icon',
                'type'              => 'aux_iconpicker',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'aux_iconpicker',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon color','auxin-elements'),
                'description'       => __('Choose a color for icon.','auxin-elements'),
                'param_name'        => 'icon_color',
                'type'              => 'colorpicker',
                'def_value'         => '#888',
                'value'             => '#888',
                'holder'            => '',
                'class'             => 'icon_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon size','auxin-elements'),
                'description'       => '',
                'param_name'        => 'icon_size',
                'type'              => 'dropdown',
                'def_value'         => 'large',
                'value'             => array (
                    'small'   => __( 'Small'   , 'auxin-elements' ),
                    'medium'  => __( 'Medium'  , 'auxin-elements' ),
                    'large'   => __( 'Large'   , 'auxin-elements' ),
                    'x-large' => __( 'X-Large' , 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'icon_size',
                'admin_label'       => true,
                 'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon background shape','auxin-elements'),
                'description'       => '',
                'param_name'        => 'icon_shape',
                'type'              => 'aux_visual_select',
                'def_value'         => 'circle',
                'choices'           => array(
                    'circle'          => array(
                        'label'     => __('Circle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-circle.svg'
                    ),
                    'semi-circle'      => array(
                        'label'     => __('Semi-circle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-semi-circle.svg'
                    ),
                    'round-rect'    => array(
                        'label'     => __('Round Rectangle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-round-rectangle.svg'
                    ),
                    'cross-rect'    => array(
                        'label'     => __('Cross Rectangle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-cross-rectangle.svg'
                    ),
                    'rect'    => array(
                        'label'     => __('Rectangle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-rectangle.svg'
                    ),
                    'fill'             => array(
                        'label'     => __('Cover', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-rectangle.svg'
                    ),
                ),
                'holder'            => 'dropdown',
                'class'             => 'icon_shape',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon','image')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'          => __( 'Fill background color', 'auxin-elements' ),
                'description'      => __( 'Choose a color for fill area', 'auxin-elements' ),
                'param_name'       => 'fill_bg_color',
                'type'             => 'colorpicker',
                'def_value'        => '',
                'value'            => '',
                'holder'           => '',
                'class'            => '',
                'admin_label'      => '',
                'dependency'       => '',
                'weight'           => '',
                'group'            => '',
                'edit_field_class' => ''


                ),
            array(
                'heading'           => __('Icon background color','auxin-elements'),
                'description'       => __('Choose a color for background of icon.','auxin-elements'),
                'param_name'        => 'icon_bg_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'icon_bg_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Icon outline color', 'auxin-elements' ),
                'description'       => __( 'Choose a color for the border around the icon.', 'auxin-elements' ),
                'param_name'        => 'icon_border_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'icon_border_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('icon')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Image','auxin-elements'),
                'description'       => '',
                'param_name'        => 'image',
                'type'              => 'attach_image',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'image',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('image')
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Image Size','auxin-elements'),
                'description'       => '',
                'param_name'        => 'image_size',
                'type'              => 'dropdown',
                'def_value'         => 'full',
                'value'             => array (
                    'full'          => __( 'Orginal Size'  , 'auxin-elements' ),
                    'large'         => __( 'Large'         , 'auxin-elements' ),
                    'medium'        => __( 'Medium'        , 'auxin-elements' ),
                    'thumbnail'     => __( 'Thumbnail'     , 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'image_size',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'icon_or_image',
                    'value'         => array('image')
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Image or icon position','auxin-elements'),
                'description'       => '',
                'param_name'        => 'image_position',
                'type'              => 'aux_visual_select',
                'def_value'         => 'top',
                'choices'           => array(
                    'top'           => array(
                        'label'     => __('Top', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/column-icon-top.svg'
                    ),
                    'left'          => array(
                        'label'     => __('Left', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/column-icon-left.svg'
                    ),
                    'right'         => array(
                        'label'     => __('Right', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/column-icon-right.svg'
                    )
                ),
                'holder'            => 'dropdown',
                'class'             => 'image_position',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
           array(
                'heading'           => __('Display button', 'auxin-elements' ),
                'description'       => __('Dsiplay a button in text widget', 'auxin-elements' ),
                'param_name'        => 'display_button',
                'type'              => 'checkbox',
                'def_value'         => '',
                'value'             => '',
                'class'             => 'display_button',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
           array(
                'heading'           => __('Button label', 'auxin-elements' ),
                'description'       => __('The label of button.', 'auxin-elements' ),
                'param_name'        => 'btn_label',
                'type'              => 'textfield',
                'value'             => 'Button',
                'holder'            => 'textfield',
                'class'             => 'label',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Button size','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'btn_size',
                'type'              => 'dropdown',
                'def_value'         => 'medium',
                'value'             => array(
                    'exlarge' => __('Exlarge', 'auxin-elements' ),
                    'large'   => __('Large'  , 'auxin-elements' ),
                    'medium'  => __('Medium' , 'auxin-elements' ),
                    'small'   => __('Small'  , 'auxin-elements' ),
                    'tiny'    => __('Tiny'   , 'auxin-elements' )
                ),
                'holder'            => '',
                'class'             => 'round',
                'admin_label'       => true,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'          => __('Button shape style','auxin-elements' ),
                'description'      => '',
                'param_name'       => 'btn_border',
                'type'             => 'aux_visual_select',
                'value'            => '',
                'class'            => 'border',
                'admin_label'      => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'           => '',
                'group'            => '' ,
                'edit_field_class' => '',
                'choices'          => array(
                    ''          => array(
                        'label' => __('Box', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-normal.svg'
                    ),
                    'round'     => array(
                        'label' => __('Round', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-curved.svg'
                    ),
                    'curve'     => array(
                        'label' => __('Curve', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-rounded.svg'
                    )
                )
            ),
            array(
                'heading'          => __('Button style','auxin-elements' ),
                'description'      => '',
                'param_name'       => 'btn_style',
                'type'             => 'aux_visual_select',
                'value'            => '',
                'class'            => 'style',
                'admin_label'      => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'           => '',
                'group'            => '' ,
                'edit_field_class' => '',
                'choices'          => array(
                    ''          => array(
                        'label' => __('Normal', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-normal.svg'
                    ),
                    '3d'        => array(
                        'label' => __('3D', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-3d.svg'
                    ),
                    'outline'   => array(
                        'label' => __('Outline', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-outline.svg'
                    )
                )
            ),
            array(
                'heading'           => __('Uppercase label','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'btn_uppercase',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => 'uppercase',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Darken the label','auxin-elements' ),
                'description'       => __('Darken label of button while mouse over it.','auxin-elements' ),
                'param_name'        => 'btn_dark',
                'type'              => 'aux_switch',
                'value'             => '0',
                'class'             => 'dark',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon for button','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'btn_icon',
                'type'              => 'aux_iconpicker',
                'value'             => '',
                'class'             => 'icon-name',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon alignment','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'btn_icon_align',
                'type'              => 'dropdown',
                'def_value'         => 'default',
                'value'             => array(
                   'default'        =>  __('Default'            , 'auxin-elements' ),
                   'left'           =>  __('Left'               , 'auxin-elements' ),
                   'right'          =>  __('Right'              , 'auxin-elements' ),
                   'over'           =>  __('Over'               , 'auxin-elements' ),
                   'left-animate'   =>  __('Animate from Left'  , 'auxin-elements' ),
                   'right-animate'  =>  __('Animate from Right' , 'auxin-elements' )
                ),
                'holder'            => '',
                'class'             => 'icon-align',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Color of button','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'btn_color_name',
                'type'              => 'aux_visual_select',
                'value'             => 'carmine-pink',
                'choices'           => auxin_get_famous_colors_list(),
                'holder'            => '',
                'class'             => 'color',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Link','auxin-elements' ),
                'description'       => __('If you want to link your button.', 'auxin-elements' ),
                'param_name'        => 'btn_link',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => 'link',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Open link in','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'target',
                'type'              => 'dropdown',
                'def_value'         => '_self',
                'value'             => array(
                    '_self'  => __('Current page' , 'auxin-elements' ),
                    '_blank' => __('New page', 'auxin-elements' )
                ),
                'holder'            => '',
                'class'             => 'target',
                'admin_label'       => false,
                'dependency'        => array(
                    'element' => 'display_button',
                    'value' => "true",
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Content','auxin-elements'),
                'description'       => __('Enter a text as a text content.','auxin-elements'),
                'param_name'        => 'content',
                'type'              => 'textarea_html',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'div',
                'class'             => 'content',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'          => __('Bottom shape style','auxin-elements' ),
                'description'      => '',
                'param_name'       => 'bottom_shape_style',
                'type'             => 'aux_visual_select',
                'value'            => '',
                'class'            => 'bottom_shape_style',
                'def_value'        => 'none',
                'admin_label'      => false,
                'dependency'       => '',
                'weight'           => '',
                'group'            => '' ,
                'edit_field_class' => '',
                'choices'          => array(
                    ''          => array(
                        'label'  => __('None', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-normal.svg'
                    ),
                    'wave'     => array(
                        'label'  => __('Wave', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-curved.svg'
                    ),
                    'tail'     => array(
                        'label' => __('Tail', 'auxin-elements' ),
                        'image' => AUXIN_URL . 'images/visual-select/button-rounded.svg'
                    )
                )
            ),
            array(
                'heading'     => __( 'Bottom Shape color', 'auxin-elements' ),
                'description' => __( 'Select color for shape', 'auxin-elements' ),
                'param_name'  => 'bottom_shape_color',
                'type'        => 'colorpicker',
                'value'       => '',
                'class'       => 'bottom_shape_color',
                'dependency'  => array(
                    'element' => 'bottom_shape_style',
                    'value'   => array('tail', 'wave')
                )
            ),
            array(
                'heading'           => __('Extra class name','auxin-elements'),
                'description'       => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'auxin-elements'),
                'param_name'        => 'extra_classes',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'extra_classes',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            )
        )
    );

    return $master_array;
}

add_filter( 'auxin_master_array_shortcodes', 'auxin_get_text_master_array', 10, 1 );

// This is the widget call back in fact the front end out put of this widget comes from this function
function auxin_widget_column_callback( $atts, $shortcode_content = null ){

    // Defining default attributes
    $default_atts = array(
        'title'                 => '', // section title
        'title_link'            => '', // the link on title
        'subtitle'              => '', // Text as subtitle under the title
        'content'               => '', // the link on title
        'text_align'            => '', // left, right, center
        'text_color_mode'       => 'inherit', // inherit, dark, light

        'wrapper_style'         => '', // box, outline,
        'wrapper_bg_color'      => '', // box, outline,
        'wrapper_bg_image'      => '', // box, background image,
        'wrapper_border_color'  => '', // border color for box,
        'overlay_color'         => '', // border color for box,

        'icon'                  => '', // icon on column side
        'icon_color'            => '#888',
        'icon_size'             => 'large', // small, medium, large, x-large
        'icon_shape'            => 'circle', // circle, semi-circle, round-rect, rect, fill, ...
        'icon_bg_color'         => '', // empty mean inherit,
        'icon_border_color'     => '', // color or 'icon' (same color as icon)
        'background_display'    => '',
        'fill_bg_color'         => '', // color or 'icon' (same color as icon)

        'image'                 => '', // image on column side
        'image_size'            => 'full', // image on column side
        'image_position'        => 'top', // top,left,right

        'display_button'        => '',
        'btn_label'             => '',
        'btn_size'              => '',
        'btn_border'            => '',
        'btn_style'             => '',
        'btn_uppercase'         => '',
        'btn_dark'              => '',
        'btn_icon'              => '',
        'btn_icon_align'        => '',
        'btn_color_name'        => '',
        'btn_link'              => '',
        'btn_target'            => '',

        'bottom_shape_style'    => '',
        'bottom_shape_color'    => '',

        'extra_classes'         => '', // custom css class names for this element
        'custom_el_id'          => '', // custom id attribute for this element
        'base_class'            => 'aux-widget-text'  // base class name for container
    );


    if( ! empty( $atts['wrapper_style'] ) ){
        $atts['extra_classes'] = ' aux-wrap-style-' . esc_attr( $atts['wrapper_style'] );

    } elseif( ! empty( $default_atts['wrapper_style'] ) ){
        if( ! isset( $atts['extra_classes'] ) ){
            $atts['extra_classes'] = '';
        }
        $atts['extra_classes'] .= ' aux-wrap-style-' . esc_attr( $default_atts['wrapper_style'] );
    }

    $result                = auxin_get_widget_scafold( $atts, $default_atts );

    extract( $result['parsed_atts'] );

    $icon_border_color      = 'icon' == $icon_border_color ? $icon_color : $icon_border_color;
    $content                = empty( $content    ) ? $shortcode_content : $content;

    $main_inline_style      = empty( $wrapper_bg_color   ) ? '' : 'background-color:' . $wrapper_bg_color . ' !important;';
    $main_inline_style     .= empty( $wrapper_border_color ) ? '' : 'border:2px solid ' . $wrapper_border_color . ';';
    $main_inline_style     .= empty( $wrapper_bg_image ) ? '' : 'background-image:url(' . wp_get_attachment_image_url( $wrapper_bg_image, 'full' ) . ');';
    $main_inline_style      = empty( $main_inline_style ) ? '' : ' style="' . $main_inline_style . '"';

    $main_classes           = 'aux-ico-pos-'. ( $image_position ? esc_attr( $image_position ) : 'top' );
    $main_classes          .= empty( $content ) ? ' no-content' : '';
    $main_classes          .= empty( $text_align ) ? '' : ' aux-text-align-' . esc_attr( $text_align );
    $main_classes          .= empty( $wrapper_bg_image ) ? '' : ' aux-text-widget-bg aux-text-widget-bg-' . esc_attr($background_display );
    $main_classes          .= empty( $icon_bg_color ) && empty( $image ) && !empty( $content ) ? ' aux-text-widget-no-ico-bg' : '';
    $main_classes          .= !empty( $fill_bg_color ) ? ' aux-text-widget-fill-bg' : '';
    $main_classes          .= empty( $fill_bg_color )  && !('fill' == $icon_shape)   ? ' aux-text-widget-def' : '';

    $icon_box_classes = $icon_box_inline_style = '';

    if ( ! empty( $image ) && is_numeric( $image ) ) {
        if ( 'fill' == $icon_shape ) {
            $main_classes .= ' aux-text-widget-header-fill';
        } else {
            $icon_box_classes .= 'aux-img-box';
            $image_data = wp_get_attachment_image_src( $image, $image_size );
            $icon_box_inline_style = ' width:' . $image_data[1] . 'px;';
        }
    }

    $main_classes          .= empty( $text_color_mode ) || 'inherit' == $text_color_mode ? '' : ' aux-text-color-'. esc_attr( $text_color_mode );

    $icon_box_inline_style .= empty( $icon_bg_color      )     ? '' : 'background-color:' . $icon_bg_color . ' !important;';
    $icon_box_inline_style .= empty( $icon_border_color )     ? '' : 'border-color:' . $icon_border_color . ';';
    $icon_box_inline_style  = empty( $icon_box_inline_style ) ? '' : ' style="' . $icon_box_inline_style . '";';

    $overlay_style = empty( $overlay_color ) ? '' : 'style="background-color:' . $overlay_color . '";';

    $box_header_style       = empty( $fill_bg_color ) ? '' : 'background-color: ' . $fill_bg_color . ';';
    $box_header_style       = empty( $box_header_style ) ? '' : 'style="' . $box_header_style . '"';

    $icon_box_classes      .= ' aux-ico-' . esc_attr( $icon_size );
    $icon_box_classes      .= ' aux-ico-shape-' . esc_attr( $icon_shape );

    $icon_classes           = empty( $icon ) || $icon == 'none' ? '' : esc_attr( $icon );
    $icon_classes           .= ! empty( $icon_bg_color ) || ! empty( $icon_border_color ) ? ' aux-ico-margin' : '';
    $icon_inline_style      = empty( $icon_color ) ? '' : 'style="color:' . $icon_color . ' !important;"';

    $icon_border_style_tag = '';
    if( ! empty( $icon_border_color ) && 'cross-rect' == $icon_shape ){
        $icon_uid = uniqid( 'auxt' );
        $icon_box_inline_style .= ' id="'. $icon_uid .'"';
        $icon_border_style_tag  = "<style>#$icon_uid:before,#$icon_uid:after{border-color:$icon_border_color;}</style>";
    }

    $bottom_shape_classes = empty( $bottom_shape_style ) ? '' : 'aux-border-shape-' .  esc_attr( $bottom_shape_style );
    $bottom_shape_color   = 'wave' === $bottom_shape_style  ? 'style="fill:' .  esc_attr( $bottom_shape_color ) . ';"' : 'style="border-top-color:' .  esc_attr( $bottom_shape_color ) . ';"';


    if( ! empty( $image ) && is_numeric( $image ) ) {
        // $image  = auxin_get_the_resized_attachment( $image );
        $image  = wp_get_attachment_image( $image, $image_size );
    }

    $btn_atts = array(
        'label'         => $btn_label,
        'size'          => $btn_size,
        'border'        => $btn_border,
        'style'         => $btn_style,
        'uppercase'     => $btn_uppercase,
        'dark'          => $btn_dark,
        'icon'          => $btn_icon,
        'icon_align'    => $btn_icon_align,
        'color_name'    => $btn_color_name,
        'link'          => $btn_link,
        'target'        => $btn_target,
    );

    ob_start();

    // widget header ------------------------------
    echo $result['widget_header'];
?>

        <div class="<?php echo $main_classes; ?>" <?php echo $main_inline_style; ?>>
        <?php if ( ! empty( $overlay_color ) ) { ?>
            <div class="aux-text-widget-overlay" <?php echo $overlay_style; ?>></div>
        <?php } ?>
            <div class="aux-text-widget-header" <?php echo $box_header_style; echo $box_header_style; ?>>
                <?php if( ! empty( $icon ) && empty( $image ) ) { ?>
                <div class="aux-ico-box <?php echo $icon_box_classes; ?>" <?php echo $icon_box_inline_style; ?>>
                    <?php echo $icon_border_style_tag; ?>
                    <span class="aux-ico <?php echo $icon_classes; ?>" <?php echo $icon_inline_style; ?> > </span>
                </div>
                <?php } elseif( !empty( $image ) ) { ?>
                <div class="aux-ico-box <?php echo $icon_box_classes; ?>" <?php echo $icon_box_inline_style; ?> >
                    <?php echo $image; ?>
                </div>
                <?php } ?>
            </div>
            <div class="aux-text-inner aux-text-widget-content">
                <?php if( ! empty( $title ) && empty( $title_link ) ) { ?>
                <h4 class="col-title"><?php echo $title; ?></h4>
                <?php } elseif( ! empty( $title ) && ! empty( $title_link ) ) { ?>
                <h4 class="col-title"><a href="<?php echo $title_link; ?>"><?php echo $title; ?></a></h4>
                <?php } if( ! empty( $subtitle ) ) { ?>
                <h5 class="col-subtitle"><?php echo $subtitle; ?></h5>
                <?php } if( ! empty( $content ) ) { ?>
                <div class="entry-content">
                    <?php $encoding_flag =  defined('ENT_HTML401') ? ENT_HTML401 : ENT_QUOTES; ?>
                    <?php echo do_shortcode( html_entity_decode( $content, $encoding_flag, 'UTF-8') ); ?>
                </div>
                <?php } if ( ! empty( $display_button ) ) {
                    echo auxin_widget_button_callback( $btn_atts );
                } ?>
            </div>
        </div>
        <?php if ( ! empty( $bottom_shape_classes ) ) { ?>
            <div class="aux-text-widget-footer">
                <div class="aux-border-shape <?php echo $bottom_shape_classes; ?>"<?php echo $bottom_shape_color; ?>>
                <?php if ( 'wave' === $bottom_shape_style ){?>
                <svg width="100%" height="16" <?php echo $bottom_shape_color;?> >
                    <defs>
                        <pattern id="pattern-shape-wave" x="16" y="0" width="35" height="16" patternUnits="userSpaceOnUse" >
                            <path d="M16 16 L35 0 L-2 0 Z" />
                        </pattern>
                    </defs>
                    <rect x="0" y="0" width="100%" height="17" style="fill: url(#pattern-shape-wave);" />
                </svg>
                    <?php }?>
                </div>
            </div>
        <?php } ?>

<?php
    // widget footer ------------------------------
    echo $result['widget_footer'];

    return ob_get_clean();
}
