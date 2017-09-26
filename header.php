<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <title>
        <?php if( is_home() ) {
            echo get_bloginfo('name');
        } else if ( is_single() ) {
            echo the_title();
        } else {
            echo get_bloginfo('name');
        } ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="c ontainer">
            <div class="row">
                <div class="logo col-xs-12 col-sm-12">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/banner.jpg" alt="Tanias blog logo"></a>
                </div>
                <!--<div class="redes-sociales col-xs-12 col-sm-6">
                    <a class="youtube" href="http://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                </div>-->
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu_class' =>'',
                        'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                        'theme_location' => 'menu-top'
                    )); ?>
                </div>
            </div>
        </nav>
        <!--<div class="ad container hidden-xs">
            <div class="row">
                <div class="ad col-md-12">
                    <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="">
                </div>
            </div>
        </div>-->
    </header>