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
    <!-- <link rel="icon" sizes="180x180" href="/icon.png">
    <link rel="icon" sizes="144x144" href="/icon.png">
    <link rel="apple-touch-icon" sizes="108x108" href="/icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="108x108" href="/icon.png"> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i|Source+Serif+Pro:600,700">
    <script async src="https://kit.fontawesome.com/88b6fb78f5.js"></script>
    <!-- <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php bloginfo('language'); ?>">
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="<?php bloginfo('url'); ?>"> -->
    <?php // wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/brand/rotaract-logo.svg" alt="<?php bloginfo('name'); ?>" width="auto" height="48"></a>
      <a class="navigation-toggle"><i class="far fa-bars"></i></a>
      <nav class="navigation">
        <ul class="menu menu--visitor">
          <li class="menu-item">
            <a href="<?php echo get_permalink('95'); ?>">About Rotaract</a>
            <div class="submenu submenu--about">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Birmingham&rsquo;s Premier&nbsp;Civic&nbsp;Club</h5>
                  <p>Rotaract mobilizes its members to foster responsible citizenship and catalyze positive change by offering unparalleled opportunities to learn from diverse leaders, build relationships with committed young professionals, and serve the Birmingham community and beyond.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('95'); ?>">Learn about our club's history<i class="far fa-long-arrow-right"></i></a></p>
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
              <?php wp_nav_menu(['theme_location' => 'about_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_permalink('165'); ?>">Get Involved</a>
            <div class="submenu submenu--involvement">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Become a Member</h5>
                  <p>Rotaract is the premier young professional organization in Birmingham, AL where civic leaders gather and work together to fulfill the club’s motto of learn, socialize and serve. If you are a young professional in Birmingham seeking leadership, community and relationship development, we invite you to apply for membership.</p>
                  <!-- <p><a class="link larger" href="<?php echo get_permalink('167'); ?>">Submit your application<i class="far fa-long-arrow-right"></i></a></p> -->
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
                  <p>Rotaract mobilizes its members to foster responsible citizenship and catalyze positive change by offering unparalleled opportunities to learn from diverse leaders, bond with committed young professionals, and serve the Birmingham community and beyond.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('163'); ?>">Learn more<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Learn</h6>
                  <p>Learning from great leaders is at the core of what we do.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Socialize</h6>
                  <p>Developing meaningful connections.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Serve</h6>
                  <p>Serving the Birmingham community and beyond.</p>
                </div>
              </div>
              <?php wp_nav_menu(['theme_location' => 'purpose_menu', 'container' => false, 'menu_class' => 'submenu-nav']); ?>
            </div>
          </li>
          <li class="menu-item">
            <a href="<?php echo get_permalink('1100'); ?>">Our Programs</a>
            <div class="submenu submenu--programs">
              <div class="submenu-content">
                <div class="submenu-content-section">
                  <h5>Signature Initiatives</h5>
                  <p>Sed posuere consectetur est at lobortis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at lobortis.</p>
                  <p><a class="link larger" href="<?php echo get_permalink('1100'); ?>">Learn more<i class="far fa-long-arrow-right"></i></a></p>
                </div>
                <div class="submenu-content-section">
                  <h6>Ready to Read</h6>
                  <p>Ready to Read places a library of books and reading buddy in 2nd grade classrooms in Birmingham City Schools.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Ready to Succeed</h6>
                  <p>Ready to Succeed provides mentoring and ACT prep to prepare high school students for college.</p>
                </div>
                <div class="submenu-content-section">
                  <h6>Achieve Alabama</h6>
                  <p>Source and provide access to state specific scholarship database to help make college more affordable for AL families.</p>
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
                        "posts_per_page" => -1,
                        "orderby"        => "meta_value",
                        "order"          => "ASC",
                        "meta_query"     => [
                          [
                            "key"     => "event-end-datetime",
                            "value"   => date("Y-m-d H:i:s", strtotime("-6 hours")),
                            "compare" => ">",
                            "type"    => "DATETIME"
                          ]
                        ]
                      ];
                      $events_query = new WP_Query($args);
                    ?>
                    <?php if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post(); ?>
                    <li class="event">
                      <div class="event-header">
                        <div class="event-labels labels">
                          <?php $labels = get_the_terms(get_the_ID(), 'event-labels'); ?>
                          <?php $label = $labels[0]; ?>
                          <?php if (!empty($label)) { ?>
                          <?php // echo get_term_link($label); ?>
                            <span class="event-type label" data-label-type="<?php echo $label->slug; ?>"><?php echo $label->name; ?></span>
                          <?php } ?>
                        </div>
                        <time class="event-date" datetime="">
                          <div class="event-date-day"><?php echo date('j', strtotime(get_field('event-start-datetime'))); ?></div>
                          <div class="event-date-month"><?php echo date('M', strtotime(get_field('event-start-datetime'))); ?></div>
                        </time>
                      </div>
                      <div class="event-body">
                        <h6 class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <address class="event-location">
                          <p><?php the_field('event-venue'); ?><br><?php the_field('event-address-line-a'); ?><br><?php the_field('event-address-line-b'); ?></p>
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
          <!-- <li class="menu-item"><a href="<?php echo get_permalink(); ?>"><i class="far fa-search"></i></a></li> -->
          <?php if (is_user_logged_in()) { ?>
            <?php if (current_user_can('manage_options')) { ?>
              <li class="menu-item"><a href="<?php echo admin_url(); ?>">Dashboard</a></li>
            <?php } ?>
            <?php // echo wp_nav_menu(['theme_location' => 'member_private_menu', 'container' => false, 'menu_class' => 'member-menu']); ?>
            <li class="menu-item"><a href="https://birminghamrotaract.z2systems.com/np/clients/birminghamrotaract/login.jsp<?php # echo get_permalink('9'); ?>">Member Login</a></li>
            <!-- <li class="menu-item"><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li> -->
          <?php } else { ?>
            <?php // echo wp_nav_menu(['theme_location' => 'member_public_menu', 'container' => false, 'menu_class' => 'main-menu']); ?>
            <li class="menu-item"><a href="https://birminghamrotaract.z2systems.com/np/clients/birminghamrotaract/login.jsp<?php # echo get_permalink('9'); ?>">Member Login</a></li>
          <?php } ?>
        </ul>
      </nav>
    </header>
