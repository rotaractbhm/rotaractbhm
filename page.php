<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="section">
    <div class="section-mask">
      <div class="section-container">
        <header class="section-layout">
          <h1 class="heading text-xxxxxl"><?php the_title(); ?></h1>
          <div class="content"><?php the_content(); ?></div>
        </header>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
