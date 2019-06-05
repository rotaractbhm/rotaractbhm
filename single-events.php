<?php get_header(); ?>
    <main class="main" role="main">
      <div class="breadcrumbs">
        <span class="breadcrumb"><a href="<?php echo get_post_type_archive_link('events'); ?>"><i class="far fa-long-arrow-left"></i>Events</a></span>
        <span class="breadcrumb" href="<?php echo get_post_type_archive_link('events'); ?>"><?php the_title(); ?></span>
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="event-single">
        <div class="event-body">
          <div class="event-labels labels">
            <span class="event-type label" data-label-type="learn">Learn</span>
            <span class="event-type label" data-label-type="socialize">Socialize</span>
            <span class="event-type label" data-label-type="serve">Serve</span>
            <span class="event-type label" data-label-type="members-only">Members Only</span>
          </div>
          <h3 class="event-name"><?php the_title(); ?></h3>
          <dl class="event-metadata">
            <div class="event-metadatum">
              <dt><i class="far fa-map-pin"></i></dt>
              <dd>
                <address class="event-location">
                  <div class="event-venue">Hamburg Messe</div>
                  <div class="event-address">Messeplatz 1<br>20357 Hamburg, DE</div>
                  <div class="event-directions"><a href="https://maps.google.com/">Get Directions</a></div>
                </address>
              </dd>
            </div>
            <div class="event-metadatum">
              <dt><i class="far fa-calendar-day"></i></dt>
              <dd>
                <time class="event-date">
                  <div class="event-date-day" datetime="">6 June 2019</div>
                  <div class="event-date-time" datetime="">5:30PM&nbsp;-&nbsp;7:00PM</div>
                  <div class="event-calendar"><a href="">Add to Calendar</a></div>
                </time>
              </dd>
            </div>
          </dl>
          <div class="event-copy"><?php the_content(); ?></div>
          <div class="buttons">
            <a class="button button--large" href="">Register</a>
          </div>
        </div>
        <div class="event-sidebar">
          <img class="event-image" src="<?php bloginfo('template_url'); ?>/assets/images/ri.jpg" alt="<?php the_title(); ?>">
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
