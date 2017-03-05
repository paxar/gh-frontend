<?php get_header(); ?>

</div>


<p>single-destinations.php page</p>

<section class="single-destinations">
    <div class="container">
        <h2 class="title">About destination</h2>
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
                <div class="post-content"><?php the_content() ?></div>
                <button class="post-button">Order this location</button>
            </article>

            <?php
        endwhile;
        ?>


    </div>

</section>

<?php get_footer() ?>


