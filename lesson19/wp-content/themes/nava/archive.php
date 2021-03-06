<?php get_header(); ?>

    </div>



    <p>archive.php   page</p>


<section id="destination" class="destination">
    <div class="container">

        <h2 class="title"><?php echo get_theme_mod('page_destination_title', 'EXPLORE OUR TOP DESTINATIONS'); ?></h2>
        <p class="subtitle"><?php echo get_theme_mod('page_destination_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et'); ?></p>


        <?php if ( have_posts() ) : ?>

            <header class="archive-header">
                <?php
                the_archive_title( '<h4 class="title">', '</h4>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .archive-header -->

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>

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


        else :
            echo '<p> No content </p>';

        endif;
        ?>


    </div>
</section>




<?php get_footer() ?>
