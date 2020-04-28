    <?php if (!is_page('login')) { ?>
    <footer class="footer">
      <!-- <div class="sponsors">
        <div class="sponsors-content">
          <h3>Investing in the next generation of Birmingham leaders.</h3>
          <p>The Rotaract Club of Birmingham Foundation would like to thank all of our 2018-2019 sponsors for their continued support of our philanthropic endeavors.</p>
          <a class="button" href="<?php echo get_post_type_archive_link('sponsors'); ?>">See the benefits of Sponsorship</a>
        </div>
        <ul class="sponsors-list">
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
          <li class="sponsor"><a href="https://www.rotarybhm.org/?utm_source=rotaractbhm&utm_medium=sponsors&utm_campaign=referrals" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/assets/images/sponsors/rotary.svg" alt="Rotary Club of Birmingham" width="auto" height="42"></a></li>
        </ul>
      </div> -->
      <div class="sitemap">
        <nav class="sitemap-menus">
          <?php wp_nav_menu(['theme_location' => 'learn_menu', 'container' => false, 'menu_class' => 'sitemap-menu sitemap-menu-learn']); ?>
          <?php wp_nav_menu(['theme_location' => 'socialize_menu', 'container' => false, 'menu_class' => 'sitemap-menu sitemap-menu-socialize']); ?>
          <?php wp_nav_menu(['theme_location' => 'serve_menu', 'container' => false, 'menu_class' => 'sitemap-menu sitemap-menu-serve']); ?>
          <?php wp_nav_menu(['theme_location' => 'club_menu', 'container' => false, 'menu_class' => 'sitemap-menu sitemap-menu-club']); ?>
          <?php wp_nav_menu(['theme_location' => 'partners_menu', 'container' => false, 'menu_class' => 'sitemap-menu sitemap-menu-partners']); ?>
        </nav>
        <div class="newsletter">
          <h6>Monthly Bulletin</h6>
          <p>Each month we send out our club bulletin updating you on the latest programming information, upcoming events &amp; member activity. Get involved &ndash; subscribe now.</p>
          <form class="newsletter-form" method="post" action="https://rotaractbhm.us1.list-manage.com/subscribe/post?u=1ed4e0355083b8f6bcb10d81a&id=2eb4b48fff" name="mc-embedded-subscribe-form" target="_blank" novalidate>
            <input class="newsletter-email" type="email" name="EMAIL" placeholder="Email address">
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1ed4e0355083b8f6bcb10d81a_1cd97b5bd8" tabindex="-1" value=""></div>
            <input class="newsletter-submit button" type="submit" value="Subscribe" name="subscribe">
          </form>
        </div>
        <div class="legal">
          <img class="legal-logo" src="<?php bloginfo('template_url'); ?>/assets/images/brand/rotaract-icon.svg" alt="Rotaract Club of Birmingham" width="auto" height="42">
          <div class="legal-content">
            <p><strong>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></strong></p>
            <p><?php bloginfo('description'); ?></p>
            <ul class="social-channels">
              <li class="social-channel"><a href="https://www.facebook.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a></li>
              <li class="social-channel"><a href="https://www.instagram.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li>
              <li class="social-channel"><a href="https://twitter.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
              <li class="social-channel"><a href="https://www.linkedin.com/company/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a></li>
              <li class="social-channel"><a href="https://vimeo.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-vimeo"></i></a></li>
              <li class="social-channel"><a href="https://soundcloud.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-soundcloud"></i></a></li>
              <li class="social-channel"><a href="https://rotaractbhm.slack.com/" target="_blank" rel="noopener"><i class="fab fa-slack"></i></a></li>
              <li class="social-channel"><a href="https://github.com/rotaractbhm" target="_blank" rel="noopener"><i class="fab fa-github"></i></a></li>
            </ul>
            <?php wp_nav_menu(['theme_location' => 'legal_menu', 'container' => false, 'menu_class' => 'legal-menu']); ?>
          </div>
        </div>
      </div>
    </footer>
    <?php } ?>
    <script async src="<?php bloginfo('template_url'); ?>/application-min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129516193-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
      gtag('config', 'UA-129516193-1');
    </script>
    <?php // wp_footer(); ?>
  </body>
</html>
