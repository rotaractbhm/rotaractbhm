<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <h1 class="main-section-heading"><?php the_title(); ?></h1>
        <p class="main-section-copy"></p>
      </div>
      <div class="main-section"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
