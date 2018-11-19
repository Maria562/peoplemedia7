<?php
/**
 * The template for displaying the footer
 */
?>

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <a href="/peoplemedia/մեր-մասին/"> <h4>Մեր մասին</h4></a>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <a href="/peoplemedia/գովազդ-կայքում/">  <h4>Գովազդ կայքում</h4></a>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Կապ մեզ հետ </h4>
                <ul class="instafeed d-flex flex-wrap">
                    <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
                    <li><a href="mailto:info@peoplemedia.com"><span class="lnr lnr-envelope"></span><span>info@peoplemedia.com</span></a></li>
                </ul>
            </div>

        </div>
        <div class="footer-bottom row align-items-center">

            <div class="row ">
                <div><p><span style="text-decoration: underline;"><a href="http://peoplemedia.am'" title="peoplemedia.am">Peoplemedia.am</a></span>-ի բոլոր իրավունքները պաշտպանված են։<br>Համաձայն <span style="text-decoration: underline;"><a href="http://www.arlis.am/documentview.aspx?docid=86160" target="_blank">«Հեղինակային իրավունքի և հարակից իրավունքների մասին»</a></span>&nbsp;ՀՀ օրենքի՝ people.am-ի հոդվածներից քաղվածքների վերարտադրումը չպետք է բացահայտի հոդվածների էական մասը, ինչպես նաև պարտադիր է կայքի ակտիվ հղումի տեղադրումը և քաղվածքի վերնագրում դոմեյնի նշումը:</p></div>
            </div>
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
             &copy; <script>document.write(new Date().getFullYear());</script> peoplemedia.am
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="  col-lg-4 col-md-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/easing.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/hoverIntent.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/superfish.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mn-accordion.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-ui.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.nice-select.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mail-script.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".carousel-item:first").addClass("active");

    });
</script>
</body>
</html>


<?php wp_footer(); ?>
</body>
</html>
