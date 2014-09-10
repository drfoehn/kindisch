<?php

/**
 * @file
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * To use replace "adaptivetheme_subtheme" with your themeName and uncomment by
 * deleting the comment line to enable.
 *
 * @param $form: Nested array of form elements that comprise the form.
 * @param $form_state: A keyed array containing the current state of the form.
 */
/* -- Delete this line to enable.
function adaptivetheme_subtheme_form_system_theme_settings_alter(&$form, &$form_state)  {
  // Your knarly custom theme settings go here...
}
// */

// <?php
// function kindisch_form_alter(&$form, &$form_state, $form_id){
//   if($form_id == "views_exposed_form"){
//     dsm($form); // print $form array on the top of the page
//     if (isset($form['title'])) {
//             $form['title'][] = array('#placeholder' => t('Gemeente...'));
//     }
//   }
// }
// ?>