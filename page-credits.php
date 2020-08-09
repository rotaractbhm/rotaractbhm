<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="heading main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy">
            <p>Website designed and built in kind by <a href="https://drewfravert.com/" target="_blank" rel="noopener">Drew Fravert</a>.</p>
            <p>Web hosting provided in kind by <a href="https://www.dreamhost.com/r.cgi?2358599" target="_blank" rel="noopener">DreamHost</a>.</p>
            <p>Code repository provided in kind by <a href="https://github.com/" target="_blank" rel="noopener">GitHub</a>.</p>
            <p>Collaboration and productivity tools provided in kind by <a href="https://www.google.com/" target="_blank" rel="noopener">Google</a>.</p>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
