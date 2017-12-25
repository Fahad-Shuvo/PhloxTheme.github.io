<?php
/**
 * Add metabox options for portfolio
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       http://averta.net/phlox/
 * @copyright  (c) 2010-2017 
*/

function auxpfo_metabox_fields_portfolio_related_metadata(){

    $model            = new Auxin_Metabox_Model();
    $model->id        = 'portfolio-related';
    $model->title     = __('Related Portfolio', 'auxin-portfolio');
    $model->css_class = 'aux-portfolio-related-tab';
    $model->fields    = array(

        array(
            'title'       => __('Display Related Portfolios', 'auxin-portfolio'),
            'description' => __( 'Enable it to display related porfolios section on single portfolio page.'),
            'id'          => '_display_related',
            'dependency'  => '',
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                'default'   => __('Theme Default', 'auxin-portfolio'),
                'yes'   => __('Yes', 'auxin-portfolio'),
                'no'   =>  __('No', 'auxin-portfolio'),
            )
        ),

        array(
            'title'         => __('Label of Related Section', 'auxin-portfolio'),
            'description'   => __('Specifies the label of related items section.', 'auxin-portfolio'),
            'id'            => '_related_posts_label',
            'dependency'  => array(
                array(
                     'id'      => '_display_related',
                     'value'   => array('default', 'yes'),
                     'operator'=> ''
                )
            ),
            'type'          => 'text',
            'default'       => ''
        ),

        array(
            'title'       => __('Related Items Type', 'auxin-portfolio'),
            'description' => __( 'Specifies the appearance type for related portfolio element.'),
            'id'          => '_related_posts_preview_mode',
            'dependency'  => array(
                array(
                     'id'      => '_display_related',
                     'value'   => array('default', 'yes'),
                     'operator'=> ''
                )
            ),
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                'default'   => __('Theme Default', 'auxin-portfolio'),
                'grid'   => __('Grid', 'auxin-portfolio'),
                'carousel'   =>  __('Carousel', 'auxin-portfolio'),
            )
        ),

        array(
            'title'       => __('Number of Columns', 'auxin-portfolio'),
            'description' => '',
            'id'          => '_related_posts_column_number',
            'dependency'  => array(
                array(
                     'id'      => '_display_related',
                     'value'   => array('default', 'yes'),
                     'operator'=> ''
                )
            ),
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                'default'   => __('Theme Default', 'auxin-portfolio'),
                '2'   =>  '2',
                '3'   =>  '3',
                '4'   =>  '4'
            )
        ),

        array(
            'title'       => __('Align Center', 'auxin-portfolio'),
            'description' => __( 'Enable it to make related portfolios section text center.'),
            'id'          => '_related_posts_align_center',
            'dependency'  => array(
                    array(
                         'id'      => '_display_related',
                         'value'   => array('default', 'yes'),
                         'operator'=> ''
                    )
            ),
            'type'        => 'select',
            'default'     => 'default',
            'choices'     => array(
                'default' => __('Theme Default', 'auxin-portfolio'),
                'yes'   => __('Yes', 'auxin-portfolio'),
                'no'   =>  __('No', 'auxin-portfolio'),
            )
        ),

        array(
            'title'       => __('Full Width Related Section', 'auxin-portfolio'),
            'description' => __( 'Enable it to make related portfolios section full width.' ),
            'id'          => '_related_posts_full_width',
            'dependency'  => array(
                    array(
                         'id'      => '_display_related',
                         'value'   => array('default', 'yes'),
                         'operator'=> ''
                    )
            ),
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                'default'   => __('Theme Default', 'auxin-portfolio'),
                'yes'   => __('Yes', 'auxin-portfolio'),
                'no'   =>  __('No', 'auxin-portfolio'),
            )
        ),

        array(
            'title'       => __('Snap Related Items', 'auxin-portfolio'),
            'description' => __( 'Enable it to remove space between related portfolio items.' ),
            'id'          => '_related_posts_snap_items',
            'dependency'  => array(
                    array(
                         'id'      => '_display_related',
                         'value'   => array('default', 'yes'),
                         'operator'=> ''
                    )
            ),
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                'default'   => __('Theme Default', 'auxin-portfolio'),
                'yes'   => __('Yes', 'auxin-portfolio'),
                'no'   =>  __('No', 'auxin-portfolio'),
            )
        ),

        array(
            'title'       => __('Display Portfolio Categories', 'auxin-portfolio'),
            'description' => __( 'Enable it to display the categories of each portfolio item in related portfolios section.'),
            'id'          => '_related_posts_display_taxonomies',
            'dependency'  => array(
                    array(
                         'id'      => '_display_related',
                         'value'   => array('default', 'yes'),
                         'operator'=> ''
                    )
            ),
            'type'          => 'select',
            'default'       => 'default',
            'choices'       => array(
                    'default'   => __('Theme Default', 'auxin-portfolio'),
                    'yes'   => __('Yes', 'auxin-portfolio'),
                    'no'   =>  __('No', 'auxin-portfolio'),
                )
        )

    );

    return $model;
}
