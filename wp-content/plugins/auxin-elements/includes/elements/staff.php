<?php
/**
 * Staff Element
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       http://averta.net/phlox/
 * @copyright  (c) 2010-2017 
 */

function  auxin_get_staff_master_array( $master_array )  {

     $master_array['aux_staff'] = array(
        'name'                    => __('Staff ', 'auxin-elements'),
        'auxin_output_callback'   => 'auxin_widget_staff_callback',
        'base'                    => 'aux_staff',
        'description'             => __('You can display your Staffs as a customized widget,', 'auxin-elements'),
        'class'                   => 'aux-widget-staff',
        'show_settings_on_create' => true,
        'weight'                  => 1,
        'is_widget'               => true,
        'is_shortcode'            => true,
        'is_so'                   => true,
        'is_vc'                   => true,
        'category'                => THEME_NAME,
        'group'                   => '',
        'admin_enqueue_js'        => '',
        'admin_enqueue_css'       => '',
        'front_enqueue_js'        => '',
        'front_enqueue_css'       => '',
        'icon'                    => 'aux-element aux-pb-icons-staff',
        'custom_markup'           => '',
        'js_view'                 => '',
        'html_template'           => '',
        'deprecated'              => '',
        'content_element'         => '',
        'as_parent'               => '',
        'as_child'                => '',
        'params'                  => array(
            array(
                'heading'          => __('Staff Name','auxin-elements'),
                'description'      => __('Staff Name, leave it empty if you don`t need title.', 'auxin-elements'),
                'param_name'       => 'title',
                'type'             => 'textfield',
                'value'            => '',
                'holder'           => 'textfield',
                'class'            => 'title',
                'admin_label'      => true,
                'dependency'       => '',
                'weight'           => '',
                'group'            => 'Staff Details' ,
                'edit_field_class' => ''
            ),
            array(
                'heading'           => __('Staff Occupation','auxin-elements'),
                'description'       => __('Staff Occupation, leave it empty if you don`t need title.', 'auxin-elements'),
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
                'group'             => 'Staff Details' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Staff Page Link','auxin-elements'),
                'description'       => __('leave it empty if you don`t need to add a page.', 'auxin-elements'),
                'param_name'        => 'staff_link',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'staff_link',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Staff Details' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Staff Image', 'auxin-elements'),
                'description'       => '',
                'param_name'        => 'staff_img',
                'type'              => 'attach_image',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'staff_img',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Staff Details',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Image Size','auxin-elements'),
                'description'       => '',
                'param_name'        => 'staff_img_size',
                'type'              => 'dropdown',
                'def_value'         => 'full',
                'value'             => array (
                    'full'          => __( 'Orginal Size'  , 'auxin-elements' ),
                    'large'         => __( 'Large'         , 'auxin-elements' ),
                    'medium'        => __( 'Medium'        , 'auxin-elements' ),
                    'thumbnail'     => __( 'Thumbnail'     , 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'staff_img_size',
                'admin_label'       => true,
                'weight'            => '',
                'group'             => 'Staff Details' ,
                'edit_field_class'  => ''
            ),
           array(
                'heading'           => __('Image shape','auxin-elements'),
                'description'       => '',
                'param_name'        => 'img_shape',
                'type'              => 'aux_visual_select',
                'def_value'         => '',
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
                    'rect'    => array(
                        'label'     => __('Rectangle', 'auxin-elements'),
                        'image'     => AUXIN_URL . 'images/visual-select/icon-style-rectangle.svg'
                    ),
                ),
                'holder'            => 'dropdown',
                'class'             => 'img_shape',
                'admin_label'       => true,
                'weight'            => '',
                'group'             => 'Staff Details',
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
            ),            array(
                'heading'           => __('Layout Style','auxin-elements'),
                'description'       => '',
                'param_name'        => 'layout_style',
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
                'class'             => 'layout_style',
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Layout Border Color', 'auxin-elements'),
                'description'       => __('Choose a border color for this layout.', 'auxin-elements'),
                'param_name'        => 'layout_border_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'layout_border_color',
                'admin_label'       => true,
                'dependency'        => array(
                        'element'   => 'wrapper_style',
                        'value'     => array('simple','box'),
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Text align','auxin-elements'),
                'description'       => '',
                'param_name'        => 'text_align',
                'type'              => 'aux_visual_select',
                'def_value'         => 'left',
                'choices'           => array(
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
                'def_value'         => 'dark',
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
                'heading'           => __('Enable Socials','auxin-elements' ),
                'description'       => '',
                'param_name'        => 'socials',
                'type'              => 'checkbox',
                'value'             => 1,
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Twitter Address' ,'auxin-elements' ),
                'param_name'        => 'social_twitter',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Linkedin Address','auxin-elements' ),
                'param_name'        => 'social_linkedin',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Facebook Address','auxin-elements' ),
                'param_name'        => 'social_facebook',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Google Plus Address','auxin-elements' ),
                'param_name'        => 'social_gp',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Flickr Address','auxin-elements' ),
                'param_name'        => 'social_flickr',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Delicious Address','auxin-elements' ),
                'param_name'        => 'social_delicious',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Pinterest Address','auxin-elements' ),
                'param_name'        => 'social_pinterest',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('GitHub Address','auxin-elements' ),
                'param_name'        => 'social_github',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Socials Icon size','auxin-elements'),
                'description'       => '',
                'param_name'        => 'icon_size',
                'type'              => 'dropdown',
                'def_value'         => 'aux-medium',
                'value'             => array (
                    'aux-small'       => __( 'Small'   , 'auxin-elements' ),
                    'aux-medium'      => __( 'Medium'  , 'auxin-elements' ),
                    'aux-large'       => __( 'Large'   , 'auxin-elements' ),
                    'aux-extra-large' => __( 'X-Large' , 'auxin-elements' )
                ),
                'holder'            => 'dropdown',
                'class'             => 'icon_size',
                'admin_label'       => true,
                'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Icon Direction','auxin-elements'),
                'description'       => '',
                'param_name'        => 'icon_align',
                'type'              => 'dropdown',
                'def_value'         => 'aux-horizontal',
                'value'             => array (
                    'aux-vertical'   => __( 'Vertical'   , 'auxin-elements' ),
                    'aux-horizontal' => __( 'Horizontal'  , 'auxin-elements' ),
                ),
                'holder'            => 'dropdown',
                'class'             => 'icon_align',
                'admin_label'       => true,
                 'dependency'        => array(
                    'element'       => 'socials',
                    'value'         => array('true', 1)
                ),
                'weight'            => '',
                'group'             => 'Socials',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Maximum Words','auxin-elements' ),
                'description'       => __('Limit the number of words in the Content','auxin-elements' ),
                'param_name'        => 'max_words',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'def_value'         => 22,
                'class'             => 'max_words',
                'admin_label'       => false,
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),            array(
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
        )
    );

    return $master_array;
}

add_filter( 'auxin_master_array_shortcodes', 'auxin_get_staff_master_array', 10, 1 );


/**
 * Staff Element Widget Markup
 *
 * The front-end output of this element is returned by the following function
 *
 * @param  array  $atts              The array containing the parsed values from shortcode, it should be same as defined params above.
 * @param  string $shortcode_content The shorcode content
 * @return string                    The output of element markup
 */
function auxin_widget_staff_callback( $atts, $shortcode_content = null ){

    // Defining default attributes
    $default_atts = array(
        'title'               => '', // header title
        'subtitle'            => '',
        'staff_link'          => '',
        'staff_img'           => '',
        'staff_img_size'      => 'full',
        'content'             => '',
        'text_color_mode'     => 'dark',
        'text_align'          => 'left',
        'img_shape'           => 'rect',
        'layout_border_color' => '',
        'socials'             => 0,
        'icon_size'           => 'aux-medium',
        'social_twitter'      => '',
        'social_facebook'     => '',
        'social_linkedin'     => '',
        'social_gp'           => '',
        'wrapper_style'       => 'simple',
        'max_words'            => 22,
        'social_flickr'       => '',
        'social_pinterest'    => '',
        'icon_align'          => 'aux-horizontal',
        'social_github'       => '',
        'social_delicious'    => '',
        'layout_style'        => 'top',
        'extra_classes'       => '', // custom css class names for this element
        'custom_el_id'        => '', // custom id attribute for this element
        'base_class'          => 'aux-widget-staff'  // base class name for container
    );


    if( ! empty( $atts['wrapper_style'] ) ){
            $atts['extra_classes'] = ' aux-wrap-style-' . esc_attr( $atts['wrapper_style'] );

    } elseif( ! empty( $default_atts['wrapper_style'] ) ){

        if( ! isset( $atts['extra_classes'] ) ){

                $atts['extra_classes'] = '';

        }

        $atts['extra_classes'] .= ' aux-wrap-style-' . esc_attr( $default_atts['wrapper_style'] );

    }

    $result = auxin_get_widget_scafold( $atts, $default_atts );

    extract( $result['parsed_atts'] );

    $image               = wp_get_attachment_image( $staff_img, $staff_img_size, "", array( "class" => "img-square" ) );
    $content             = empty( $content    ) ? $shortcode_content : $content ;
    $content             = wp_trim_words( $content , (int)$max_words , ' ...');
    $rect_fill           = 'rect' === $img_shape && in_array( $layout_style, array( 'right', 'left' ) ) ? 'aux-square-fill' : '' ;
    $layout_border_color = ! empty( $layout_border_color ) ? 'style= "border-color: ' . esc_attr( $layout_border_color ) . '"': '' ;
    $main_classes        = 'aux-staff-pos-'.$layout_style. ' aux-staff-text-' .$text_align. ' aux-staff-text-' .$text_color_mode. ' ' . $rect_fill;
    $main_classes       .= ! empty( $layout_border_color ) ? ' aux-staff-border' : '' ;
    $header_classes      = 'aux-staff-img-' . $img_shape ;
    $footer_classes      = $icon_size . ' ' .$icon_align ;

    ob_start();

    // widget header ------------------------------
    echo $result['widget_header'];
?>
    <div class="<?php echo esc_attr( $main_classes );?>" <?php echo $layout_border_color ;?>>
    <?php if( ! empty( $image ) ){ ;?>
        <div class="aux-staff-header <?php echo esc_attr( $header_classes ) ;?>">
            <?php echo $image ;?>
        </div>
        <div class="aux-staff-content">
            <?php if( ! empty( $title ) && empty( $staff_link ) ) { ?>
            <h4 class="col-title"><?php echo $title; ?></h4>
            <?php } elseif( ! empty( $title ) && ! empty( $staff_link ) ) {?>
            <h4 class="col-title"><a href="<?php echo esc_url($staff_link); ?>">
            <?php echo $title; ?></a>
            </h4>
            <?php } if( ! empty( $subtitle ) ) { ?>
            <h5 class="col-subtitle"><?php echo $subtitle; ?></h5>
            <?php } if( ! empty( $content ) ) { ?>
            <div class="entry-content">
                <?php $encoding_flag =  defined('ENT_HTML401') ? ENT_HTML401 : ENT_QUOTES; ?>
                <?php echo do_shortcode( html_entity_decode( $content, $encoding_flag, 'UTF-8') ); ?>
            </div>
            <?php } if ( auxin_is_true( $socials ) ) { ?>
            <div class="aux-staff-footer <?php echo esc_attr( $footer_classes ) ;?>">
                    <ul class="aux-social-list">

                    <?php if ( ! empty( $social_facebook ) ) { ;?>
                        <li>
                            <a class="facebook" href="<?php echo esc_url( $social_facebook ) ;?>" target="_blank"><span class="auxicon-facebook"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_linkedin ) ) { ;?>
                        <li>
                            <a class="linkedin" href="<?php echo esc_url( $social_linkedin ) ;?>" target="_blank"><span class="auxicon-linkedin"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_twitter ) ) { ;?>
                        <li>
                            <a class="twitter" href="<?php echo esc_url( $social_twitter ) ;?>" target="_blank"><span class="auxicon-twitter"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_gp ) ) { ;?>
                        <li>
                            <a class="googleplus" href="<?php echo esc_url( $social_gp ) ;?>" target="_blank"><span class="auxicon-googleplus"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_flickr ) ) { ;?>
                        <li>
                            <a class="flickr" href="<?php echo esc_url( $social_flickr ) ;?>" target="_blank"><span class="auxicon-flickr"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_delicious ) ) { ;?>
                        <li>
                            <a class="delicious" href="<?php echo esc_url( $social_delicious ) ;?>" target="_blank"><span class="auxicon-delicious"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_pinterest ) ) { ;?>
                        <li>
                            <a class="pinterest" href="<?php echo esc_url( $social_pinterest ) ;?>" target="_blank"><span class="auxicon-pinterest"></span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ( ! empty( $social_github ) ) { ;?>
                        <li>
                            <a class="github" href="<?php echo esc_url( $social_github ) ;?>" target="_blank"><span class="auxicon-github"></span>
                            </a>
                        </li>
                   <?php } ?>
                    </ul>
           </div>
            <?php } ?>
        </div>
    <?php } ?>
    </div>


<?php

    // widget footer ------------------------------
    echo $result['widget_footer'];
    return ob_get_clean();

}
