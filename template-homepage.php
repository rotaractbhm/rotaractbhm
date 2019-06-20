<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
    <main class="main" role="main">
      <div class="hero">
        <div class="hero-content">
          <h1 class="hero-heading">Cultivating Leaders.<br>Improving Communities.</h1>
          <p class="hero-copy">Rotaract mobilizes its members to foster responsible citizenship and catalyze positive change by offering unparalleled opportunities to learn from diverse leaders, bond with committed young professionals, and serve the Birmingham community and beyond.</p>
          <p><a class="button button--large" href="<?php echo get_permalink('167'); ?>">Become a Member</a></p>
          <!--<h1>We <a href="/learn">learn</a> to become<br>future leaders.</h1>
          <p>"Rotaract has an extremely diverse group of individuals; each of us has a unique story. Whether it is the RED talks or a young entrepreneur speaking, each Rotaract member walks out at 1 PM every other Thursday with new knowledge. It’s important for us to thrive and learn from others’ experiences to better ourselves and the community."</p>
          <h1>We <a href="/socialize">socialize</a> to form<br>lasting relationships.</h1>
          <p>"My favorite Rotaract social event is the one that hasn’t happened yet. I’m always surprised at the creativity and diversity of the social committee to consistently come up with fun, unique socials – activities I either had no idea even existed or would have never thought of in a million years. No two Foundation Balls are the same. No two monthly socials are the same. That’s what makes the social aspect of Rotaract so awesome. I have no idea what’s in store for future social events, but I can guarantee I’ll see you there and it’s going to be a blast!"</p>
          <h1>We <a href="/serve">serve</a> to build<br>better communities.</h1>
          <p>"I grew up in a mentorship program. I didn’t have access to a ton of other resources, and my mentor was the one consistent aspect of my life at a crucial point. Because of my experience, I have seen the impact that someone can have when they simply invest time into some of our younger generation, and I am extremely happy we offer a service like that."</p>-->
        </div>
        <div class="hero-figures">
          <div class="hero-figures-carousel">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/michael.png">
          </div>
        </div>
        <div class="hero-background">
          <div class="hero-background--rotary"></div>
          <div class="hero-background--rotaract"></div>
        </div>
      </div>
      <div class="member-testimonials"></div>
    </main>
<?php get_footer(); ?>
