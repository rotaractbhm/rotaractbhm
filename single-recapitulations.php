<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-header">
        <h1 class="main-header-heading"><?php the_title(); ?></h1>
        <div class="main-header-copy"><?php the_content(); ?></div>
      </div>
      <div class="main-body">
      </div>
      <div class="main-footer">
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
