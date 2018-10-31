<?php
/**
 * The header for Wine Route

 */

global $post; global $wp;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<?php if (is_front_page()) : ?>
		<meta name="description" content="Vayots Dzor Wine Route" />
		<meta name="keywords" content="wine, winery, Vayots Dzor" />
	<?php else: ?>
		<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
		<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />
	<?php endif; ?>

	<META NAME="Robots" content="ALL">
	<meta name="author" content="Vayots Dzor Wine Route">
	<meta name="copyright" content="Vayots Dzor Wine Route">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta property="place:location:latitude" content="13.062616"/>
	<meta property="place:location:longitude" content="80.229508"/>
	<meta property="business:contact_data:street_address" content="Vayots Dzor"/>
	<meta property="business:contact_data:locality" content="Vayots Dzor"/>
	<meta property="business:contact_data:postal_code" content=""/>
	<meta property="business:contact_data:country_name" content="Armenia"/>
	<meta property="business:contact_data:email" content=""/>
	<meta property="business:contact_data:phone_number" content=""/>
	<meta property="business:contact_data:website" content=""/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:site" content="Vayots Dzor Wine Route"/>
	<meta name="twitter:title" content="Vayots Dzor Wine Route">
	<meta name="twitter:description" content="Vayots Dzor Wine Route"/>
	<meta name="twitter:creator" content="Vayots Dzor Wine Route"/>
	<meta name="twitter:image:src" content="/wp-content/uploads/2017/11/wineries-b.png"/>
	<meta name="twitter:domain" content="http://wine.be-alternative.info"/>
	<meta name="application-name" content=""/>
	<meta name="msapplication-TileColor" content="#1abc9c"/>


	<?php if (is_single()) : ?>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:description" content="<?php   echo $post->post_excerpt; ?>"/>
		<meta property="og:type" content="page"/>
		<meta property="og:url" content="<?php echo get_permalink(); ?>"/>
		<meta property="og:image" content="<?php echo get_field('front_page_image'); ?>"/>
	<?php  elseif (is_page()):  ?>
		<meta property="og:title" content="<?php get_the_title($post->ID); ?>"/>
		<meta property="og:description" content="  <?php the_field('short_description',$post->ID); ?>"/>
		<meta property="og:type" content="page"/>
		<meta property="og:url" content="<?php echo home_url( $wp->request ); ?>"/>
		<?php if (have_rows('add_images',$post->ID)) : ?>
			<?php while (have_rows('add_images',$post->ID)) : the_row(); ?>
				<meta property="og:image" content="<?php the_sub_field('image'); ?>"/>
			<?php endwhile; ?>
		<?php endif; ?>

	<?php else: ?>
		<meta property="og:title" content="Vayots Dzor Wine Route"/>
		<meta property="og:description" content="Vayots Dzor Wine Route"/>
		<meta property="og:type" content="page"/>
		<meta property="og:url" content="http://wine.be-alternative.info"/>
		<meta property="og:image" content="/wp-content/uploads/2017/11/wineries-b.png"/>
	<?php endif; ?>

	<?php if (is_front_page()) : ?>
		<title>Vayots Dzor Wine Route</title>
	<?php else: ?>
		<title>Vayots Dzor Wine Route - <?php the_title(); ?> </title>
	<?php endif; ?>

	<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/wineroute/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/wineroute/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/wineroute/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/wineroute/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/wineroute/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/wineroute/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/wineroute/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/wineroute/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/wineroute/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/wineroute/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/wineroute/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/wineroute/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/wineroute/favicon/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/wineroute/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/new.css">

	<?php $currentLanguage  = get_bloginfo('language');

	if ( $currentLanguage == "hy-AM" ) :  ?>
         <style>
            

body {
  font-family: "Montserrat L", sans-serif !important;
}

.home-section article h3, .intro-content h1 {
  font-family: "Montserrat B", sans-serif !important;
}

.intro-content p {
  font-family: "Montserrat M", sans-serif !important;

}

.info-content h3, .page-content h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.info-content p, .page-content p {
  font-family: "Montserrat M", sans-serif !important;
}
.page-content button {
  font-family: "Montserrat L", sans-serif !important;
}

.our-wines-box h3, .visit-places-box a {
  font-family: "Montserrat B", sans-serif !important;
}

