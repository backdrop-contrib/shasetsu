<?php

/**
 * @file
 *
 * Theme settings file.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function shasetsu_form_system_theme_settings_alter(&$form, &$form_state) {
  if (module_exists('color')) {
    // Until #4463 is addressed.
    // @see https://github.com/backdrop/backdrop-issues/issues/4463
    $form_state['build_info']['args'][0] = NULL;
  }
  // Get rid of the empty form and pointless form submit button.
  $form['#access'] = FALSE;
  // Show a message.
  backdrop_set_message(t('This theme has no settings.'), 'info');
}
