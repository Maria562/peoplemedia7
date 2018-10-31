<?php
/**
 * The template for displaying the footer
 */
?>

<footer>
    <?php if (!is_page(144) && !is_page(543)) : ?>
    <div class="footer-up">
        <div class="footer-up-content container">
            <div class="row no-gutters">
                <div class="footer-up-box-left col-md-6 col-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/footer-book.png" alt="footer-up">
                </div>
                <div class="footer-up-box-right col-md-6 col-12">
                    <h3>   <?php echo pll_e('WINE ROUTE VISITOR GUIDE')?>
                    </h3>
                    <hr>
                   <p>
                       <?php echo pll_e('Footer_paragraph1')?>
                   </p>
                    <p>
                        <?php echo pll_e('Footer_paragraph2')?>
                    </p>



                    <?php $currentLanguage  = get_bloginfo('language');

                    if ( $currentLanguage == "hy-AM" ) :  ?>
                       <a href="https://view.joomag.com/%D5%80%D5%8E%D5%80-%D5%B4%D5%B8%D6%82%D5%AC%D5%BF%D5%AB%D5%B4%D5%A5%D5%A4%D5%AB%D5%A1-%D5%A7%D5%AC-%D5%A3%D6%80%D6%84%D5%A5%D6%80%D5%AB-%D5%B7%D5%A1%D6%80%D6%84-%D4%B3%D5%AB%D6%80%D6%843-%D5%8E%D5%A1%D5%B5%D5%B8%D6%81-%D5%81%D5%B8%D6%80/0709107001498552710?short" target="_blank"> <button><?php echo pll_e('Download')?></button></a>
                    <?php endif; ?>
                    <?php if ( $currentLanguage == "en-US" ) :  ?>
                       <a href="https://view.joomag.com/avc-multimedia-e-book-series-ebook4-vayots-dzor/0514237001496663091?short" target="_blank"> <button><?php echo pll_e('Download')?></button></a>
                    <?php endif; ?>



                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="footer-down">
        <div class="footer-down-content container">
            <div class="row no-gutters">
                <div class="footer-down-box col-lg-3 col-md-6 col-12">
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>info@vayotsdzorwineroute.com</p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>+37455050139</p>

                    <div class="footer-social">
                        <a href="https://www.facebook.com/VayotsDzorWineRoute/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/vayotsdzorwineroute4085/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="footer-down-box menu-mobile col-md-6 col-12">
                    <?php  wp_nav_menu(array('theme_location' => 'mobile-menu', 'container_class' => '', 'container_id' => '', 'menu_class' => '')); ?>
                </div>
                <div class="footer-down-box menu-web col-md-3 col-sm-6 col-12">
                    <h5><?php echo pll_e('About')?></h5>
                    <?php  wp_nav_menu(array('theme_location' => 'about-menu', 'container_class' => '', 'container_id' => '', 'menu_class' => '')); ?>
                </div>
                <div class="footer-down-box menu-web col-md-3 col-sm-6 col-12">
                    <h5><?php echo pll_e('Our Wineries')?></h5>
                    <?php  wp_nav_menu(array('theme_location' => 'wineries-menu', 'container_class' => '', 'container_id' => '', 'menu_class' => '')); ?>
                </div>
                <div class="footer-down-box menu-web col-md-3 col-sm-6 col-12">
                    <h5><?php echo pll_e('Plan Your Visit')?></h5>
                    <?php  wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => '', 'container_id' => '', 'menu_class' => '')); ?>
                </div>
                <div class="footer-down-info-box col-12">
                    <div class="d-flex justify-content-sm-between justify-content-center flex-sm-nowrap flex-wrap">
                        <p><?php echo pll_e('Designed and Developed By AYYO Marketing')?></p>
                       <!-- <div>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Credits</a>
                        </div> -->
                    </div>
                </div>
                <div class="footer-down-usaid-box col-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/usaid.jpg" alt="usaid">
                    <p>
                        <?php echo pll_e('This website ')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery-3.2.1.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/popper.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/slick.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/masonry.pkgd.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/my.masonry.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/lightbox.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/script.js"></script>


<?php wp_footer(); ?>
</body>
</html>
