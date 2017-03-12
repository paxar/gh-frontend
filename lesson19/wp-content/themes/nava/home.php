<?php /* Template Name: homepage */ ?>

<?php wp_head() ?>
<?php get_header() ?>

<section class="hero">
    <div class="container">

        <h2 class="main-title"><?php bloginfo(); ?></h2>
        <p class="main-subtitle"><?php bloginfo('description'); ?></p>

        <form class="hero-form col-xs-12 col-md-offset-2 col-md-8" action="#">
            <input class="hero-form-input col-xs-12 col-md-8" type="text" name="destination"
                   placeholder="WHAT IS YOUR DESTINATION, SAILOR?">
            <button class="hero-form-button col-xs-12 col-md-4"><i class="icon-boat"></i> FIND A BOAT
            </button>
        </form>


    </div>
</section>
</div>

<section id="destination" class="destination">
    <div class="container">
        <div class="row">
            <div class="destination-info col-xs-12">
                <div class="destination-info-item">
                    <span class="item-count"><?php echo get_theme_mod('destination_count'); ?></span>
                    <span class="item-description">Destinations</span>
                </div>
                <div class="destination-info-item">
                    <span class="item-count"><?php echo get_theme_mod('cities_count'); ?></span>
                    <span class="item-description">Cities</span>
                </div>
                <div class="destination-info-item">
                    <span class="item-count"><?php echo get_theme_mod('boats_count'); ?></span>
                    <span class="item-description">Boats</span>
                </div>
                <div class="destination-info-item">
                    <span class="item-count"><?php echo get_theme_mod('sailors_count'); ?></span>
                    <span class="item-description">Sailors</span>
                </div>
            </div>
        </div>

        <h2 class="title"><?php echo get_theme_mod('home_destination_title', 'EXPLORE OUR TOP DESTINATIONS'); ?></h2>
        <p class="subtitle"><?php echo get_theme_mod('home_destination_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et'); ?></p>





        <!-----------------------------------        -->

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


        <div class="col-xs-12">
            <button class="destination-btn">EXPLORE MORE DESTINATIONS</button>
        </div>


    </div>
</section>

<section class="owner">
    <video autoplay loop muted class="bgvideo">
        <!--<source src="<?php /*bloginfo('template_directory'); */?>/img/water.mp4" type="video/mp4">
        </source>-->
    </video>
    <div class="container">

        <h2 class="main-title">HAVE YOUR OWN BOAT?</h2>
        <p class="main-subtitle">navigare necesse est, vivere non est necesse</p>

        <button class="owner-button">Make money with your boat</button>

    </div>


</section>


<section id="boats" class="boats">
    <div class="container">


        <h2 class="title"><?php echo get_theme_mod('home_boat_title', 'FEATURED BOATS'); ?></h2>
        <p class="subtitle"><?php echo get_theme_mod('home_boat_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
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

                    <a class="gallery-item-link" href="<?php the_permalink(); ?>"> <?php echo get_post_meta($post->ID,'price',true); ?>  / day</a>

                    <div class="gallery-item-info">
                        <h3> <?php the_title(); ?> </h3>

                        <span class="item-location"><i class="icon-location"></i><?php echo get_post_meta($post->ID,'location',true); ?></span>
                        <span class="item-peoples"><i class="icon-peoples"></i><?php echo get_post_meta($post->ID,'pass',true); ?> Berths</span>

                    </div>

                </div>

                <?php
            endwhile;
            wp_reset_postdata();

        else :
            echo '<p> No content </p>';

        endif;
        ?>




        <div class="col-xs-12">
            <button class="boats-btn">LOAD MORE BOATS</button>
        </div>


    </div>
</section>


<?php get_footer() ?>



