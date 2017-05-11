<?php

/**
 * Matt functions and definitions
 *
 * @package WordPress
 * @subpackage Matt
 * @since 1.0
 */

$SITE_ROOT = "http://mattmitchell.org";
$STYLESHEET_URL = $SITE_ROOT . "/css/main.css";
$JS_URL = $SITE_ROOT . "/js/production.js";
$HOME_URL = $SITE_ROOT . "/index.php";
$CONTACT_URL = $SITE_ROOT . "/contact.php";
$BLOG_URL = $SITE_ROOT . "/blog";
$PORTFOLIO_URL = $SITE_ROOT . "/portfolio.php";
$SKILLS_URL = $SITE_ROOT . "/skills.php";

add_theme_support( 'post-thumbnails' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>
