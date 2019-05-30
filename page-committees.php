<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-header">
        <h1 class="main-header-heading"><?php the_title(); ?></h1>
        <p class="main-header-copy"><?php the_content(); ?></p>
      </div>
      <div class="main-body">
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
      <div class="main-footer"></div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
