<!doctype html>
<html class="no-js" lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="hsl(214, 72%, 20%)">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="/favicon.ico">
<!--
    <link rel="icon" sizes="180x180" href="/icon.png">
    <link rel="icon" sizes="144x144" href="/icon.png">
    <link rel="apple-touch-icon" sizes="108x108" href="/icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="108x108" href="/icon.png">
-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i|Source+Serif+Pro:600,700">
    <script async src="https://kit.fontawesome.com/88b6fb78f5.js"></script>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php bloginfo('language'); ?>">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/images/rotaract-logo.svg">
    <meta property="og:url" content="<?php bloginfo('url'); ?>">
    <?php // wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/rotaract-logo.svg" alt="<?php bloginfo('name'); ?>" width="auto" height="48"></a>
      <nav class="navigation">
        <ul class="menu menu--visitor">
          <li class="menu-item">
            <a href="<?php echo get_permalink('95'); ?>">About Rotaract</a>
            <div class="submenu submenu--about">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Birmingham&rsquo;s Premier&nbsp;Civic&nbsp;Club</h5>
                  <p>Rotaract mobilizes its members to foster responsible citizenship and catalyze positive change by offering unparalleled opportunities to learn from diverse leaders, build relationships with committed young professionals, and serve the Birmingham community and beyond.</p>
                  <p><a class="link larger" href="">Learn about our club's history<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Membership</h6>
                  <p>Graphic</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Industries</h6>
                  <p>Graphic</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Donated</h6>
                  <p>Graphic</p>
                </div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'rotaract_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_permalink('165'); ?>">Get Involved</a>
            <div class="submenu submenu--involvement">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Become a Member</h5>
                  <p>Rotaract is the premier young professional organization in Birmingham, AL where civic leaders gather and work together to fulfill the club’s motto of learn, socialize and serve. If you are a young professional in Birmingham seeking leadership, community and relationship development, we invite you to apply for membership.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('167'); ?>">Submit your application<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Application Deadlines</h6>
                  <ul>
                    <li>February 1st</li>
                    <li>June 1st</li>
                    <li>October 1st</li>
                  </ul>
                </div>
                <div class="submenu-content-section"></div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'involvement_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_permalink('163'); ?>">Our Mission</a>
            <div class="submenu submenu--purpose">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Cultivating&nbsp;Leaders. Improving&nbsp;Communities.</h5>
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('163'); ?>">Learn more<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Learn</h6>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Socialize</h6>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Serve</h6>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
                </div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'purpose_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_permalink('91'); ?>">Our Programs</a>
            <div class="submenu submenu--programs">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Signature Initiatives</h5>
                  <p>Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('91'); ?>">Learn more<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Ready to Read</h6>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Ready to Succeed</h6>
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Achieve Alabama</h6>
                  <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
                </div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'programs_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_post_type_archive_link('events'); ?>">Upcoming Events</a>
            <div class="submenu submenu--events">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Event Schedule</h5>
                  <p>The Rotaract Club of Birmingham meets on the first and third Thursdays each month at the Harbert Center in downtown Birmingham to hear from community and business leaders.</p>
                  <p><a class="link larger" href="<?php echo get_post_type_archive_link('events'); ?>">Full event calendar<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <ul class="events">
                    <?php
                      $args = [
                        "post_type"      => "events",
                        "post_status"    => "publish",
                        "posts_per_page" => 3,
                        // "orderby"        => "meta_value_num",
                        // "meta_key"       => "event_date"
                      ];
                      $events_query = new WP_Query($args);
                    ?>
                    <?php if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post(); ?>
                    <li class="event">
                      <div class="event-header">
                        <span class="event-type label" data-label-type="learn">Learn</span>
                        <time class="event-date" datetime="">
                          <div class="event-date-day">6</div>
                          <div class="event-date-month">June</div>
                        </time>
                      </div>
                      <div class="event-body">
                        <h6 class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <address class="event-location">
                          <p>The Harbert Center<br>2019 4th Ave N<br>Birmingham, AL 35203</p>
                        </address>
                      </div>
                      <div class="event-footer">
                        <a class="event-link link" href="<?php the_permalink(); ?>">Details<i class="far fa-long-arrow-right"></i></a>
                      </div>
                    </li>
                    <?php endwhile; endif; wp_reset_query(); ?>
                  </ul>
                </div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'events_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
        </ul>
        <ul class="menu menu--member">
          <?php if (is_user_logged_in()) { ?>
            <?php if (current_user_can('manage_options')) { ?>
              <li class="menu-item"><a href="<?php echo admin_url(); ?>">Dashboard</a></li>
            <?php } ?>
            <?php // echo wp_nav_menu(['theme_location' => 'member_private_menu', 'container' => false, 'menu_class' => 'member-menu']); ?>
            <li class="menu-item"><a href="<?php echo get_permalink(8); ?>">My Account&nbsp;&nbsp;<i class="far fa-angle-down"></i></a></li>
            <!-- <li class="menu-item"><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li> -->
          <?php } else { ?>
            <?php // echo wp_nav_menu(['theme_location' => 'member_public_menu', 'container' => false, 'menu_class' => 'main-menu']); ?>
            <li class="menu-item"><a href="<?php echo get_permalink(9); ?>">Member Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
