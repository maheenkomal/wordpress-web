<?php

/*Theme header.
 * 
 * @package webninteentwenty
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the swiper.css if you want default styling -->

    <title>
    <?php echo get_the_title();?>
        <?php bloginfo('name') ?>
</title>
<?php  wp_head() ?>
  <!-- Add the swiper.css if you want default styling -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
<header id="header">
        <div class="container">

            <nav class="nav-design navbar navbar-expand-lg ">
    
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="container1" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>
                <a class="navbar-brand" href="index.html">
                <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
}
?>
                    <!-- <h1 class="header-logo custom-logo">YOUR LOGO
                    </h1> -->
                </a>

                <div class="navbar-collapse collapse" id="navbarNavDropdown" data-toggle="collapse">
                <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
                    <!-- <ul class="navbar-nav ">

                        <li class="nav-item">
                            <a id="link-active1" class="nav-link  link-rest " href="index.html">How it works
                            </a>

                        </li>

                        <li class="nav-item">
                            <a id="link-active2" class="nav-link link-rest " href="portfolio.html">Franchise list
                            </a>

                        </li>

                        <li class="nav-item">
                            <a id="link-active3" class="nav-link link-rest " href="Restauration.html">Franchising guide
                            </a>

                        </li>

                        <button class="btn-design">Contact</button>
                    </ul> -->
                </div>

            </nav>
        </div>
        <div class="border-bottom"></div>

        <!-- //===========================Header-End=================================// -->

    </header>