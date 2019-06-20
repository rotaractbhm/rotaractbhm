<?php get_header(); ?>
    <main class="main" role="main">
      <div class="main-section">
        <div class="main-section-header">
          <h1 class="main-section-heading">Event Schedule</h1>
          <p class="main-section-copy">The Rotaract Club of Birmingham meets on the first and third Thursdays each month at the Harbert Center in downtown Birmingham to hear from community and business leaders.</p>
        </div>
      </div>
      <ul class="main-section events">
        <?php
          $args = [
            "post_type"      => "events",
            "posts_per_page" => -1
          ];
          $events_query = new WP_Query($args);
        ?>
        <?php if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post(); ?>
        <li class="event">
          <div class="event-header">
            <span class="event-type label" data-label-type="learn">Learn</span>
            <time class="event-date" datetime="">
              <div class="event-date-day">6</div>
              <div class="event-date-month">June</div>
            </time>
          </div>
          <div class="event-body">
            <h6 class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <address class="event-location">
              <p>The Harbert Center<br>2019 4th Ave N<br>Birmingham, AL 35203</p>
            </address>
          </div>
          <div class="event-footer">
            <a class="event-link link" href="<?php the_permalink(); ?>">Details<i class="far fa-long-arrow-right"></i></a>
          </div>
        </li>
        <?php endwhile; endif; wp_reset_query(); ?>
      </ul>
      <ul class="main-section signature-events">
        <li class="signature-event">
          <img class="signature-event-image" src="<?php bloginfo('template_url'); ?>/assets/images/foundation-ball.png">
          <time class="signature-event-date">Spring 2020</time>
          <h5 class="signature-event-name">Foundation Ball</h5>
          <p class="signature-event-description">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec id elit non mi porta gravida at eget metus.</p>
          <a class="button button--secondary" href="">Event Info</a>
        </li>
        <li class="signature-event">
          <img class="signature-event-image" src="<?php bloginfo('template_url'); ?>/assets/images/hack-it-classic.png">
          <time class="signature-event-date">August 17th, 2019</time>
          <h5 class="signature-event-name">Hack-It Classic</h5>
          <p class="signature-event-description">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
          <div class="buttons">
            <a class="button button--secondary" href="">Event Info</a>
            <a class="button" href="">Buy Tickets</a>
          </div>
        </li>
        <li class="signature-event">
          <img class="signature-event-image" src="<?php bloginfo('template_url'); ?>/assets/images/rotary-trail-party.png">
          <time class="signature-event-date">Summer 2020</time>
          <h5 class="signature-event-name">Rotary Trail Party</h5>
          <p class="signature-event-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper.</p>
          <a class="button button--secondary" href="">Event Info</a>
        </li>
      </ul>
    </main>
<?php get_footer(); ?>
