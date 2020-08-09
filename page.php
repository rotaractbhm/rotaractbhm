<?php get_header(); ?>
<main class="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="page">
    <h1 class="heading"><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
