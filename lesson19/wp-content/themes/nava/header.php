<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet">

</head>
<body>
    <?php wp_head(); ?>

<div class="hero-bg">
    <video autoplay loop muted class="bgvideo" id="bgvideo">
        <source src="<?php bloginfo('template_directory'); ?>/img/waves.mp4" type="video/mp4">
        </source>
    </video>


    <header class="header">

        <nav class="navbar navbar-default">
            <div class="container-header">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="header-logo"><a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
                    </h1>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php wp_nav_menu( array(
                        'theme_location' => 'top-menu',
                        'container' => '',
                        'menu_class'=> 'mainmenu',
                        'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
                    ) ); ?>


                </div>
            </div>
        </nav>
    </header>