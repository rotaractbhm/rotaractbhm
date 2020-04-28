<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy"><?php the_content(); ?></div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
