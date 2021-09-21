<?php

/*Theme footer.
 * 
 * @package webninteentwenty
 */
get_footer();
?>
    <!-- //===========================About-END=================================// -->
    <footer id="footer">
        <div class="container">
            
            <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
<div id="secondary-sidebar" class="new-widget-area">
<?php dynamic_sidebar( 'new-widget-area' ); ?>
</div>

<?php endif; ?>
            <?php if ( is_active_sidebar( 'new-widget-area1' ) ) : ?>
<div id="secondary-sidebar1" class="new-widget-area1">
<?php dynamic_sidebar( 'new-widget-area1' ); ?>
</div>
<?php endif; ?>
        

        </div>
    </footer>


  <!--Add JQuery link if you want default styling  -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
        <script>
        jQuery(document).ready(function() {
            jQuery('.tap-heading li').click(function(e) {

                jQuery(this).last().removeClass('active');
                jQuery(this).next().addClass('active');

            });
            jQuery('.span3-design').click(function(e) {

                jQuery(".span3-design").removeClass('active');
                jQuery(".span-design").addClass('active');

            });

        });
    </script>
       <script>
        jQuery(document).ready(function() {
            // Assign some jquery elements we'll need
            var $swiper = jQuery(".swiper-container");
            var $bottomSlide = null; // Slide whose content gets 'extracted' and placed
            // into a fixed position for animation purposes
            var $bottomSlideContent = null; // Slide content that gets passed between the
            // panning slide stack and the position 'behind'
            // the stack, needed for correct animation style

            var mySwiper = new Swiper(".swiper-container", {
                spaceBetween: 1,
                slidesPerView: 3,
                centeredSlides: true,
                roundLengths: true,
                loop: true,
                loopAdditionalSlides: 30,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 120
                    },
                    992: {
                        slidesPerView: 1,

                    },
                    1200: {
                        slidesPerView: 3,
                    }
                },
            });
        });
    </script>
</body>
</html>