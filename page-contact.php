<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy"><?php the_content(); ?></div>
          <div class="contact-details">
            <div class="contact-detail">
              <h3><i class="fal fa-building"></i></h3>
              <p><strong>Meeting Address</strong><br><a href="https://goo.gl/maps/ftGucSYQzSUEvDAr8" target="_blank" rel="noopener">2019 4th Ave N<br>Birmingham, AL 35203</a></p>
            </div>
            <div class="contact-detail">
              <h3><i class="fal fa-mail-bulk"></i></h3>
              <p><strong>Mailing Address</strong><br>PO Box 13798<br>Birmingham, AL 35202</p>
            </div>
            <div class="contact-detail">
              <h3><i class="fal fa-envelope-open-text"></i></h3>
              <p><strong>Email Address</strong><br><a href="mailto:info@rotaractbhm.org">info@rotaractbhm.org</a></p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
