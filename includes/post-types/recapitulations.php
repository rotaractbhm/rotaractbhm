<?php

  // https://codex.wordpress.org/Function_Reference/register_post_type

  // register the post type
  function recapitulations_post_type() {
    $name = [
      "singular" => "Recapitulation",
      "plural"   => "Recapitulations",
      "slug"     => "recapitulations"
    ];

  	$labels = [
  		"name"                  => $name["plural"],
  		"singular_name"         => $name["singular"],
  		"add_new"               => "Add New",
  		"add_new_item"          => "Add New ".$name["singular"],
  		"edit_item"             => "Edit ".$name["singular"],
  		"new_item"              => "New ".$name["singular"],
  		"view_item"             => "View ".$name["singular"],
  		"view_items"            => "View ".$name["plural"],
  		"search_items"          => "Search ".$name["plural"],
  		"not_found"             => "No ".$name["plural"]." found",
  		"not_found_in_trash"    => "No ".$name["plural"]." found in the Trash",
  		"parent_item_colon"     => "",
  		"all_items"             => $name["plural"],
//   		"archives"              => $name["plural"],
//   		"attributes"            => $name["plural"],
//   		"insert_into_item"      => $name["plural"],
//   		"uploaded_to_this_item" => $name["plural"],
//   		"featured_image"        => $name["plural"],
//   		"set_featured_image"    => $name["plural"],
//   		"remove_featured_image" => $name["plural"],
//   		"use_featured_image"    => $name["plural"],
  		"menu_name"             => $name["plural"],
//   		"filter_items_list"     => $name["plural"],
//   		"items_list_navigation" => $name["plural"],
//   		"items_list"            => $name["plural"],
//   		"name_admin_bar"        => $name["plural"],
  	];

  	$args = [
  		"labels"                => $labels,
//   		"description"           => "",
  		"public"                => true,
//   		"exclude_from_search"   => false,
//   		"publicly_queryable"    => true,
//   		"show_ui"               => true,
//   		"show_in_nav_menus"     => true,
//   		"show_in_menu"          => true,
//   		"show_in_admin_bar"     => true,
//   		"menu_position"         => null,
  		"menu_icon"             => "dashicons-image-rotate",
//   		"capability_type"       => [],
//   		"capabilities"          => [],
//   		"map_meta_cap"          => null,
//   		"hierarchical"          => false,
  		"supports"              => ["title", "editor", "excerpt"],
//   		"register_meta_box_cb"  => ["title"],
//   		"taxonomies"            => [],
  		"has_archive"           => true,
//   		"rewrite"               => true,
//   		"permalink_epmask"      => EP_PERMALINK,
//   		"query_var"             => true,
//   		"can_export"            => true,
//   		"delete_with_user"      => true,
//   		"show_in_rest"          => true,
//   		"rest_base"             => true,
//   		"rest_controller_class" => true
  	];

  	register_post_type($name["slug"], $args);
  }

  add_action("init", "recapitulations_post_type");

?>
