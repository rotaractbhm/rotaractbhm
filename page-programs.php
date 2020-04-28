<?php get_header(); ?>
    <main class="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="main-section">
        <div class="main-section-header main-section-header--centered">
          <h1 class="main-section-heading"><?php the_title(); ?></h1>
          <div class="main-section-copy"><?php the_content(); ?></div>
          <div class="programs">
            <div class="program">
              <h6>Ready to Read</h6>
              <p>Ready to Read places a library of books and reading buddy in 2nd grade classrooms in Birmingham City Schools.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('66'); ?>">Learn More</a></p>
            </div>
            <div class="program">
              <h6>Ready to Succeed</h6>
              <p>Ready to Succeed provides mentoring and ACT prep to prepare high school students for college.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('68'); ?>">Learn More</a></p>
            </div>
            <div class="program">
              <h6>Achieve Alabama</h6>
              <p>Source and provide access to state specific scholarship database to help make college more affordable for AL families.</p>
              <p><a class="button button--small button--secondary" href="<?php echo get_permalink('71'); ?>">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
