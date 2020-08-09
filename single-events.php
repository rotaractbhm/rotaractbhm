<?php get_header(); ?>
    <main class="main" role="main">
      <ul class="breadcrumbs">
        <li class="breadcrumb"><a href="<?php echo get_post_type_archive_link("events"); ?>"><i class="far fa-long-arrow-left"></i>Events</a></li>
        <li class="breadcrumb" href="<?php echo get_post_type_archive_link("events"); ?>"><?php the_title(); ?></li>
      </ul>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="event-single">
        <div class="event-body">
          <div class="event-labels labels">
            <?php $labels = get_the_terms(get_the_ID(), "event-labels"); ?>
            <?php if (!empty($labels)) { ?>
              <?php foreach($labels as $label) { ?>
              <?php // echo get_term_link($label); ?>
                <span class="event-type label" data-label-type="<?php echo $label->slug; ?>"><?php echo $label->name; ?></span>
              <?php } ?>
            <?php } ?>
          </div>
          <h2 class="heading event-name"><?php the_title(); ?></h2>
          <dl class="event-metadata">
            <div class="event-metadatum">
              <dt><i class="far fa-map-pin"></i></dt>
              <dd>
                <address class="event-location">
                  <div class="event-venue"><?php the_field("event-venue"); ?></div>
                  <div class="event-address"><?php the_field("event-address-line-a"); ?><br><?php the_field("event-address-line-b"); ?></div>
                  <div class="event-directions"><a href="https://maps.google.com/">Get Directions</a></div>
                </address>
              </dd>
            </div>
            <div class="event-metadatum">
              <dt><i class="far fa-calendar-day"></i></dt>
              <dd>
                <time class="event-date">
                  <div class="event-date-day" datetime=""><?php echo date("j F Y", strtotime(get_field("event-start-datetime"))); ?></div>
                  <div class="event-date-time" datetime=""><?php echo date("g:iA", strtotime(get_field("event-start-datetime"))); ?>&nbsp;&ndash;&nbsp;<?php echo date("g:iA", strtotime(get_field("event-end-datetime"))); ?></div>
                  <div class="event-calendar"><a href="">Add to Calendar</a></div>
                </time>
              </dd>
            </div>
          </dl>
          <div class="event-copy"><?php the_content(); ?></div>
          <div class="buttons">
            <?php if (get_field("event-registration-url")) { ?>
              <a class="button button--large" href="<?php the_field("event-registration-url") ?>">Register</a>
            <?php } ?>
          </div>
        </div>
        <div class="event-sidebar">
          <?php the_post_thumbnail("thumbnail", [
            "alt"   => get_the_title(),
            "class" => "event-image",
            "title" => get_the_title()
          ]); ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
