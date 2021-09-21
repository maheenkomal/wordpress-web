<?php
/*Main template files.
 * 
 * @package webninteentwenty
 */

get_header();

?>
<?php get_template_part( 'template-parts/home', 'featured' ) ?>

<?php 
if ( have_posts() ) : ?>
 <?php    while ( have_posts() ) : the_post(); ?>
 <h1><?php  the_title(); ?></h1>
 <?php  endwhile; ?>
 <?php  endif; ?>

<?php
get_footer();
?>