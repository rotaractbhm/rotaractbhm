<!doctype html>
<html class="no-js" lang="<?php bloginfo("language"); ?>">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="">
    <link rel="dns-prefetch" href="">

    <title><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo("description"); ?>">
    <meta name="author" content="<?php bloginfo("name"); ?>">

    <link rel="manifest" href="<?php bloginfo("template_url"); ?>/site.webmanifest">
    <meta name="theme-color" content="">
    <link rel="icon" href="<?php bloginfo("template_url"); ?>/assets/images/brand/icon.svg">
    <link rel="mask-icon" href="<?php bloginfo("template_url"); ?>/assets/images/brand/icon.svg" color="">
    <link rel="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/assets/images/brand/icon.png">

    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Source+Serif+Pro:ital,wght@0,600;1,600&display=swap">
    <script src="https://kit.fontawesome.com/88b6fb78f5.js" crossorigin="anonymous"></script>

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php bloginfo("name"); ?>">
    <meta property="og:url" content="<?php bloginfo("url"); ?>">
    <meta property="og:title" content="<?php wp_title(); ?>">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php bloginfo("template_url"); ?>/assets/images/brand/icon.png">
    <meta property="og:image:alt" content="<?php bloginfo("name"); ?>">
    <?php // wp_head(); ?>
  </head>
  <body>
    <header class="header" role="banner">
      <a class="logo" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/assets/images/brand/logo.svg" alt="<?php bloginfo("name"); ?>" width="auto" height="48"></a>
      <nav class="navigation" role="navigation">
        <ul class="menu visitor-menu">
          <li class="menu-item"><a href="<?php echo get_permalink("0"); ?>">About Rotaract</a></li>
          <li class="menu-item"><a href="<?php echo get_permalink("0"); ?>">Get Involved</a></li>
          <li class="menu-item"><a href="<?php echo get_permalink("0"); ?>">Our Mission</a></li>
          <li class="menu-item"><a href="<?php echo get_permalink("0"); ?>">Our Programs</a></li>
          <li class="menu-item"><a href="<?php echo get_post_type_archive_link("events"); ?>">Upcoming Events</a></li>
        </ul>
        <ul class="menu member-menu">
          <?php if (is_user_logged_in()) { ?>
            <?php if (current_user_can("manage_options")) { ?>
              <li class="menu-item"><a href="<?php echo admin_url(); ?>">Dashboard</a></li>
            <?php } ?>
            <li class="menu-item"><a href="https://birminghamrotaract.z2systems.com/np/clients/birminghamrotaract/login.jsp">Member Login</a></li>
            <li class="menu-item"><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
          <?php } else { ?>
            <li class="menu-item"><a href="https://birminghamrotaract.z2systems.com/np/clients/birminghamrotaract/login.jsp">Member Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
