<?php get_header(); ?>

    </div>


    <p>single-boats.php page</p>

    <section class="single-boats">
        <div class="container">
            <h2 class="title">About boat</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt
                ut labore et</p>

            <?php
            while (have_posts()) : the_post();
                ?>
                <article class="post-article">

                    <?php if (has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('large', ['class' => 'post-img']); ?>

                    <?php endif; ?>

                    <h3 class="post-title"> <?php the_title(); ?> </h3>
                    <span class="post-info"><i class="icon-location"></i><?php echo get_post_meta($post->ID,'location',true); ?></span>
                    <span class="post-info"><i class="icon-peoples"></i><?php echo get_post_meta($post->ID,'pass',true); ?> Berths</span>
                    <span class="post-info"> Price  <?php echo get_post_meta($post->ID, 'price', true); ?> / day</span>
                    <div class="post-content"><?php the_content() ?></div>
                    <button class="post-button">Order boat</button>
                </article>

                <?php
            endwhile;
            ?>


        </div>

    </section>

<?php get_footer() ?>


