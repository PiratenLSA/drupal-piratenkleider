<?php

function piratenkleider_form_system_theme_settings_alter (&$form, $form_state) {
  require(dirname(__FILE__) . '/inc/constants.php');

  $form['piratenkleider_teaserlinks'] = array(
    '#type' => 'checkbox',
    '#title' => t('Teaserlinks auf der Startseite in der rechten Spalte anzeigen?'),
    '#default_value' => theme_get_setting('piratenkleider_teaserlinks'),
  );

  for ($i = 1; $i <= 3; $i++) {
    $form['teaser' . $i] = array(
      '#type' => 'fieldset',
      '#title' => t('Teaserlink ' . $i),
    );

    $form['teaser' . $i]['piratenkleider_teaser' . $i . '_symbol'] = array(
      '#type' => 'select',
      '#title' => t('Symbol'),
      '#options' => $textsymbolliste_plain,
      '#default_value' => theme_get_setting('piratenkleider_teaser' . $i . '_symbol'),
    );

    $form['teaser' . $i]['piratenkleider_teaser' . $i . '_title'] = array(
      '#type' => 'textfield',
      '#title' => t('Titel'),
      '#default_value' => theme_get_setting('piratenkleider_teaser' . $i . '_title'),
    );

    $form['teaser' . $i]['piratenkleider_teaser' . $i . '_subtitle'] = array(
      '#type' => 'textfield',
      '#title' => t('Untertitel'),
      '#default_value' => theme_get_setting('piratenkleider_teaser' . $i . '_subtitle'),
    );

    $form['teaser' . $i]['piratenkleider_teaser' . $i . '_url'] = array(
      '#type' => 'textfield',
      '#title' => t('URL'),
      '#default_value' => theme_get_setting('piratenkleider_teaser' . $i . '_url'),
    );
  }

}

?>
