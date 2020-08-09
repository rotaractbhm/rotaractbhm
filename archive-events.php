<?php get_header(); ?>
<main class="main" role="main">
  <article class="page">
    <h1 class="heading">Event Schedule</h1>
    <p>The Rotaract Club of Birmingham meets on the first and third Thursdays each month at the Harbert Center in downtown Birmingham to hear from community and business leaders.</p>
  </article>
  <ul class="events">
    <?php
      $args = [
        "post_type"      => "events",
        "post_status"    => "publish",
        "posts_per_page" => -1,
        "orderby"        => "meta_value",
        "order"          => "ASC",
        "meta_query"     => [
          [
            "key"     => "event-end-datetime",
            "value"   => date("Y-m-d H:i:s", strtotime("-6 hours")),
            "compare" => ">",
            "type"    => "DATETIME"
          ]
        ]
      ];
      $events_query = new WP_Query($args);
    ?>
    <?php if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post(); ?>
    <?php echo get_field("event-end-datetime"); ?>
    <?php echo date("Y-m-d H:i:s"); ?>
    <li class="event">
      <div class="event-header">
        <div class="event-labels labels">
          <?php $labels = get_the_terms(get_the_ID(), "event-labels"); ?>
          <?php $label = $labels[0]; ?>
          <?php if (!empty($label)) { ?>
          <?php // echo get_term_link($label); ?>
            <span class="event-type label" data-label-type="<?php echo $label->slug; ?>"><?php echo $label->name; ?></span>
          <?php } ?>
        </div>
        <time class="event-date" datetime="">
          <div class="event-date-day"><?php echo date("j", strtotime(get_field("event-start-datetime"))); ?></div>
          <div class="event-date-month"><?php echo date("M", strtotime(get_field("event-start-datetime"))); ?></div>
        </time>
      </div>
      <div class="event-body">
        <h6 class="heading event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        <address class="event-location">
          <p><?php the_field("event-venue"); ?><br><?php the_field("event-address-line-a"); ?><br><?php the_field("event-address-line-b"); ?></p>
        </address>
      </div>
      <div class="event-footer">
        <a class="event-link link" href="<?php the_permalink(); ?>">Details<i class="far fa-long-arrow-right"></i></a>
      </div>
    </li>
    <?php endwhile; endif; wp_reset_query(); ?>
  </ul>
  <ul class="signature-events">
    <li class="signature-event">
      <img class="signature-event-image" src="<?php bloginfo("template_url"); ?>/assets/images/foundation-ball.png">
      <time class="signature-event-date">Spring 2020</time>
      <h5 class="heading signature-event-name">Foundation Ball</h5>
      <p class="signature-event-description">Each year, the Rotaract Club of Birmingham celebrates its impact through the Annual Foundation Ball.</p>
      <a class="button button--secondary" href="<?php echo get_permalink("73"); ?>">Event Info</a>
    </li>
    <li class="signature-event">
      <img class="signature-event-image" src="<?php bloginfo("template_url"); ?>/assets/images/hack-it-classic.png">
      <time class="signature-event-date">August 17th, 2019</time>
      <h5 class="heading signature-event-name">Hack-It Classic</h5>
      <p class="signature-event-description"></p>
      <div class="buttons">
        <a class="button button--secondary" href="<?php echo get_permalink("75"); ?>">Event Info</a>
        <!-- <a class="button" href="">Buy Tickets</a> -->
      </div>
    </li>
    <li class="signature-event">
      <img class="signature-event-image" src="<?php bloginfo("template_url"); ?>/assets/images/rotary-trail-party.png">
      <time class="signature-event-date">Summer 2020</time>
      <h5 class="heading signature-event-name">Rotary Trail Party</h5>
      <p class="signature-event-description"></p>
      <a class="button button--secondary" href="<?php echo get_permalink("77"); ?>">Event Info</a>
    </li>
  </ul>
</main>
<?php get_footer(); ?>
