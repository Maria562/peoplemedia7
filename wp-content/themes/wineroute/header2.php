<?php
/**
 * The header for Wine Route

 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Armenia</title>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
</head>

<body>

<?php if (is_front_page()): ?>
<header class="home-header home">
	<div class="header-content container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="/">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-logo.png" alt="Header Logo">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php // wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbarSupportedContent', 'menu_class' => 'navbar-nav mr-auto')); ?>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">


				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<p>About</p>
							<span>
                                    <p>About</p>
                                </span>
						</a>
						<div class="dropdown-menu" aria-labelledby="aboutDropdown">
							<a class="dropdown-item" href="/about-the-wine-trail/">About the Wine Trail</a>
							<a class="dropdown-item" href="#">About Vayots Dzor</a>
							<a class="dropdown-item" href="#">Armenia's Wine Heritage</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/our-wineries/" id="wineriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<p>Our Wineries</p>
							<span>
                                    <p>Our Wineries</p>
                                </span>
						</a>
						<div class="dropdown-menu" aria-labelledby="wineriesDropdown">
							<a class="dropdown-item" href="wineries-single.html">Areni Wine Factory</a>
							<a class="dropdown-item" href="wineries-single.html">Getnatoun Winery</a>
							<a class="dropdown-item" href="/winery/hin-areni/">Hin Areni Winery</a>
							<a class="dropdown-item" href="wineries-single.html">Old Bridge Winery</a>
							<a class="dropdown-item" href="wineries-single.html">Trinity Winery</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="/plan-your-visit/" id="visitDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						   aria-expanded="false">
							<p>Plan Your Visit</p>
							<span>
                                    <p>Plan Your Visit</p>
                                </span>
						</a>
						<div class="dropdown-menu" aria-labelledby="visitDropdown">
							<a class="dropdown-item" href="visit-vayots-dzor.html">Getting to Vayots Dzor</a>
							<a class="dropdown-item" href="#">Festivals and Events</a>
							<a class="dropdown-item" href="#">Tours</a>
							<a class="dropdown-item" href="#">B&Bs</a>
							<a class="dropdown-item" href="#">Restaurants</a>
							<a class="dropdown-item" href="#">Suggested Itineraries</a>
							<a class="dropdown-item" href="visit-vayots-dzor-travel-guide.html">Vayots Dzor Travel Guide</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							<p>Stories</p>
							<span>
                                    <p>Stories</p>
                                </span>
						</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto nav-lang">
					<li class="nav-item lang-item lang-active">
						<a class="nav-link" href="#">ENG</a>
					</li>
					<li class="nav-item lang-item">
						<a class="nav-link" href="#">ARM</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>

<?php else: ?>

<header>
    <div class="header-content container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header-logo.png" alt="Header Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <p>About</p>
                            <span>
                                    <p>About</p>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <a class="dropdown-item" href="/about-the-wine-trail/">About the Wine Trail</a>
                            <a class="dropdown-item" href="#">About Vayots Dzor</a>
                            <a class="dropdown-item" href="#">Armenia's Wine Heritage</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/our-wineries/" id="wineriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <p>Our Wineries</p>
                            <span>
                                    <p>Our Wineries</p>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="wineriesDropdown">
                            <a class="dropdown-item" href="wineries-single.html">Areni Wine Factory</a>
                            <a class="dropdown-item" href="wineries-single.html">Getnatoun Winery</a>
                            <a class="dropdown-item" href="/winery/hin-areni/">Hin Areni Winery</a>
                            <a class="dropdown-item" href="wineries-single.html">Old Bridge Winery</a>
                            <a class="dropdown-item" href="wineries-single.html">Trinity Winery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/plan-your-visit/" id="visitDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <p>Plan Your Visit</p>
                            <span>
                                    <p>Plan Your Visit</p>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="visitDropdown">
                            <a class="dropdown-item" href="visit-vayots-dzor.html">Getting to Vayots Dzor</a>
                            <a class="dropdown-item" href="#">Festivals and Events</a>
                            <a class="dropdown-item" href="#">Tours</a>
                            <a class="dropdown-item" href="#">B&Bs</a>
                            <a class="dropdown-item" href="#">Restaurants</a>
                            <a class="dropdown-item" href="#">Suggested Itineraries</a>
                            <a class="dropdown-item" href="visit-vayots-dzor-travel-guide.html">Vayots Dzor Travel Guide</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <p>Stories</p>
                            <span>
                                    <p>Stories</p>
                                </span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-lang">
                    <li class="nav-item lang-item lang-active">
                        <a class="nav-link" href="#">ENG</a>
                    </li>
                    <li class="nav-item lang-item">
                        <a class="nav-link" href="#">ARM</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?php endif ?>



