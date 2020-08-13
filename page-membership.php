<?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="section">
    <div class="section-container">
      <dl class="statistics">
        <h2 class="heading">Club Overview</h2>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-donate"></i></h3>
            <h3 class="heading">$1.2M</h3>
          </dd>
          <dt>Foundation Funds Raised</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-users"></i></h3>
            <h3 class="heading">300</h3>
          </dd>
          <dt>Total Members</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-venus"></i></h3>
            <h3 class="heading">153</h3>
          </dd>
          <dt>Female Members</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-mars"></i></h3>
            <h3 class="heading">147</h3>
          </dd>
          <dt>Male Members</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-user"></i></h3>
            <h3 class="heading">29</h3>
          </dd>
          <dt>Average Age</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-building"></i></h3>
            <h3 class="heading">190</h3>
          </dd>
          <dt>Companies Represented</dt>
        </div>
        <div class="statistic">
          <dd>
            <h3 class="heading"><i class="fal fa-industry-alt"></i></h3>
            <h3 class="heading">22</h3>
          </dd>
          <dt>Industries Represented</dt>
        </div>
      </dl>
    </div>
  </section>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
