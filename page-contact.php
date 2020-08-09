<?php get_header(); ?>
<main class="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="page">
    <header class="page-header">
      <h1 class="heading"><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </header>
    <section class="page-section">
      <div class="contact-details">
        <div class="contact-detail">
          <h3 class="heading"><i class="fal fa-building"></i></h3>
          <p><strong>Meeting Address</strong><br><a href="https://goo.gl/maps/ftGucSYQzSUEvDAr8" target="_blank" rel="noopener">2019 4th Ave N<br>Birmingham, AL 35203</a></p>
        </div>
        <div class="contact-detail">
          <h3 class="heading"><i class="fal fa-mail-bulk"></i></h3>
          <p><strong>Mailing Address</strong><br>PO Box 13798<br>Birmingham, AL 35202</p>
        </div>
        <div class="contact-detail">
          <h3 class="heading"><i class="fal fa-envelope-open-text"></i></h3>
          <p><strong>Email Address</strong><br><a href="mailto:info@rotaractbhm.org">info@rotaractbhm.org</a></p>
        </div>
      </div>
    </section>
  </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
