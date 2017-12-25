<?php
    // Add class name for custom styles
    $classic_item_class_name = auxin_get_option( 'portfolio_classic_entry_box_background_color' ) ? 'aux-item-classic' : '';  
?>

                        <article <?php post_class( $classic_item_class_name ); ?> >
                            <div class="<?php echo $hover_classes ?>">
                                <div class="entry-media <?php echo $frame_effect_classes ?>">
                                    <?php echo $the_media; ?>
                                </div>

                                <?php if( $show_lightbox ) { ?>
                                <div class="aux-overlay-content">
                                    <div class="aux-portfolio-overlay-buttons">
                                        <div class="aux-lightbox-btn aux-hover-circle-plus aux-delay-2x">
                                            <a href="<?php echo auxin_get_the_attachment_url( $post->ID, 'full' )?>" <?php echo $lightbox_attrs; ?> >
                                                <div class="aux-arrow-nav aux-round aux-hover-slide aux-outline aux-semi-small aux-white">
                                                    <span class="aux-overlay"></span>
                                                    <span class="aux-svg-arrow aux-medium-plus aux-white"></span>
                                                    <span class="aux-hover-arrow aux-svg-arrow aux-medium-plus"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="aux-arrow-post-link aux-hover-circle-link">
                                            <a href="<?php echo !empty( $the_link ) ? $the_link : get_permalink(); ?>">
                                                <div class="aux-arrow-nav aux-round aux-hover-slide aux-outline aux-semi-small aux-white">
                                                    <span class="aux-overlay"></span>
                                                    <span class="aux-svg-arrow aux-medium-right aux-white"></span>
                                                    <span class="aux-hover-arrow aux-svg-arrow aux-medium-right"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <?php if( $show_title || $show_info ) { ?>
                            <div class="entry-main">

                                <?php if( $show_title ) { ?>
                                <header class="entry-header">
                                    <h3 class="entry-title">
                                        <a href="<?php echo !empty( $the_link ) ? $the_link : get_permalink(); ?>">
                                            <?php echo !empty( $the_name ) ? $the_name : get_the_title(); ?>
                                        </a>
                                    </h3>
                                </header>
                                <?php } ?>
                                <?php
                                    if( $display_like && function_exists('wp_ulike') ){
                                        wp_ulike( 'get', array( 'style' => 'wpulike-heart' ) );
                                    }
                                ?>
                                <?php if( $show_info ) { ?>
                                <div class="entry-info">
                                    <span class="entry-tax">
                                        <?php // the_category(' '); we can use this template tag, but customizable way is needed! ?>
                                        <?php $tax_name = 'portfolio-cat';
                                              if( $cat_terms = wp_get_post_terms( $post->ID, $tax_name ) ){
                                                  foreach( $cat_terms as $term ){
                                                      echo '<a href="'. get_term_link( $term->slug, $tax_name ) .'" title="'.__("View all posts in ", 'auxin-portfolio'). $term->name .'" rel="category" >'. $term->name .'</a>';
                                                  }
                                              }
                                        ?>
                                    </span>
                                    <?php if( ! empty($cat_terms) ){
                                            edit_post_link(__("Edit", 'auxin-portfolio'), '<i> | </i>', '');
                                        } else {
                                            edit_post_link(__("Edit", 'auxin-portfolio'), '', '');
                                        } 
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>

                        </article>
