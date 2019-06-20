<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <h1 class="main-section-heading"><?php the_title(); ?></h1>
        <div class="main-section-copy"><?php the_content(); ?></div>
      </div>
      <div class="main-section">
        <ul>
          <li>Programs</li>
          <li>Social</li>
          <li>Service</li>
          <li>Finance</li>
          <li>Public Relations</li>
          <li>Membership Development</li>
          <li>Recruitment</li>
          <li>Strategic Planning</li>
        </ul>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
