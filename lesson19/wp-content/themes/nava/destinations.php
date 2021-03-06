<?php /* Template Name: destinations */ ?>

<?php get_header() ?>


</div>


<section id="destination" class="destination">
    <div class="container">

        <h2 class="title"><?php echo get_theme_mod('page_destination_title', 'EXPLORE OUR TOP DESTINATIONS'); ?></h2>
        <p class="subtitle"><?php echo get_theme_mod('page_destination_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et'); ?></p>

        <?php dynamic_sidebar() ?>

        <?php

        $args = array(
            'post_type' => 'destination'
        );

        $query = new WP_Query( $args );

        if ($query -> have_posts()) :

            while ($query -> have_posts()) : $query -> the_post();
                ?>


                <div class="destination-item gallery-item modal-dest-2 col-xs-12 col-sm-6 col-md-4">
                    <div class="img-wrap">

                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large', ['class' => 'gallery-item-img']); ?>

                            <?php endif; ?>
                        </a>
                    </div>

                    <a class="gallery-item-link" href="<?php the_permalink(); ?>"> <?php echo get_the_date(); ?></a>

                    <div class="gallery-item-info">
                        <h3> <?php the_title(); ?> </h3>

                        <span><?php the_excerpt(); ?></span>

                    </div>

                </div>

                <?php
            endwhile;
            wp_reset_postdata();

        else :
            echo '<p> No content </p>';

        endif;
        ?>




    </div>
</section>




<?php get_footer() ?>
