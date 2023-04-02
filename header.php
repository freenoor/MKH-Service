<!DOCTYPE html>
<html lang="de">
<head>
    <title>MKH - Bremen</title>
    <meta charset="utf-8">
    <meta name="description" content="Michalek, Kuhz, Hollenbeck">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory')?>/assets/images/mkh_favicon.ico">
    <!--CSS-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/src/css/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/src/css/fonts.css">
    <!-- <link rel="stylesheet" href="css/ie-style.css"> -->

    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="4002b938-dcbd-4f61-95b5-9848bce67433" data-blockingmode="auto" type="text/javascript"></script>
    <!--Javascript-->
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="<?php echo get_bloginfo('template_directory')?>/src/js/custom.js"></script>
    <!--Bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <!--Slick-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/css/slick.less" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/css/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Font Awesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/brands.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/brands.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>
     <script src="https://www.google.com/recaptcha/api.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<body id="homepage">
<div class="sticky-container" id="sticky-desktop">
    <div style="position:relative">
        <ul class="sticky-container-class">
            <li class="sticky-phone">
				<a href="javascript:void(0)"><img class="sticky-icons-img" src="<?php echo get_bloginfo('template_directory')?>/assets/images/tel.svg" alt=""></a>
                <div class="content">
                    <div class="number">0421 – 598 37-0</div>
                </div>
			</li>
			<li class="line"></li>
			<li class="sticky-mail">
				<a href="javascript:void(0)"><img class="sticky-icons-img" src="<?php echo get_bloginfo('template_directory')?>/assets/images/email.svg" alt=""></a>
                <div class="content">
                    <div class="mail"><a href="mailto:info@mkh-bremen.de">info@mkh-bremen.de</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="sticky-container" id="sticky-mobile">
    <div style="position:relative">
        <ul class="sticky-container-class">
            <li class="sticky-phone">
				<a href="javascript:void(0)"><img class="sticky-icons-img mobile" src="<?php echo get_bloginfo('template_directory')?>/assets/images/tel.svg" alt=""></a>
                <div class="content">
                    <div class="number">0421 – 598 37-0</div>
                </div>
			</li>
			<li class="line"></li>
			<li class="sticky-mail">
				<a href="javascript:void(0)"><img class="sticky-icons-img mobile" src="<?php echo get_bloginfo('template_directory')?>/assets/images/email.svg" alt=""></a>
                <div class="content">
                    <div class="mail"><a href="mailto:info@mkh-bremen.de">info@mkh-bremen.de</a></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="header_block">
	
	<div class="container">	
		<div class="header_content">
			<div class="logo">
				<a class="navbar-brand" href="/">
						<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/logo-mkh.png" alt="Webiste Logo" id="siteLogo">
						<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/newLogo.svg" alt="Webiste Logo" id="otherPagesLogo">
						<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/logo-mkh-mobile.svg" alt="" class="siteLogo-mobile">
						<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/logo-mkh-mobile1.svg" alt="" class="siteLogo-mobile1">
					</a>
			</div>
		<div class="nav_search">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
				<?php
							wp_nav_menu( array( 
									'theme_location' => 'primary',  
									'container' => ''
							)); 
          ?> 
					<li class="nav-item contact_item">
						<a class="nav-link" href="#contact" bis_skin_checked="1" id="contact-btn">Kontakt <img src="https://mkh-bremen.c-1955.maxcluster.net/wp-content/uploads/2022/09/left-arrow.svg" alt=""></a>
					</li>
				</div>
			</nav>
		</div>

		<div class="hamburger-menu">
    		<input id="menu__toggle" type="checkbox">
    			<label class="menu__btn" for="menu__toggle">
      			<span></span>
    			</label>

			<ul class="menu__box navbar-nav mr-auto">
					<li class="menu__item nav-item container submenuContent"><a class="nav-link " href="/leistungen">Leistungen</a><span class="dropdown" data-toggle="#submenu1"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg" alt=""></span>
						<ul class="submenu dropdown-list" id="submenu1">
							<li><a href="/steuerberatung">Steuerberatung</a></li>
							<li><a href="/unternehmensberatung">Unternehmensberatung</a></li>
							<li><a href="/rechtsberatung">Rechtsberatung</a></li>
							<li><a href="/wirtschaftsprüfung">Wirtschaftsprüfung</a></li>
							<li><a href="/digitalisierung">Digitalisierung</a></li>
						</ul>
					</li>
					<li class="menu__item nav-item container"><a class="nav-link " href="/schwerpunkte" data-toggle="#submenu2">Schwerpunkte</a><span class="dropdown" data-toggle="#submenu2"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg" alt=""></span>
						<ul class="submenu dropdown-list" id="submenu2">
							<li><a href="/pflege">Pflege</a></li>
							<li><a href="/logistik">Logistik</a></li>
							<li><a href="/handwerk">Handwerk</a></li>
							<li><a href="/industrie">Industrie</a></li>
							<li><a href="/handel">Handel</a></li>
							<li><a href="/freiberufler">Freiberufler</a></li>
							<!-- <li><a href="/vereine-und-verbände.php">Vereine & Verbände</a></li> -->
						</ul>
					</li>
					<li class="menu__item nav-item container">
						<a class="nav-link " href="/die-kanzlei">Die Kanzlei</a>
					</li>
					<li class="menu__item nav-item container">
						<a class="nav-link " href="/aktuelles">Aktuelles</a>
					</li>
					<li class="menu__item nav-item container">
						<a class="nav-link " href="/jobs">Jobs</a>
					</li>
					<li class="menu__item nav-item contact_item container">
						<a class="nav-link" href="#contact">Kontakt <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg" alt=""></a>
					</li>
					</ul>

  			</div>

	</div>
	</div>
	</div>