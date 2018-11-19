<?php
/**
 * The header for People Media

 */

global $post; global $wp;
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Author Meta -->
    <meta charset="utf-8">
    <?php if (is_front_page()) : ?>
        <meta name="description" content="People Media" />
        <meta name="keywords" content="people, media" />
    <?php else: ?>
        <meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
        <meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />
    <?php endif; ?>

    <META NAME="Robots" content="ALL">
    <meta name="author" content="People Media">
    <meta name="copyright" content="People Media">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="place:location:latitude" content="13.062616"/>
    <meta property="place:location:longitude" content="80.229508"/>
    <meta property="business:contact_data:street_address" content="People Media"/>
    <meta property="business:contact_data:locality" content="People Media"/>
    <meta property="business:contact_data:postal_code" content=""/>
    <meta property="business:contact_data:country_name" content="Armenia"/>
    <meta property="business:contact_data:email" content=""/>
    <meta property="business:contact_data:phone_number" content=""/>
    <meta property="business:contact_data:website" content=""/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="People Media"/>
    <meta name="twitter:title" content="People Media">
    <meta name="twitter:description" content="People Media"/>
    <meta name="twitter:creator" content="People Media"/>
    <meta name="twitter:image:src" content="/peoplemedia/wp-content/themes/peoplemedia/img/logo-small.png">
    <meta name="twitter:domain" content="http://peoplemedia.am"/>
    <meta name="application-name" content=""/>
    <meta name="msapplication-TileColor" content="#1abc9c"/>


    <?php if (is_single()) : ?>
        <meta property="og:title" content="<?php the_title(); ?>"/>
        <meta property="og:description" content="<?php   echo $post->post_excerpt; ?>"/>
        <meta property="og:type" content="page"/>
        <meta property="og:url" content="<?php echo get_permalink(); ?>"/>
        <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>"/>
    <?php  elseif (is_page()):  ?>
        <meta property="og:title" content="<?php get_the_title($post->ID); ?>"/>
        <meta property="og:description" content="  <?php the_field('short_description',$post->ID); ?>"/>
        <meta property="og:type" content="page"/>
        <meta property="og:url" content="<?php echo home_url( $wp->request ); ?>"/>
        <meta property="og:image" content="<?php get_the_post_thumbnail_url($post->ID); ?>"/>

    <?php else: ?>
        <meta property="og:title" content="People Media"/>
        <meta property="og:description" content="People Media Description"/>
        <meta property="og:type" content="page"/>
        <meta property="og:url" content="http://peoplemedia.am"/>
        <meta property="og:image" content="/peoplemedia/wp-content/themes/peoplemedia/img/logo-small.png"/>
    <?php endif; ?>

    <?php if (is_front_page()) : ?>
        <title>People Media</title>
    <?php else: ?>
        <title>People Media - <?php the_title(); ?> </title>
    <?php endif; ?>

    <!-- Favicon-->
    <link rel="shortcut icon" href="/peoplemedia/wp-content/themes/peoplemedia/img/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1935308160111969&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        <div class="news-tracker-wrap">
                            <h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                        </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
                        <li><a href="mailto:info@peoplemedia.am"><span class="lnr lnr-envelope"></span><span>info@peoplemedia.am</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="http://localhost/peoplemedia">
                        <img class="img-fluid" style="max-width: 50%;"  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-small.png" alt="">
                    </a>

                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                    <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner-ad.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
             <?php  wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => '', 'container_id' => '', 'menu_class' => 'nav-menu')); ?>
              <!--  <ul class="nav-menu">
                     <li class="menu-active"><a href="index.html">Home</a></li>
                     <li class="menu-has-children"><a href="">Մարդիկ</a>
                         <ul>
                             <li><a href="standard-post.html">Հարցազրույց</a></li>
                             <li><a href="image-post.html">Մոնոլոգ</a></li>
                             <li><a href="gallery-post.html">Տեսակետ</a></li>
                             <li><a href="video-post.html">Life story</a></li>
                             <li><a href="audio-post.html">Մոտիվացիա
                                 </a></li>
                         </ul>
                     </li>
                     <li><a href="archive.html">Archive</a></li>
                     <li><a href="category.html">Category</a></li>

                     <li><a href="about.html">About</a></li>
                     <li><a href="contact.html">Contact</a></li>
                 </ul> -->
             </nav>  <!-- #nav-menu-container -->
            <div class="navbar-right">
              <!--  <form class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
                </form> -->
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>
        </div>
    </div>
</header>




