                        <article <?php post_class( 'aux-item-overlay' . ' ' . $hover_classes . '  ' . $item_inner_classes ); ?> >
                                <div class="entry-media <?php echo $frame_effect_classes . ' ' . $item_inner_classes ?>">
                                    <?php echo $the_media; ?>
                                </div>

                                <div class="aux-overlay-content">
                                    <?php if( $show_lightbox ) { ?>
                                    <div class="aux-portfolio-overlay-buttons">
                                        <div class="aux-hover-circle-plus aux-delay-2x">
                                            <a href="<?php echo auxin_get_the_attachment_url( $post->ID, 'full' )?>" <?php echo $lightbox_attrs; ?> class="aux-lightbox-btn " >
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
                                    <?php } ?>

                                    <?php if( $show_title || $show_info ) { ?>
                                    <div class="entry-main">

                                        <?php if( $show_title ) { ?>
                                        <h3 class="aux-portfolio-item-title aux-hover-move-up">
                                            <a href="<?php echo !empty( $the_link ) ? $the_link : get_permalink(); ?>">
                                                <?php echo !empty( $the_name ) ? $the_name : get_the_title(); ?>
                                            </a>
                                        </h3>
                                        <?php } ?>

                                        <?php if( $show_info ) { ?>
                                            <div class="entry-tax aux-hover-move-up aux-delay-1x">
                                                <?php // the_category(' '); we can use this template tag, but customizable way is needed! ?>
                                                <?php $tax_name = 'portfolio-cat';
                                                      if( $cat_terms = wp_get_post_terms( $post->ID, $tax_name ) ){
                                                          foreach( $cat_terms as $term ){
                                                              echo '<a href="'. get_term_link( $term->slug, $tax_name ) .'" title="'.__("View all posts in ", 'auxin-portfolio'). $term->name .'" rel="category" >'. $term->name .'</a>';
                                                          }
                                                      }
                                                ?>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <?php } ?>
                            </div>
                        </article>
