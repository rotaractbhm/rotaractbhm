<?php

  // https://codex.wordpress.org/Function_Reference/register_taxonomy

  // register the taxonomy
  function event_labels_taxonomy() {
    $name = [
      "singular" => "Event Label",
      "plural"   => "Event Labels",
      "slug"     => "event-labels"
    ];

  	$labels = [
  		"name"                       => $name["plural"],
  		"singular_name"              => $name["singular"],
  		"menu_name"                  => $name["plural"],
  		"all_items"                  => "All ".$name["plural"],
  		"edit_item"                  => "Edit ".$name["singular"],
  		"view_item"                  => "View ".$name["singular"],
  		"update_item"                => "Update ".$name["singular"],
  		"add_new_item"               => "Add New ".$name["singular"],
  		"new_item_name"              => "New ".$name["singular"]." Name",
  		"parent_item"                => "Parent ".$name["singular"],
  		"parent_item_colon"          => "Parent ".$name["singular"].":",
  		"search_items"               => "Search ".$name["plural"],
  		"popular_items"              => "Popular ".$name["plural"],
  		"separate_items_with_commas" => "Separate ".$name["plural"]." with commas",
  		"add_or_remove_items"        => "Add or remove ".$name["plural"],
  		"choose_from_most_used"      => "Choose from the most used ".$name["plural"],
  		"not_found"                  => "No ".$name["plural"]." found",
  		"back_to_items"              => "Back to ".$name["plural"]
  	];

  	$args = [
  		"labels"                => $labels,
  		"public"                => true,
//   		"publicly_queryable"    => true,
//   		"show_ui"               => true,
//   		"show_in_menu"          => true,
//   		"show_in_nav_menus"     => true,
//   		"show_in_rest"          => false,
//   		"rest_base"             => $taxonomy,
//   		"rest_controller_class" => WP_REST_Terms_Controller,
//   		"show_tagcloud"         => true,
//   		"show_in_quick_edit"    => true,
//   		"meta_box_cb"           => null,
//   		"show_admin_column"     => false,
//   		"description"           => "",
  		"hierarchical"          => true,
//   		"update_count_callback" => "",
//   		"query_var"             => $taxonomy,
//   		"rewrite"               => true,
//   		"capabilities"          => [],
//   		"sort"                  => false
  	];

  	register_taxonomy($name["slug"], ["events"], $args);
  }

  add_action("init", "event_labels_taxonomy");

?>
