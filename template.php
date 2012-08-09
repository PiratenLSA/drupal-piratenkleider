<?php

function piratenkleider_preprocess_page(&$variables) {
  // Get the entire main menu tree
  //$main_menu_tree = menu_tree_all_data('main-menu');

  // Add the rendered output to the $main_menu_expanded variable
  //$men = menu_tree_output($main_menu_tree);

  $men = menu_tree(variable_get('menu_main_links_source', 'main-menu'));

  $variables['main_menu_expanded'] = $men;
}

function piratenkleider_menu_tree__main_menu($variables) {
  return '<ul id="menu-mainmenu" class="menu">' . $variables['tree'] . '</ul>';
}

function piratenkleider_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li>' . $output . $sub_menu . "</li>\n";
}

function piratenkleider_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $breadcrumb[] = '<span class="current">'. drupal_get_title() .'</span>';

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="skip">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' / ', $breadcrumb) . '</div>';
    return $output;
  }
}
