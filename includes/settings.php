<?php

  // disable gutenberg editor
  add_filter("use_block_editor_for_post", "__return_false");

  // disable automatic paragraph tags
  remove_filter ("the_content", "wpautop");
  remove_filter ("the_excerpt", "wpautop");

  // user profile management
  add_filter("user_contactmethods", function($profile_fields) {
  	unset($profile_fields["twitter"]);
  	unset($profile_fields["facebook"]);
  	unset($profile_fields["googleplus"]);

  	return $profile_fields;
  });

  // set default admin theme
  function set_default_admin_color($user_id) {
    $args = [
      "ID" => $user_id,
      "admin_color" => "midnight"
    ];
    wp_update_user($args);
  }
  add_action("user_register", "set_default_admin_color");

  // custom admin dashboard CSS
  add_action("admin_enqueue_scripts", function() {
    wp_enqueue_style("admin-styles", get_template_directory_uri()."/style-admin.css");
  });

  // dequeue wordpress styles
  add_action("wp_print_styles", function() {
    wp_dequeue_style("wp-block-library");
  });

  // deregister wordpress scripts
  add_filter("wp_enqueue_scripts", function() {
    if (!is_admin()) {
      wp_deregister_script("jquery");
    }
  });

  // require authentication for rest api
  add_filter("rest_authentication_errors", function($result) {
    if (!empty($result)) {
      return $result;
    }
    if (!is_user_logged_in()) {
      return new WP_Error("Unauthorized", "You are not currently logged in.", ["status" => 401]);
    }
    return $result;
  });

?>
