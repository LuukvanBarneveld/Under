<?php

class UnderPlugin extends MantisPlugin {

  function register() {
    $this->name        = 'Under';
    $this->description = 'A dark theme for MantisBT.';

    $this->version     = 'v1';
    $this->requires    = array(
      'MantisCore'       =>  "2.0.0",
    );

    $this->author      = 'Luuk van Barneveld';
    $this->contact     = 'info@8t88.nl';
    $this->url         = 'http://www.8t88.nl';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('Under.css') . '" />' . "\n";
  }

}