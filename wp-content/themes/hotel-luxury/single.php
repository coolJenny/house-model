<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hotel_Luxury
 */

get_header(); ?>

    <?php do_action('hotel_luxury_page_before_content'); ?>


    <div id="primary" class="content-area row">
        <div class="content-wrapper col-md-12">
            <main id="main" class="site-main col-md-12">
                <div class="row">
                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_type() );
                        ?>

                        <div class="col-md-6">

                            <?php
                            the_post_navigation();
                            ?>
                            <div class="post-heading">
                                <div class="blog-meta">
                                    <?php hotel_luxury_posted_on(); ?>
                                </div>
                            </div>
                            <?php

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;                            

                    endwhile; // End of the loop.
                    ?>
                        </div>
                </div>                
            </main><!-- #main -->
        </div>

    </div><!-- #primary -->
<?php

get_footer();
