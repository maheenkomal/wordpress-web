<?php

/*Theme page.
 * 
 * @package webninteentwenty
 */
?> 
<?php
get_header();
?> 


  <!-- //===========================banner-End=================================// -->
<section id="banner">
            <div class="container">
                <div class="header-info">


                    <div class="content">
                        <h3 class="heading">
                          <?php echo get_field( "banner-heading" ); ?>
                        </h3>
                        <ul class="tap-heading">
                            <li class="span-design active"> 
                            <?php echo get_field( "tab" ); ?>
                            </li>
                            <li class="span1-design">      <?php echo get_field( "tab1" ); ?></li>
                            <li class="span2-design">      <?php echo get_field( "tab2" ); ?></li>
                            <li class="span3-design">      <?php echo get_field( "tab3" ); ?></li>
                        </ul>
                        <h5 class="text">
                        <?php echo get_field( "banner-paragraph" ); ?>
                        </h5>
            
                        <?php 
                        $link = get_field('banner-button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            ?>
                             <a href="<?php echo esc_url( $link_url ); ?> ">  <button class="button-style"><?php  echo esc_html( $link_title ); ?> 
                        <img class="span-arrow" src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Polygon 6.png" alt="missing"></button>
                      </a>
                        
                        <?php endif; ?>
                     
                    </div>


                    <div class="content1">
                
                        <img class="label-img"     <?php the_post_thumbnail(); ?>  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/brands.png" alt="missing">
                        <img class="label1-img"   src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Group 1324.png" alt="missing">
                    </div>

                </div>
            </div>
                <!-- //===========================banner-End=================================// -->
</section>
    
          <!-- //===========================Dolor1-Start=================================// -->
    <section id="dolor1">
        <div class="container">
            <h3 class="heading">Lorem Ipsum Dolor</h3>
            <div class="d-flex">
                <div class="box">
                    <img class="box-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/New folder/Group 274.png" alt="missing">
                    <h6 class="box-txt">Why location is only <span class="b-txt"> part </span> of the equation</h6>
                </div>
                <div class="box">
                    <img class="box-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/New folder/w.png" alt="missing">
                    <h6 class="box-txt">How you can expand and make a <span class="b-txt"> fortune </span></h6>
                </div>
            </div>
            <div class="d-flex">
                <div class="box">
                    <img class="box-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/New folder/Group 1326.png" alt="missing">
                    <h6 class="box-txt">Why business experience is <span class="b-txt"> NOT </span>required</h6>
                </div>
                <div class="box">
                    <img class="box-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/New folder/3442 [Converted].png" alt="missing">
                    <h6 class="box-txt">Why <span class="b-txt"> NOW </span> is the time to take action</h6>
                </div>
            </div>
        </div>
        </div>
        <!-- //===========================Dolor1-END=================================// -->
    </section>
    <!-- //===========================Dolor-Start=================================// -->
    <section id="dolor">
        <div class="container">
            <h3 class="heading"> <?php echo get_field( "dolor-heading" ); ?></h3>
            <div class="dolor-info">
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text" ); ?>
                    </h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text1" ); ?>
                    </h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text2" ); ?></h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text3" ); ?>
                    </h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text4" ); ?></h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text5" ); ?></h5>
                </div>
                <div class="d-flex">
                    <img class="check-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/check.png" alt="missing">
                    <h5 class="text"><?php echo get_field( "dolor-text6" ); ?></h5>
                </div>
            </div>
        </div>
        <!-- //===========================Dolor-End=================================// -->
    </section>
    <!-- //===========================Projects-Start=================================// -->

                  


    <section id="projects">
        <div class="container">
            <h3 class="heading"><?php echo get_field( "projects-heading" ); ?></h3>
            <h5 class="text"><?php echo get_field( "projects-text" ); ?></h5>
            <div class="projects-info">

             <?php echo do_shortcode("[slider]"); ?>   
                

            </div>
        </div>
        <!-- //===========================Projects-Start=================================// -->
    </section>
    <!-- //===========================Work-Start=================================// -->
    <section id="work">
        <div class="container">

            <div class="d-flex work-info">

                <div class="w-content">
                    <h3 class="heading"><span class="w-span"><?php echo get_field( "work-span" ); ?> </span><?php echo get_field( "work-heading" ); ?></h3>
                    <p class="p-text p1">
                    <?php echo get_field( "work-text" ); ?> </p>
                        <p class="p-text p2">
                        <?php echo get_field( "work-text1" ); ?>
                        </p>
                            <p class="p-text p3"><?php echo get_field( "work-text2" ); ?></p>
                </div>
                <div class="w-content1">
                    <img class="work-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/word-page.png" alt="missing">
                    <img class="work-img1"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/zoom-page.png" alt="missing">
                </div>
            </div>
        </div>
        <!-- //===========================Work-End=================================// -->
    </section>
    <!-- //===========================Services-Start=================================// -->
    <section id="service">
        <div class="container">
            <h3 class="heading">Lorem ipsum dolor sit amet</h3>
            <div class="card-bind">
            <?php echo do_shortcode("[content]"); ?>   

            </div>
        </div>

    <!-- //===========================Services-END=================================// -->
    </section>
    <!-- //===========================Step-START=================================// -->
    <section id="step">
        <div class="container">
            <h3 class="heading">Lorem Ipsum Dolor Sit</h3>
            <div class="step-content">
            <?php echo do_shortcode("[content1]"); ?>   
               
            </div>
            <div class="step-wrapper">
                <h3 class="heading">Lorem Ipsum <span class="span-txt">Dolor Sitttttttttt</span></h3>
                <h3 class="h3-txt heading">Dolor Sitttttttttt</h3>
                <h5 class="sm-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Integer enim neque.</h5>
            </div>
        </div>
        <!-- //===========================Step-END=================================// -->
    </section>
    <!-- //===========================Contact-START=================================// -->
    <section id="contact">
        <div class="container">
            <h3 class="heading"><?php echo get_field( "contact-heading" ); ?></h3>
            <h3 class="span-txt"><?php echo get_field( "contact-span" ); ?></h3>
            <p class="para-txt para1"><?php echo get_field( "contact-text" ); ?> </p>
            <p class="para-txt para2"><?php echo get_field( "contact-text1" ); ?></p>
            
                       <?php 
                       $link = get_field('contact-button');
                       if( $link ): 
                           $link_url = $link['url'];
                           $link_title = $link['title'];
                           ?>
                            <a href="<?php echo esc_url( $link_url ); ?> ">  <button class="button-style"><?php  echo esc_html( $link_title ); ?> 
                       <img class="span-arrow" src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Polygon 6.png" alt="missing"></button>
                     </a>
                       
                       <?php endif; ?>
            <!-- <button class="button-style">Schedule a call today!</button> -->
        </div>
        <!-- //===========================Contact-End=================================// -->
    </section>
    <!-- //===========================Stories-START=================================// -->
    <section id="stories">
        <div class="container">
            <h3 class="heading"><?php echo get_field( "stories-heading" ); ?></h3>
            <h5 class="text"><?php echo get_field( "stories-text" ); ?></h5>
        </div>
        <!-- //===========================Stories-END=================================// -->
    </section>
    <!-- //===========================Portfolio-START=================================// -->
    <section id="portfolio">

        <div class="card-bind">
        <?php echo do_shortcode("[content2]"); ?>   
        </div>

        <!-- //===========================Portfolio-END=================================// -->

    </section>
    <!-- //===========================Guaranty-START=================================// -->
    <section id="guaranty">
        <h3 class="heading"><?php echo get_field( "guaranty-heading" ); ?></h3>
        <img class="g-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/OBJECTS.png" alt="missing">
        <p class="g-para"><?php echo get_field( "guaranty-text" ); ?> </p>
        <p class="g-para p1"><?php echo get_field( "guaranty-text1" ); ?> </p>
        <p class="g-para p2"><?php echo get_field( "guaranty-text2" ); ?></p>
        <?php 
                       $link = get_field('guaranty-button');
                       if( $link ): 
                           $link_url = $link['url'];
                           $link_title = $link['title'];
                           ?>
                            <a href="<?php echo esc_url( $link_url ); ?> ">  <button class="button-style"><?php  echo esc_html( $link_title ); ?> 
                       <img class="span-arrow" src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Polygon 6.png" alt="missing"></button>
                     </a>
                       
                       <?php endif; ?>
        <!-- <button class="button-style">Schedule a call today!</button> -->
        <!-- //===========================Guaranty-END=================================// -->
    </section>
    <!-- //===========================About-END=================================// -->
    <section id="about">
        <div class="container">
            <div class="d-flex">
                <div class="content">
                    <img class="about-img"  src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Mask Group 874.png" alt="missing">
                </div>
              
                <div class="content content-1">
                    <p class="text"><?php echo get_field( "about-text" ); ?></p>
                    <p class="heading"><?php echo get_field( "about-heading" ); ?></p>
                    <?php 
                       $link = get_field('about-button');
                       if( $link ): 
                           $link_url = $link['url'];
                           $link_title = $link['title'];
                           ?>
                            <a href="<?php echo esc_url( $link_url ); ?> ">  <button class="button-style"><?php  echo esc_html( $link_title ); ?> 
                       <img class="span-arrow" src="<?php echo get_site_url(); ?>/wp-content/themes/webninteentwenty/assets/images/Polygon 6.png" alt="missing"></button>
                     </a>
                       
                       <?php endif; ?>
                    <!-- <button class="button-style">Schedule a call today!</button> -->
                </div>
            </div>
        </div>
        <!-- //===========================About-END=================================// -->
    </section>
    <?php
get_footer();
?> 