      <footer class="section theme-gray angle-top" role="contentinfo">
        <div class="footer section-container">
          <nav class="sitemap hidden" role="navigation">
            <?php wp_nav_menu(["theme_location" => "learn_menu", "container" => false]); ?>
            <?php wp_nav_menu(["theme_location" => "socialize_menu", "container" => false]); ?>
            <?php wp_nav_menu(["theme_location" => "serve_menu", "container" => false]); ?>
            <?php wp_nav_menu(["theme_location" => "club_menu", "container" => false]); ?>
            <?php wp_nav_menu(["theme_location" => "partners_menu", "container" => false]); ?>
          </nav>
          <div class="legal">
            <img class="logo" src="<?php bloginfo("template_url"); ?>/assets/static/images/brand/logo.svg" alt="<?php bloginfo("name"); ?>" width="auto" height="48">
            <p class="mb-0"><?php bloginfo("description"); ?></p>
            <div class="social text-larger">
              <a class="channel" href="https://facebook.com/rotaractbhm"><i class="fab fa-facebook"></i></a>
              <a class="channel" href="https://linkedin.com/company/rotaractbhm"><i class="fab fa-linkedin"></i></a>
              <a class="channel" href="https://twitter.com/rotaractbhm"><i class="fab fa-twitter"></i></a>
              <a class="channel" href="https://instagram.com/rotaractbhm"><i class="fab fa-instagram"></i></a>
              <a class="channel" href="https://vimeo.com/rotaractbhm"><i class="fab fa-vimeo"></i></a>
              <a class="channel" href="https://soundcloud.com/rotaractbhm"><i class="fab fa-soundcloud"></i></a>
              <a class="channel" href="https://rotaractbhm.slack.com/"><i class="fab fa-slack"></i></a>
              <a class="channel" href="https://github.com/rotaractbhm"><i class="fab fa-github"></i></a>
            </div>
            <p class="mb-0"><?php echo date("Y"); ?>&nbsp;&copy; <?php bloginfo("name"); ?> Foundation. All rights reserved.</p>
            <?php wp_nav_menu(["theme_location" => "legal_menu", "container" => false]); ?>
          </div>
          <div class="bulletin hidden">
            <h6 class="text-larger text-bold color-rotaract-blue mb-4">Monthly Bulletin</h6>
            <p class="text-small">Each month we send out our Club Bulletin updating you on the latest programming information, upcoming events &amp; member activity. Get involved &ndash; subscribe now.</p>
            <form class="form form-small mt-8" method="post" action="https://rotaractbhm.us1.list-manage.com/subscribe/post?u=1ed4e0355083b8f6bcb10d81a&id=2eb4b48fff" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <div class="field" style="position: absolute; left: -5000px;" aria-hidden="true">
                <input type="text" name="b_1ed4e0355083b8f6bcb10d81a_1cd97b5bd8" tabindex="-1" value="">
              </div>
              <fieldset class="fieldset flex justify-between gx-4">
                <div class="field">
                  <input class="input input-text" type="email" name="EMAIL" placeholder="Email address">
                </div>
                <div class="field">
                  <button class="button button-base button-small" type="submit" name="subscribe">Subscribe</button>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </footer>
    </main>
    <script async src="<?php bloginfo("template_url"); ?>/app.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129516193-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag("js", new Date());
      gtag("config", "UA-129516193-1");
    </script>
    <?php // wp_footer(); ?>
  </body>
</html>
