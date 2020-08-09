<?php /* Template Name: Application */ ?>
<?php get_header(); ?>
<main class="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="main-section">
    <h1 class="heading main-section-heading"><?php the_title(); ?></h1>
    <div class="main-section-copy"><?php the_content(); ?></div>
  </div>
  <div class="main-section">
    <form class="form">
      <div class="form-section">
        <div class="form-fieldset">
          <div class="form-field">
            <input type="text" required>
            <label for="">First Name</label>
          </div>
          <div class="form-field">
            <input type="text">
            <label for="">Middle Name</label>
          </div>
          <div class="form-field">
            <input type="text" required>
            <label for="">Last Name</label>
          </div>
        </div>
        <div class="form-fieldset">
          <div class="form-field">
            <input type="email" required>
            <label for="">Email</label>
          </div>
          <div class="form-field">
            <input type="tel" required>
            <label for="">Phone</label>
          </div>
        </div>
        <div class="form-fieldset">
          <div class="form-field">
            <input type="text" required>
            <label for="">Gender</label>
          </div>
          <div class="form-field">
            <input type="text" required>
            <label for="">Birthday</label>
          </div>
        </div>
        <div class="form-fieldset">
          <div class="form-field">
            <input type="text" required>
            <label for="">Address</label>
          </div>
          <div class="form-field">
            <input type="text">
            <label for="">Unit</label>
          </div>
        </div>
        <div class="form-fieldset">
          <div class="form-field">
            <input type="text" required>
            <label for="">City</label>
          </div>
          <div class="form-field">
            <input type="text" required>
            <label for="">State</label>
          </div>
          <div class="form-field">
            <input type="text" required>
            <label for="">Zip Code</label>
          </div>
        </div>
        <div class="form-fieldset">
          <div class="form-field">
            <input type="password" required>
            <label for="">Password</label>
          </div>
          <div class="form-field">
            <input type="password" required>
            <label for="">Confirm Password</label>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <p><button class="button" type="submit">Submit Application</button></p>
      </div>
      <script src="https://www.google.com/recaptcha/api.js?render=6LdQLp0UAAAAAPeFA98kwUTlGUUotL9EDRqwnUV9"></script>
      <script>
        grecaptcha.ready(function() {
          grecaptcha.execute("6LdQLp0UAAAAAPeFA98kwUTlGUUotL9EDRqwnUV9", { action: "application" });
        });
      </script>
    </form>
  </div>
  <div class="main-section">
    <p class="disclaimer">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
  </div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
