<?php
  // 1. customize ACF path
  add_filter('acf/settings/path', 'fm_acf_settings_path');
  function fm_acf_settings_path( $path ) {
      $path = get_stylesheet_directory() . '/lib/acf/';
      return $path;
  }


  // 2. customize ACF dir
  add_filter('acf/settings/dir', 'fm_acf_settings_dir');
  function fm_acf_settings_dir( $dir ) {
      $dir = get_stylesheet_directory_uri() . '/lib/acf/';
      return $dir;

  }

  // 3. Hide ACF field group menu item
  //add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

