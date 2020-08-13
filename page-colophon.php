<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="section">
    <h1 class="heading text-xxxxxl"><?php the_title(); ?></h1>
    <p class="text-xl text-light color-gray-8 text-contain">
      This website was designed and built in kind by <a href="https://linkedin.com/in/drewfravert/" target="_blank" rel="noopener">Drew Fravert</a>. Hosting and collaboration tools have been kindly provided by <a href="https://www.dreamhost.com/r.cgi?2358599" target="_blank" rel="noopener">DreamHost</a> and <a href="https://www.microsoft.com/" target="_blank" rel="noopener">Microsoft</a>, respectively.
    </p>
  </section>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