.page-content button {
  font-family: "Montserrat L", sans-serif !important;
}

.our-wines-box h3, .visit-places-box a {
  font-family: "Montserrat B", sans-serif !important;
}
.our-wines-box p {
  font-family: "Montserrat M", sans-serif !important;
}

.visit-guide-box h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.visit-guide-box p {
  font-family: "Montserrat M", sans-serif !important;
}

.visit-guide-box button {
  font-family: "Montserrat L", sans-serif !important;
}

.see-also-caption h3, .see-also-content h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.see-also-caption p {
  font-family: "Montserrat M", sans-serif !important;
}

.see-also-caption button {
  font-family: "Montserrat L", sans-serif !important;
}

.itineraries-action-box h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.itineraries-action-box p {
  font-family: "Montserrat M", sans-serif !important;
}

.itineraries-action-box button {
  font-family: "Montserrat L", sans-serif !important;
}

.visit-site-intro-content p {
  font-family: "Montserrat M", sans-serif !important;
}

.visit-site-content h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.visit-site-content p {
  font-family: "Montserrat M", sans-serif !important;
}

.visit-site-info p {
  font-family: "Montserrat B", sans-serif !important;
}

.visit-site-info p span {
  font-family: "Montserrat L", sans-serif !important;
}

.home-carousel-caption h2 {
  font-family: "Montserrat M ", sans-serif !important;
}

.home-action-content button {
  font-family: "Montserrat L", sans-serif !important;
}

.footer-up-box-right h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.footer-up-box-right button {
  font-family: "Montserrat L", sans-serif !important;
}

.footer-down-box h5 {
  font-family: "Montserrat B", sans-serif !important;
}

.into-content-new h3 {
  font-family: "Montserrat B", sans-serif !important;
}

.into-content-new p {
  font-family: "Montserrat M", sans-serif !important;
}

.home-trail-box .map-info h4, .home-trail-box .map-info p {
  font-family: "Montserrat B", sans-serif !important;
}

             .navbar-collapse .navbar-nav .nav-item .nav-link {
                 font-size: 17px;
               
               
             }

             .navbar-collapse .navbar-nav .dropdown-menu .dropdown-item {
                 font-size: 17px;
             }

             .navbar-collapse .navbar-nav .dropdown-menu .nav-item {
                 height: 33px;
             }
.visit-guide-box button, .itineraries-action-box button {
    font-size: 26px;
}

.footer-down-usaid-box p {
    font-size: 12px;
    line-height: 1.2;
}

.footer-up-box-right p {
    font-size: 16px;
}

.footer-down-box ul li a {
    font-size: 16px;
}
             
         </style>
	<?php endif; ?>

      <style>
.discovery {
    color: inherit;
    cursor: default;
}

.discovery:hover {
	text-decoration: none;
}



@media only screen and (min-width: 992px)  {
   .menu-item-1053-en , .menu-item-1053-hy {
   display: none;	
}

.navbar-collapse .navbar-nav .nav-item .nav-link {
    padding: 53px 5px 0;
}

}



      </style>

</head>

<body>



<?php if (is_front_page()): ?>
<header class="home-header home">
	<div class="header-content container">
		<nav class="navbar navbar-expand-lg navbar-light">
          <?php if ( $currentLanguage == "hy-AM" ) :  ?>
             <a class="navbar-brand" href="/hy">
          <?php else : ?>
            <a class="navbar-brand" href="/">
          <?php endif; ?> 
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-logo.png" alt="Header Logo">
			</a>
          
        
  
				

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			<?php  wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarSupportedContent', 'menu_class' => 'navbar-nav mr-auto')); ?>
            <ul class="navbar-nav ml-auto nav-lang"><?php pll_the_languages();?></ul>
			</nav>
	</div>
</header>

<?php else: ?>

<header class="home other-pages">
    <div class="header-content container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <?php if ( $currentLanguage == "hy-AM" ) :  ?>
             <a class="navbar-brand" href="/hy">
          <?php else : ?>
            <a class="navbar-brand" href="/">
          <?php endif; ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-logo.png" alt="Header Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php  wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarSupportedContent', 'menu_class' => 'navbar-nav mr-auto')); ?>
            <ul class="navbar-nav ml-auto nav-lang"><?php pll_the_languages();?></ul>
        </nav>
    </div>
</header>

<?php endif ?>



