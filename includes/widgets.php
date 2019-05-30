<?php

  // https://codex.wordpress.org/Function_Reference/register_sidebar

  // register widgets
  function rotaractbhm_widgets_init() {

    register_sidebar([
      "name"          => "Monthly Bulletin",
      "id"            => "monthly-bulletin",
      "description"   => "Your Widget Description.",
      "class"         => "",
      "before_widget" => "",
      "after_widget"  => "",
      "before_title"  => "",
      "after_title"   => ""
    ]);

  }

  add_action("widgets_init", "rotaractbhm_widgets_init");

?>
