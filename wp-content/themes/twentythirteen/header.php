<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
  <!-- Favicon -->
  <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/core-img/favicon.ico"> -->
  <link rel="icon" href="<?php the_field('favicon'); ?>">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

      <!-- Navbar Area -->
      <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="magNav">

            <!-- Nav brand -->
            <a href="<?php echo home_url(); ?>" class="nav-brand">
              <!-- <img src="<?php //echo get_template_directory_uri(); ?>/img/core-img/logo.png" alt=""> -->
              <?php //echo get_field('logo');exit(); ?>
              <img src="<?php the_field('logo', 'options'); ?>" alt="Logo">
            </a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Nav Content -->
            <div class="nav-content d-flex align-items-center">
              <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                  <?php
                    $menus = array(
                        'menu' => 'Main Menu',
                        'menu_class' => '',
                        'container'=> '',
                    );
                    wp_nav_menu($menus);
                  ?>
                  <!-- <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="archive.html">Archive</a></li>
                    <li><a href="#">Pages</a>
                      <ul class="dropdown">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="archive.html">Archive</a></li>
                        <li><a href="video-post.html">Single Video Post</a></li>
                        <li><a href="single-post.html">Single Post</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="submit-video.html">Submit Video</a></li>
                        <li><a href="login.html">Login</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Mega</a>
                      <div class="megamenu">
                        <ul class="single-mega cn-col-4">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="archive.html">Archive</a></li>
                          <li><a href="video-post.html">Single Video Post</a></li>
                          <li><a href="single-post.html">Single Post</a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="login.html">Login</a></li>
                        </ul>
                        <ul class="single-mega cn-col-4">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="archive.html">Archive</a></li>
                          <li><a href="video-post.html">Single Video Post</a></li>
                          <li><a href="single-post.html">Single Post</a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="login.html">Login</a></li>
                        </ul>
                        <ul class="single-mega cn-col-4">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="archive.html">Archive</a></li>
                          <li><a href="video-post.html">Single Video Post</a></li>
                          <li><a href="single-post.html">Single Post</a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="login.html">Login</a></li>
                        </ul>
                        <ul class="single-mega cn-col-4">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="archive.html">Archive</a></li>
                          <li><a href="video-post.html">Single Video Post</a></li>
                          <li><a href="single-post.html">Single Post</a></li>
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="login.html">Login</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul> -->
                </div>
                <!-- Nav End -->
              </div>

              <div class="top-meta-data d-flex align-items-center">
                <!-- Top Search Area -->
                <!-- <div class="top-search-area">
                  <form action="index.html" method="post">
                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                </div> -->
                <!-- Login -->
                <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                <!-- Submit Video -->
                <a href="submit-video.html" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
  <!-- ##### Header Area End ##### -->

