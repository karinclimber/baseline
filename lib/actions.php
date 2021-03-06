<?php
// ACTIONS

// Add the utility menu
add_action( 'genesis_header', 'childtheme_do_utility_menu', 5 );
function childtheme_do_utility_menu() {
  $class = 'menu genesis-nav-menu menu-utility';
  if ( genesis_superfish_enabled() ) {
    $class .= ' js-superfish';
  }

  genesis_nav_menu( array(
    'theme_location'  => 'utility',
    'menu_class'      => $class,
  ) );
}

// Add the main menu
add_action( 'genesis_header', 'childtheme_do_main_menu', 13 );
function childtheme_do_main_menu() {
  $class = 'menu genesis-nav-menu menu-main';
  if ( genesis_superfish_enabled() ) {
    $class .= ' js-superfish';
  }

  genesis_nav_menu( array(
    'theme_location'  => 'main',
    'menu_class'      => $class,
  ) );
}

// Add the footer menu
add_action( 'genesis_footer', 'childtheme_do_footer_menu', 5 );
function childtheme_do_footer_menu() {
  $class = 'menu genesis-nav-menu menu-footer';

  genesis_nav_menu( array(
    'theme_location'  => 'footer',
    'menu_class'      => $class,
    'depth'           => 1,
  ) );
}
