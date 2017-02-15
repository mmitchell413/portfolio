<!DOCTYPE html>

<html>
    <head>

        <?php include 'functions.php' ?>
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- CSS -->
        <link rel="stylesheet" href=<?php echo $STYLESHEET_URL; ?> type="text/css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Recaptcha script -->
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MT5WSX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MT5WSX');</script>
        <!-- End Google Tag Manager -->

    </head>

    <body>
        <div class="<?php
                    $current_page = basename($_SERVER['PHP_SELF']);
                    if($current_page == "portfolio.php" || $current_page == "case-gmf.php"){
                        echo "top-nav top-nav__portfolio";
                    }else{
                        echo "top-nav";
                    }
                ?>">
                <?php $current_page = basename($_SERVER['PHP_SELF']);
                  if($current_page == "portfolio.php" || $current_page == "case-gmf.php"){
                      echo "<div class='alert'><p>Portfolio is still under construction. Updates are being made.</p></div>";
                  }
                ?>
            <div class="faux-column">
                <div class="logo">
                    <a href="index.php">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="542px" height="542px" viewBox="0 0 542 542" enable-background="new 0 0 542 542" xml:space="preserve">
                    <g>
                        <defs>
                            <rect id="SVGID_1_" width="542" height="542"/>
                        </defs>
                        <clipPath id="SVGID_2_">
                            <use xlink:href="#SVGID_1_"  overflow="visible"/>
                        </clipPath>

                            <path class="logo-hover" clip-path="url(#SVGID_2_)" fill="none" stroke-width="45" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M95.5,349V220.327c0,0,0.207-84.274,83.898-84.274c83.69,0,83.102,83.479,83.102,83.479V349"/>

                            <path clip-path="url(#SVGID_2_)" fill="none" stroke-width="45" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M179.5,220v129c0,0-0.5,81.333,81.333,81.333C342.667,430.333,346.5,349,346.5,349V220"/>

                            <path class="logo-hover" clip-path="url(#SVGID_2_)" fill="none" stroke-width="45" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M262.5,349V220.327c0,0,0.707-84.274,84.398-84.274c83.689,0,83.602,83.479,83.602,83.479V349"/>
                    </g>
                    </svg>

                        </a>
                </div>

                <div class="top-nav__menu">
                        <ul>
                            <li><a href=<?php echo $HOME_URL; ?> class="menu__link" id="about">About<div class="top-nav__menu-highlight"></div></a></li>
                            <li><a href=<?php echo $SKILLS_URL; ?> class="menu__link" id="skills">Skills<div class="top-nav__menu-highlight"></div></a></li>
                            <li><a href=<?php echo $PORTFOLIO_URL; ?> class="menu__link" id="portfolio">Portfolio<div class="top-nav__menu-highlight"></div></a></li>
                            <li><a href=<?php echo $BLOG_URL; ?> class="menu__link" id="blog">Blog<div class="top-nav__menu-highlight"></div></a></li>
                            <li><a href=<?php echo $CONTACT_URL; ?> class="menu__link" id="contact">Contact<div class="top-nav__menu-highlight"></div></a></li>
                        </ul>
                </div>
            </div>
        </div>
