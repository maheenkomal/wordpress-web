<?php

/*Theme functions.
 * 
 * @package webninteentwenty
 */
?>
<?php
remove_action('wp_head', '_admin_bar_bump_cb');
?>
<?php 
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );
?>

<?php add_theme_support( 'post-thumbnails' ); ?>
<?php
function theme_support_options() {
    $defaults = array(
    'height'      => 150,
    'width'       => 250,
    'flex-height' => false, 
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
   }

   add_action( 'after_setup_theme', 'theme_support_options' );
?>

<?php

add_action( 'wp_enqueue_scripts', 'wpsites_second_style_sheet' );
function wpsites_second_style_sheet() 
 {

       wp_enqueue_style( 'style', get_stylesheet_uri());
       wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
       wp_enqueue_script('jquery'); 
       wp_enqueue_script('bootstrap-js' , get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');    
    }    

?>

<?php function project_slider() {  ?>
<?php $args = array( 
  'post_type' => 'project_slider', 
  'posts_per_page' => 10 
);
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
  <div class="swiper-container">

      <div class="swiper-wrapper">
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?> 

          <div class="swiper-slide">
              <div class="slide-info">
                  <img class="slide-img"  src="<?php echo $featured_img_url ?>" alt="missing">
                  <h6 class="sm-text"><?php the_title(); ?></h6>
              </div>
          </div>
          
<?php endwhile;
wp_reset_postdata(); ?>

</div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php } ?>

<?php add_shortcode('slider', 'project_slider');  ?>



<?php function service_post() {  ?>
<?php $args = array( 
  'post_type' => 'service_post', 
  'posts_per_page' => 6
);
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>  

          <div class="card">
                    <img class="card-img-top"  src="<?php echo $featured_img_url ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php the_title(); ?> </h5>
                        <div class="service-content">
                       <?php the_content(); ?> 
                        </div>
                    </div>
           </div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php } ?>

<?php add_shortcode('content', 'service_post');  ?>


<?php function step_post() {  ?>
<?php $args = array( 
  'post_type' => 'step_post', 
  'posts_per_page' => 6
);
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>  

      <div class="step-box">
                    <div class="step-info">
                        <h6 class="step-txt">  <?php the_title(); ?></h6>
                            <div class="step-data">
                        <?php the_content(); ?>
                        </div>
                        <p class="step-txt2"> <?php echo get_field( "card-text" ); ?>
                        </p>
                        <div class="p-next">
                          <?php if(  get_field('card-img') ): ?>
                          <img src="<?php  echo the_field('card-img'); ?>" />
                               <?php endif; ?>
                           
                        </div>
                    </div>
                    <div class="step shape">
                        <img class="step-img"  src="<?php echo $featured_img_url ?>" alt="missing">
                    </div>
                </div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php } ?>

<?php add_shortcode('content1', 'step_post');  ?>



<?php function portfolio_post() {  ?>
<?php $args = array( 
  'post_type' => 'portfolio_post', 
  'posts_per_page' => 5
);
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>  

      <div class="card">
      <?php if(  get_field('portfolio-icon') ): ?>
          <img  class="quote-image" src="<?php  echo the_field('portfolio-icon'); ?>" />
        <?php endif; ?>
                
                <p class="quote-text"> <?php echo get_field( "portfolio-txt" ); ?></p>
                <div class="card-body">
                    <!-- Button to Open the Modal -->
                    <img class="modal-img"  src="<?php echo $featured_img_url ?>" alt="missing" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>">
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal-<?php the_ID(); ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">

                               <?php 
                                $link = get_field('portfolio-video');
                                if( $link ): ?>
                                  <object class="modal-video" data="<?php echo esc_url( $link); ?>">  </object> 
                                <?php endif; ?>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title"><?php the_title(); ?></h5>
              
                      <div class="portfolio-data">
                      <?php the_content(); ?>
                      </div>
                
                </div>
            </div>

<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php } ?>

<?php add_shortcode('content2', 'portfolio_post');  ?>


<?php function register_custom_widget_area() {
register_sidebar(
array(
'id' => 'new-widget-area',
'name' => esc_html__( 'My new widget area', 'theme-domain' ),
'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
'after_title' => '</h3></div>'
)
);
}
add_action( 'widgets_init', 'register_custom_widget_area' );?>


<?php function register_custom_widget_area1() {
register_sidebar1(
array(
'id' => 'new-widget-area1',
'name' => esc_html__( 'My new widget area1', 'theme-domain' ),
'description' => esc_html__( 'A new widget area1 made for testing purposes', 'theme-domain' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
'after_title' => '</h3></div>'
)
);
}
add_action( 'widgets_init1', 'register_custom_widget_area1' );?>