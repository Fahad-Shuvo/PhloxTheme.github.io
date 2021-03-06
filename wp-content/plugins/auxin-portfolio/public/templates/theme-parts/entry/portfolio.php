<?php
    // Add class name for custom styles
    $classic_item_class_name = auxin_get_option( 'portfolio_classic_entry_box_background_color' ) ? 'aux-item-classic' : '';  
?>

                        <article <?php post_class( $classic_item_class_name ); ?> >
                            <?php if ( $has_attach ) : ?>
                            <div class="entry-media">

                                <?php echo $the_media; ?>

                            </div>
                            <?php endif; ?>

                            <div class="entry-main">

                                <header class="entry-header">
                                <?php
                                if( $show_title ) {
                                ?>
                                    <h3 class="entry-title">
                                        <a href="<?php echo !empty( $the_link ) ? $the_link : get_permalink(); ?>">
                                            <?php echo !empty( $the_name ) ? $the_name : get_the_title(); ?>
                                        </a>
                                    </h3>
                                <?php
                                } ?>
                                </header>
                                <?php
                                    if( $display_like && function_exists('wp_ulike') ){
                                        echo '<div class="comments-iconic">';
                                        wp_ulike( 'get', array( 'style' => 'wpulike-heart' ) );
                                        echo '</div>';
                                    }
                                ?> 
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
                                    <?php edit_post_link(__("Edit", 'auxin-portfolio'), '<i> | </i>', ''); ?>
                                </div>

                            </div>

                        </article>
