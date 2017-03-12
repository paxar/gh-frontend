<?php /* Template Name: boats */ ?>

<?php get_header() ?>
</div>

<section id="boats" class="boats">
    <div class="container">

        <h2 class="title"><?php echo get_theme_mod('page_boat_title', 'FEATURED BOATS'); ?></h2>
        <p class="subtitle"><?php echo get_theme_mod('page_boat_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et'); ?></p>


        <?php

        $args = array(
            'post_type' => 'boats'
        );

        $query = new WP_Query( $args );

        if ($query -> have_posts()) :


            while ($query -> have_posts()) : $query -> the_post();
                ?>


                <div class="boats-item gallery-item modal-boats-1 col-xs-12 col-sm-6">
                    <div class="img-wrap">

                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large', ['class' => 'gallery-item-img']); ?>

                            <?php endif; ?>
                        </a>
                    </div>

                    <a class="gallery-item-link"
                       href="<?php the_permalink(); ?>"> <?php echo get_post_meta($post->ID, 'price', true); ?> /
                        day</a>

                    <div class="gallery-item-info">
                        <h3> <?php the_title(); ?> </h3>

                        <span class="item-location"><i
                                    class="icon-location"></i><?php echo get_post_meta($post->ID, 'location', true); ?></span>
                        <span class="item-peoples"><i
                                    class="icon-peoples"></i><?php echo get_post_meta($post->ID, 'pass', true); ?>
                            Berths</span>

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
