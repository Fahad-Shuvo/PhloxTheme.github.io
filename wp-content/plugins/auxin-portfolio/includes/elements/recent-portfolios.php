<?php
/**
 * Code highlighter element
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       http://averta.net/phlox/
 * @copyright  (c) 2010-2017 
 */

function auxin_get_recent_portfolios_master_array( $master_array ) {


    $master_array['aux_recent_portfolios_grid'] = array(
        'name'                          => __('Recent Portfolio on Grid, Tile and Masonry', 'auxin-portfolio' ),
        'auxin_output_callback'         => 'auxin_widget_recent_portfolios_grid_callback',
        'base'                          => 'aux_recent_portfolios_grid',
        'description'                   => __('It adds recent portfolio items in gird, tile or masonry style.', 'auxin-portfolio' ),
        'class'                         => 'aux-widget-recent-portfolios',
        'show_settings_on_create'       => true,
        'weight'                        => 1,
        'is_widget'                     => false,
        'is_shortcode'                  => true,
        'is_so'                         => true,
        'is_vc'                         => true,
        'category'                      => THEME_NAME,
        'group'                         => '',
        'admin_enqueue_js'              => '',
        'admin_enqueue_css'             => '',
        'front_enqueue_js'              => '',
        'front_enqueue_css'             => '',
        'icon'                          => 'auxin-element auxin-grid',
        'custom_markup'                 => '',
        'js_view'                       => '',
        'html_template'                 => '',
        'deprecated'                    => '',
        'content_element'               => '',
        'as_parent'                     => '',
        'as_child'                      => '',
        'params' => array(
            array(
                'heading'           => __('Title', 'auxin-portfolio' ),
                'description'       => __('Recent items title, leave it empty if you don`t need title.', 'auxin-portfolio'),
                'param_name'        => 'title',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => 'textfield',
                'class'             => 'title',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Categories', 'auxin-portfolio'),
                'description'       => __('Specifies a category that you want to show portfolio items from it.', 'auxin-portfolio' ),
                'param_name'        => 'cat',
                'type'              => 'aux_taxonomy',
                'taxonomy'          => 'portfolio-cat',
                'def_value'         => ' ',
                'holder'            => '',
                'class'             => 'cat',
                'value'             => ' ', // should use the taxonomy name
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Number of items to show', 'auxin-portfolio'),
                'description'       => __('Leave it empty to show all items', 'auxin-portfolio'),
                'param_name'        => 'num',
                'type'              => 'textfield',
                'value'             => '8',
                'holder'            => '',
                'class'             => 'num',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Exclude portfolios without media','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'exclude_without_media',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
             array(
                'heading'            => __('Order by', 'auxin-portfolio'),
                'description'        => '',
                'param_name'         => 'order_by',
                'type'               => 'dropdown',
                'def_value'          => 'date',
                'holder'             => '',
                'class'              => 'order_by',
                'value'              => array (
                    'date'            => __('Date', 'auxin-portfolio'),
                    'menu_order date' => __('Menu Order', 'auxin-portfolio'),
                    'title'           => __('Title', 'auxin-portfolio'),
                    'ID'              => __('ID', 'auxin-portfolio'),
                    'rand'            => __('Random', 'auxin-portfolio'),
                    'comment_count'   => __('Comments', 'auxin-portfolio'),
                    'modified'        => __('Date Modified', 'auxin-portfolio'),
                    'author'          => __('Author', 'auxin-portfolio'),
                    'post__in'        => __('Inserted Post IDs', 'auxin-portfolio')
                ),
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Order', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'order',
                'type'              => 'dropdown',
                'def_value'         => 'DESC',
                'holder'            => '',
                'class'             => 'order',
                'value'             =>array (
                    'DESC'          => __('Descending', 'auxin-portfolio'),
                    'ASC'           => __('Ascending', 'auxin-portfolio'),
                ),
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Only portfolios','auxin-portfolio' ),
                'description'       => __('If you intend to display ONLY specific portfolios, you should specify them here. You have to insert the post IDs that are separated by comma (eg. 53,34,87,25).', 'auxin-portfolio' ),
                'param_name'        => 'only_posts__in',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Include portfolios','auxin-portfolio' ),
                'description'       => __('If you intend to include additional portfolios, you should specify them here. You have to insert the Post IDs that are separated by comma (eg. 53,34,87,25)', 'auxin-portfolio' ),
                'param_name'        => 'include',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => 'textfield',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Exclude posts','auxin-portfolio' ),
                'description'       => __('If you intend to exclude specific posts from result, you should specify the posts here. You have to insert the Post IDs that are separated by comma (eg. 53,34,87,25)', 'auxin-portfolio' ),
                'param_name'        => 'exclude',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Start offset','auxin-portfolio' ),
                'description'       => __('Number of post to displace or pass over.', 'auxin-portfolio' ),
                'param_name'        => 'offset',
                'type'              => 'textfield',
                'value'             => '',
                'holder'            => 'textfield',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => 'Query',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Layout', 'auxin-portfolio'),
                'description'       => __('Different layout types of appearing items.', 'auxin-portfolio'),
                'param_name'        => 'layout',
                'type'              => 'aux_visual_select',
                'def_value'         => 'grid',
                'holder'            => '',
                'class'             => 'num',
                'value'             => array(
                    'grid'          => 'Grid',
                    'masonry'       => 'Masonry',
                    'tiles'         => 'Tiles'
                ),
                'choices'           => array (
                    'grid'          => array(
                            'label' => __('Grid', 'auxin-portfolio'),
                            'image' => AUXIN_URL . 'images/visual-select/portfolio-grid.svg'
                    ),
                    'masonry'       => array(
                            'label' => __('Masonry', 'auxin-portfolio'),
                            'image' => AUXIN_URL . 'images/visual-select/portfolio-masonry.svg'
                    ),
                    'tiles'         => array(
                            'label' => __('Tiles', 'auxin-portfolio'),
                            'image' => AUXIN_URL . 'images/visual-select/blog-layout-11.svg'
                    )
                ),
                'admin_label'       => true,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Image aspect ratio', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'image_aspect_ratio',
                'type'              => 'dropdown',
                'def_value'         => '0.75',
                'holder'            => '',
                'class'             => 'order',
                'value'             => array (
                    '0.75'          => __('Horizontal 4:3' , 'auxin-portfolio'),
                    '0.56'          => __('Horizontal 16:9', 'auxin-portfolio'),
                    '1.00'          => __('Square 1:1'     , 'auxin-portfolio'),
                    '1.33'          => __('Vertical 3:4'   , 'auxin-portfolio')
                ),
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid' )
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Portfolio hover type','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'item_style',
                'type'              => 'dropdown',
                'def_value'         => 'classic',
                'holder'            => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'edit_field_class'  => '',
                'value'             => array(
                    'classic'                => __('Classic', 'auxin-portfolio' ),
                    'classic-lightbox'       => __('Classic with lightbox style 1', 'auxin-portfolio' ),
                    'classic-lightbox-boxed' => __('Classic with lightbox style 2', 'auxin-portfolio' ),
                    'overlay'                => __('Overlay title style 1', 'auxin-portfolio' ),
                    'overlay-boxed'          => __('Overlay title style 2', 'auxin-portfolio' ),
                    'overlay-lightbox'       => __('Overlay title with lightbox style 1', 'auxin-portfolio' ),
                    'overlay-lightbox-boxed' => __('Overlay title with lightbox style 2', 'auxin-portfolio' ),
                )
            ),
            array(
                'heading'           => __('Entry Box Background Color', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'entry_background_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'entry_background_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'element' => 'layout',
                    'value'   => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Entry Box Border Color', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'entry_border_color',
                'type'              => 'colorpicker',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'entry_border_color',
                'admin_label'       => true,
                'dependency'        => array(
                    'element' => 'layout',
                    'value'   => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Portfolio tiles hover type','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'tiles_item_style',
                'type'              => 'dropdown',
                'def_value'         => 'overlay',
                'holder'            => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'tiles' )
                ),
                'weight'            => '',
                'edit_field_class'  => '',
                'value'             => array(
                    'overlay'                => __('Overlay title style 1', 'auxin-portfolio' ),
                    'overlay-boxed'          =>  __('Overlay title style 2', 'auxin-portfolio' ),
                    'overlay-lightbox'       =>  __('Overlay title with lightbox style 1', 'auxin-portfolio' ),
                    'overlay-lightbox-boxed' =>  __('Overlay title with lightbox style 2', 'auxin-portfolio' ),
                )
            ),
            array(
                'heading'           => __('Insert portfolio title','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'show_title',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Insert portfolio meta','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'show_info',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => '',
                'admin_label'       => false,
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Show filters','auxin-portfolio' ),
                'description'       => '',
                'param_name'        => 'show_filters',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => '',
                'admin_label'       => false,
                'weight'            => '',
                'group'             => 'Filter',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Filter by', 'auxin-portfolio'),
                'description'       => __('Filter by categories or tags', 'auxin-portfolio' ),
                'param_name'        => 'filter_by',
                'type'              => 'dropdown',
                'def_value'         => 'portfolio-cat',
                'holder'            => 'dropdown',
                'value'             =>array (
                    'portfolio-cat' => __('Categories', 'auxin-portfolio'),
                    'portfolio-tag' => __('Tags', 'auxin-portfolio')
                ),
                'dependency'        => array(
                    'element'       => 'show_filters',
                    'value'         => '1'
                ),
                'weight'            => '',
                'group'             => 'Filter',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Filter Control Alignment', 'auxin-portfolio'),
                'param_name'        => 'filter_align',
                'type'              => 'aux_visual_select',
                'def_value'         => 'aux-center',
                'holder'            => '',
                'choices'           => array(
                    'aux-left'      => array(
                        'label'     => __('Left' , 'auxin-portfolio'),
                        'image'     => AUXIN_URL . 'images/visual-select/filter-left.svg'
                    ),
                    'aux-center'    => array(
                        'label'     => __('Center' , 'auxin-portfolio'),
                        'image'     => AUXIN_URL . 'images/visual-select/filter-mid.svg'
                    ),
                    'aux-right'     => array(
                        'label'     => __('Right' , 'auxin-portfolio'),
                        'image'     => AUXIN_URL . 'images/visual-select/filter-right.svg'
                    )
                ),
                'dependency'        => array(
                    'element'       => 'show_filters',
                    'value'         => '1'
                ),
                'weight'            => '',
                'group'             => 'Filter',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Filter button style', 'auxin-portfolio'),
                'description'       => __('Style of filter buttons.', 'auxin-portfolio' ),
                'param_name'        => 'filter_style',
                'type'              => 'aux_visual_select',
                'def_value'         => 'aux-slideup',
                'holder'            => '',
                'dependency'        => array(
                    'element'       => 'show_filters',
                    'value'         => '1'
                ),
                'weight'            => '',
                'group'             => 'Filter',
                'edit_field_class'  => '',
                'choices'           => array(
                    'aux-slideup'      => array(
                        'label'     => __('Slide up' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterSlideUp2.webm webm'
                    ),
                    'aux-fill'    => array(
                        'label'     => __('Fill' , 'auxin-portfolio'),
                        'video_src' => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterFill.webm webm'
                    ),
                    'aux-cube'     => array(
                        'label'     => __('Cube' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterCube.webm webm'
                    ),
                    'aux-underline'     => array(
                        'label'     => __('Underline' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterUnderline.mp4 mp4'
                    ),
                    'aux-overlay'    => array(
                        'label'     => __('Float frame' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterFloatFrame.webm webm'
                    ),
                    'aux-bordered'     => array(
                        'label'     => __('Borderd' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterBordered.mp4 mp4'
                    ),
                    'aux-overlay aux-underline-anim'     => array(
                        'label'     => __('Float underline' , 'auxin-portfolio'),
                        'video_src'     => AUXPFO_ADMIN_URL . '/assets/images/preview/FilterUnderline.webm webm'
                    ),                ),
            ),
            array(
                'heading'           => __('Display like button','auxin-portfolio' ),
                'description'       => sprintf(__('Enable it to display %s like button%s on gride template blog. Please note WP Ulike plugin needs to be activaited to use this option.', 'auxin-portfolio'), '<strong>', '</strong>'),
                'param_name'        => 'display_like',
                'type'              => 'aux_switch',
                'value'             => '1',
                'holder'            => '',
                'class'             => 'display_like',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'item_style',
                    'value'         => array( 'classic', 'classic-lightbox', 'classic-lightbox-boxed' )
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Deeplink','auxin-portfolio' ),
                'description'       => __('Enables the deeplink feature, it updates URL based on page and filter status.', 'auxin-portfolio' ),
                'param_name'        => 'deeplink',
                'type'              => 'aux_switch',
                'value'             => '0',
                'class'             => '',
                'admin_label'       => false,
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Deeplink slug', 'auxin-portfolio' ),
                'description'       => __('Specifies the deeplink slug value in address bar.', 'auxin-portfolio' ),
                'param_name'        => 'deeplink_slug',
                'type'              => 'textfield',
                'value'             => uniqid('portfolio-'),
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'deeplink',
                    'value'         => '1'
                ),
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Paginate','auxin-portfolio' ),
                'description'       => __('Paginates the portfolio items', 'auxin-portfolio' ),
                'param_name'        => 'paginate',
                'type'              => 'aux_switch',
                'value'             => '1',
                'class'             => '',
                'admin_label'       => false,
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Items number perpage', 'auxin-portfolio' ),
                'param_name'        => 'perpage',
                'type'              => 'textfield',
                'value'             => '10',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'paginate',
                    'value'         => '1'
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Space', 'auxin-portfolio' ),
                'description'       => __('Specifies space between items in pixels.', 'auxin-portfolio' ),
                'param_name'        => 'space',
                'type'              => 'textfield',
                'value'             => '30',
                'holder'            => '',
                'class'             => '',
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Number of columns', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'desktop_cnum',
                'type'              => 'dropdown',
                'def_value'         => '4',
                'holder'            => '',
                'class'             => 'num',
                'value'             => array(
                    '1'  => '1' , '2' => '2'  , '3' => '3' ,
                    '4'  => '4' , '5' => '5'  , '6' => '6'
                ),
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => 'Layout',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Number of columns in tablet size', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'tablet_cnum',
                'type'              => 'dropdown',
                'def_value'         => 'inherit',
                'holder'            => '',
                'class'             => 'num',
                'value'             => array(
                    'inherit'       => 'Inherited from larger',
                    '1'  => '1', '2' => '2', '3' => '3',
                    '4'  => '4', '5' => '5', '6' => '6'
                ),
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => 'Layout',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Number of columns in phone size', 'auxin-portfolio'),
                'description'       => '',
                'param_name'        => 'phone_cnum',
                'type'              => 'dropdown',
                'def_value'         => 'inherit',
                'holder'            => '',
                'class'             => 'num',
                'value'             => array(
                    '1' => '1' , '2' => '2', '3' => '3'
                ),
                'admin_label'       => false,
                'dependency'        => array(
                    'element'       => 'layout',
                    'value'         => array( 'grid', 'masonry' )
                ),
                'weight'            => '',
                'group'             => 'Layout',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __('Extra class name','auxin-portfolio' ),
                'description'       => __('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'auxin-portfolio' ),
                'param_name'        => 'extra_classes',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => '',
                'class'             => 'extra_classes',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            )
        )
    );

    return $master_array;
}

add_filter( 'auxin_master_array_shortcodes', 'auxin_get_recent_portfolios_master_array', 10, 1 );


/**
 * Element without loop and column
 * The front-end output of this element is returned by the following function
 *
 * @param  array  $atts              The array containing the parsed values from shortcode, it should be same as defined params above.
 * @param  string $shortcode_content The shorcode content
 * @return string                    The output of element markup
 */
function auxin_widget_recent_portfolios_grid_callback( $atts, $shortcode_content = null ){

    global $aux_content_width;

    // Defining default attributes
    $default_atts = array(
        'title'                       => '', // header title
        'cat'                         => ' ',
        'num'                         => '8', // max generated entry
        'only_posts__in'              => '', // display only these post IDs. array or string comma separated
        'include'                     => '', // include these post IDs in result too. array or string comma separated
        'exclude'                     => '', // exclude these post IDs from result. array or string comma separated
        'posts_per_page'              => -1,
        'offset'                      => '',
        'paged'                       => '',
        'order_by'                    => 'date',
        'order'                       => 'DESC',
        'exclude_without_media'       => 0,
        'display_like'                => 1,
        'deeplink'                    => 0,
        'deeplink_slug'               => uniqid('portfolio-'),
        'show_filters'                => 1,
        'filter_by'                   => 'portfolio-cat',
        'filter_style'                => 'aux-slideup',
        'filter_align'                => 'aux-left',
        'item_style'                  => 'classic',
        'tiles_item_style'            => 'overlay',
        'entry_background_color'      => '',
        'entry_border_color'          => '',
        'paginate'                    => 1,
        'perpage'                     => 10,
        'show_title'                  => 1,
        'show_info'                   => 1,
        'image_aspect_ratio'          => 0.75,
        'space'                       => 30,
        'desktop_cnum'                => 4,
        'tablet_cnum'                 => 'inherit',
        'phone_cnum'                  => '1',
        'layout'                      => 'grid',
        'tag'                         => '',
        'extra_classes'               => '',
        'custom_el_id'                => '',
        'reset_query'                 => true,
        'use_wp_query'                => false, // true to use the global wp_query, false to use internal custom query
        'wp_query_args'               => array(), // additional wp_query args
        'base_class'                  => 'aux-widget-recent-portfolios'
    );

    $result = auxin_get_widget_scafold( $atts, $default_atts, $shortcode_content );
    extract( $result['parsed_atts'] );

    ob_start();


    if( gettype( $cat ) === "string" ) {
        if( empty( $cat ) || $cat == " " ) {
         $tax_args = "";
        } else {
            $cat = explode( ",", $cat);
        }
    }

    if(!empty($tax_args)) {
        $tax_args = array(
            array(
                'taxonomy' => 'portfolio-cat',
                'field'    => 'term_id',
                'terms'    => $cat
            )
        );
    }

    global $wp_query;

    if( ! $use_wp_query ) {
        // create wp_query to get latest items -----------
        $args = array(
            'post_type'             => 'portfolio',
            'orderby'               => $order_by,
            'order'                 => $order,
            'offset'                => $offset,
            'paged'                 => $paged,
            'tax_query'             => $tax_args,
            'post_status'           => 'publish',
            'posts_per_page'        => $posts_per_page,
            'ignore_sticky_posts'   => 1,

            'include_posts__in'     => $include, // include posts in this list
            'posts__not_in'         => $exclude, // exclude posts in this list
            'posts__in'             => $only_posts__in, // only posts in this list

            'exclude_without_media' => $exclude_without_media
        );

        // ---------------------------------------------------------------------

        // add the additional query args if available
        if( $wp_query_args ){
            $args = wp_parse_args( $args, $wp_query_args );
        }

        // pass the args through the auxin query parser
        $wp_query = new WP_Query( auxin_parse_query_args( $args ) );
    }

    $post_counter       = 0;
    $items_classes      = '';
    $isoxin_attrs       = '';
    $item_classes       = '';
    $isotope_id         = uniqid();
    $phone_break_point  = 767;
    $crop               = true;
    $isotop_layout      = 'fitRows';
    $is_tiles           = 'tiles' == $layout;

    // widget header ------------------------------
    echo $result['widget_header'];
    echo $result['widget_title'];

    if ( 'masonry' == $layout ) {
        $crop = false;
        $isotop_layout = 'masonry';
    } elseif ( $is_tiles ) {
        // in tiles we use tiles_item_style instead
        $item_style = $tiles_item_style;
        $isotop_layout = 'packery';
        $space = 0;
    }

    // check item style and define related variables
    switch ( $item_style ) {
        case 'classic-lightbox':
            $frame_effect_classes = 'aux-frame-darken aux-frame-zoom';
            $hover_classes = 'aux-hover-active aux-hover-twoway';
            $show_lightbox = true;
            $tamplate_file = 'column';
            break;
        case 'classic-lightbox-boxed':
            $frame_effect_classes = 'aux-frame-boxed-darken aux-frame-zoom';
            $hover_classes = 'aux-hover-active aux-hover-twoway';
            $show_lightbox = true;
            $tamplate_file = 'column';
            break;
        case 'overlay':
            $frame_effect_classes = 'aux-frame-darken aux-frame-zoom';
            $hover_classes = 'aux-hover-active';
            $show_lightbox = false;
            $tamplate_file = 'column-overlay';
            break;
        case 'overlay-boxed':
            $frame_effect_classes = 'aux-frame-boxed-darken' . ( $is_tiles ? '' : ' aux-frame-zoom');
            $hover_classes = 'aux-hover-active';
            $show_lightbox = false;
            $tamplate_file = 'column-overlay';
            break;
        case 'overlay-lightbox':
            $frame_effect_classes = 'aux-frame-darken' . ( $is_tiles ? '' : ' aux-frame-zoom');
            $hover_classes = 'aux-hover-active aux-hover-twoway';
            $show_lightbox = true;
            $tamplate_file = 'column-overlay';
            break;
        case 'overlay-lightbox-boxed':
            $frame_effect_classes = 'aux-frame-boxed-darken' . ( $is_tiles ? '' : ' aux-frame-zoom');
            $hover_classes = 'aux-hover-active aux-hover-twoway';
            $show_lightbox = true;
            $tamplate_file = 'column-overlay';
            break;
        default:
            $frame_effect_classes = '';
            $hover_classes = '';
            $show_lightbox = false;
            $tamplate_file = 'portfolio-column';
    }

        // generate columns class
    if ( $is_tiles ) {
        $items_classes = 'aux-tiles-layout aux-isotope-animated aux-portfolio-columns';
        $column_media_width = auxin_get_content_column_width( 4, $space );
    } else {
        $tablet_cnum = ('inherit' == $tablet_cnum  ) ? $desktop_cnum : $tablet_cnum ;
        // $tablet_cnum = 'inherit' != $tablet_cnum ? $tablet_cnum : $desktop_cnum;
        // $phone_cnum  = 'inherit' != $phone_cnum  ? $phone_cnum : $tablet_cnum;

        $items_classes = 'aux-isotope-layout aux-layout-grid aux-isotope-animated aux-no-gutter aux-portfolio-columns aux-row';
        $items_classes .= ' aux-de-col' . $desktop_cnum;
        $items_classes .= ' aux-tb-col' . $tablet_cnum;
        $items_classes .= ' aux-mb-col' . $phone_cnum;
        $column_media_width  = auxin_get_content_column_width( $desktop_cnum, 15 );
        $column_media_height = 'masonry' == $layout ? 0 : $column_media_width * $image_aspect_ratio;
    }

    if ( $show_lightbox ) {
        $items_classes .= ' aux-lightbox-gallery';
    }

    // apply boxed style to items
    $is_boxed = in_array( $item_style, array( 'classic', 'classic-lightbox', 'classic-lightbox-boxed' ) ) && ( $entry_background_color || $entry_border_color );

    $isoxin_attrs   = 'data-lazyload="true" data-space="'.$space.'" data-pagination="'. ( $paginate ? 'true' : 'false' ) . '" data-deeplink="'. ( $deeplink ? 'true' : 'false' ) . '"';
    $isoxin_attrs  .= 'data-slug="' . $deeplink_slug . '" data-perpage="' . $perpage . '" data-layout="' . $isotop_layout . '"';

    $have_posts = $wp_query->have_posts();

    if( $have_posts ){

        // show filters
        if ( $show_filters ) {

            $terms = get_terms(
                array(
                    'taxonomy'   => $filter_by,
                    'orderby'    => 'count',
                    'hide_empty' => true
                )
            );


            if ( $terms ) {
                ?><div class="aux-filters <?php echo $filter_style . ' ' . $filter_align; ?> aux-togglable aux-isotope-filters" data-isotope="<?php echo $isotope_id; ?>"><div class="aux-select-overlay"></div><ul><?php
                echo '<li data-filter="all"><a href="#"><span data-select="'.__('all', 'auxin-portfolio').'">'.__('all', 'auxin-portfolio').'</span></a></li>';
                foreach ( $terms as $term ) {
                    if( $filter_by === "portfolio-cat" ) {

                        if( (! is_array($cat) ) && !( empty($cat) || $cat == " " ) ) {
                            $cat = array($cat);
                        }

                        if ( ( empty($cat) || $cat == " " ) || in_array($term->term_id, $cat) ) {
                            echo '<li data-filter="iso-filter-'.$term->name.'"><a href="#"><span data-select="'.$term->name.'">'.$term->name.'</span></a></li>';
                        }
                    } else {
                         echo '<li data-filter="iso-filter-'.$term->name.'"><a href="#"><span data-select="'.$term->name.'">'.$term->name.'</span></a></li>';
                    }
                }
                ?></ul></div><?php
            }
        }

        ?>
        <div id="<?php echo $isotope_id; ?>" class="<?php echo $items_classes?>" <?php echo $isoxin_attrs ?>>
        <div class="aux-items-loading">
            <div class="aux-loading-loop">
              <svg class="aux-circle" width="100%" height="100%" viewBox="0 0 42 42">
                <circle class="aux-stroke-bg" r="20" cx="21" cy="21" fill="none"></circle>
                <circle class="aux-progress" r="20" cx="21" cy="21" fill="none" transform="rotate(-90 21 21)"></circle>
              </svg>
            </div>
        </div>

         <?php
        while ( $wp_query->have_posts() ) {

            // break the loop if it is reached to the limit
            if ( $num == '' || $post_counter < $num ) {
                $post_counter ++;
            } else {
                break;
            }

            $wp_query->the_post();
            $post = $wp_query->post;
            $item_classes = '';

            if ( $is_tiles ) {
                $item_pattern_info = auxin_get_tile_pattern( 'default', $post_counter - 1, $column_media_width );
                $post_vars = auxpfo_get_portfolio_config(
                    $post,
                    array(
                        'request_from'       => 'archive',
                        'media_width'        => $phone_break_point,
                        'media_size'         => $item_pattern_info['size'],
                        'upscale_image'      => true,
                        'preloadable_image'  => true,
                        'crop'               => true,
                        'add_image_hw'       => false, // whether add width and height attr or not
                        'image_sizes'    => $item_pattern_info['image_sizes'],
                        'srcset_sizes'   => $item_pattern_info['srcset_sizes']
                    )
                );

                $item_classes = $item_pattern_info['classname'];
                $item_inner_classes = 'aux-keep-aspect';
            } else {
                $post_vars = auxpfo_get_portfolio_config(
                    $post,
                    array(
                        'request_from'       => 'archive',
                        'media_width'        => $phone_break_point,
                        'media_size'         => array( 'width' => $column_media_width, 'height' =>  $column_media_height ),
                        'upscale_image'      => true,
                        'preloadable_image'  => true,
                        'crop'               => $crop,
                        'add_image_hw'       => true, // whether add width and height attr or not
                        'image_sizes'        => array(
                            array( 'min' => '',      'max' => '767px', 'width' => '80vw' ),
                            array( 'min' => '768px', 'max' => '992px', 'width' => '40vw' ),
                            array( 'min' => ''     , 'max' => '',      'width' => round( $column_media_width ) .'px' )
                        ),
                        'srcset_sizes'  => array(
                            array( 'width' =>     $column_media_width, 'height' =>     $column_media_height ),
                            array( 'width' => 2 * $column_media_width, 'height' => 2 * $column_media_height ),
                            array( 'width' => 4 * $column_media_width, 'height' => 4 * $column_media_height )
                        )
                    )
                );
                $item_classes = 'aux-col';
                $item_inner_classes = '';
            }

            extract( $post_vars );

            if ( !$has_attach ) {
                $post_counter --;
                continue;
            }

            if ( $show_filters ) {
                $filters = wp_get_post_terms( $post->ID, $filter_by );
                foreach ( $filters as $filter ) {
                    $item_classes .= ' iso-filter-'. $filter->name;
                }
            }

            // boxed appearance
            if ( $is_boxed ) {
                $item_classes .= ' aux-entry-boxed';
            }

            // Lightbox attributes
            if ( $show_lightbox ) {
                $attach_id = get_post_thumbnail_id($post->ID);
                $image_primary_meta = wp_get_attachment_metadata( $attach_id );
                $lightbox_attrs = 'data-original-width="' . $image_primary_meta['width'] . '" data-original-height="' . $image_primary_meta['height'] . '" ' .
                                  'data-caption="' . auxin_attachment_caption( $attach_id ) . '"';
            }

            if ( $paginate && $post_counter > $perpage ) {
                ?><div class="aux-iso-item aux-iso-hidden aux-loading <?php echo $item_classes; ?>"><?php
            } else {
                ?><div class="aux-iso-item aux-loading <?php echo $item_classes; ?>"><?php
            }
            include auxin_get_template_file( 'theme-parts/entry/portfolio', $tamplate_file, AUXPFO()->template_path() );
            ?></div><?php
        }
    ?>
        </div>
    <?php

        if ( $is_boxed ) {
            // Set background color style
            $entry_background_color = $entry_background_color   ? "background-color: $entry_background_color;" : '';
            // Set border color style
            $entry_border_color     = $entry_border_color       ? "border-color: $entry_border_color;" : '';

            if ( !empty( $entry_background_color ) || !empty( $entry_border_color ) ) {
                echo sprintf(
                    '<style>
                    .page .aux-widget-recent-portfolios .entry-main  { %s %s }
                    </style>',
                    $entry_background_color,
                    $entry_border_color
                );
            }
        }

    } // End if have_posts

    if( $reset_query ){
        wp_reset_query();
    }

    // return false if no result found
    if( ! $have_posts ){
        ob_get_clean();
        return false;
    }

    // widget footer ------------------------------
    echo $result['widget_footer'];

    return ob_get_clean();
}
