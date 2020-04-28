<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy"><?php the_content(); ?></div>
          <div class="values">
            <div class="value">
              <h6>Learn</h6>
              <p>Learning from great leaders is at the core of what we do.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('85'); ?>">Learn More</a></p>
            </div>
            <div class="value">
              <h6>Socialize</h6>
              <p>Developing meaningful connections.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('89'); ?>">Learn More</a></p>
            </div>
            <div class="value">
              <h6>Serve</h6>
              <p>Serving the Birmingham community and beyond.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('91'); ?>">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
