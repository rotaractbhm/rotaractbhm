<?php get_header(); ?>
    <main class="main" role="main">
      <div class="main-content">
        <?php
          if (!is_user_logged_in()) {
            $args = [
              'redirect'       => admin_url(), 
              'form_id'        => 'form--login',
              'label_username' => __('Email'),
              'label_password' => __('Password'),
              'label_remember' => __('Remember me'),
              'label_log_in'   => __('Login'),
              'remember'       => true
            ];
            wp_login_form($args);
          } else {
            wp_redirect(home_url()); exit;
          }
        ?>
      </div>
    </main>
<?php get_footer(); ?>