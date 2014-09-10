<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 * 
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
function kindisch_preprocess_html(&$vars) {
  global $theme_key;

  // add custom Google fonts
//  drupal_add_css('http://fonts.googleapis.com/css?family=Gloria+Hallelujah|Permanent+Marker',
//          array('group' => CSS_THEME));
          
  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  $vars['classes_array'][] = css_browser_selector();

}
// 


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function kindisch_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function kindisch_preprocess_page(&$vars) {
}
function kindisch_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function kindisch_preprocess_node(&$vars) {
}
function kindisch_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function kindisch_preprocess_comment(&$vars) {
}
function kindisch_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function kindisch_preprocess_block(&$vars) {
}
function kindisch_process_block(&$vars) {
}
// */


// function kindisch__preprocess_views_exposed_form(&$variables) {
//   if ($vars['form']['#id'] == 'views-exposed-form-VIEWNAME-DISPLAYID') {
//     foreach ($variables['widgets'] as $id => &$widget) {
//       switch ($id) {
//         case 'first_date_id'
//           $widget->prefix = '<div class="date-widgets-wrapper">';
//           break;
//         case 'last_date_id':
//           $widget->suffix = '</div>';
//           break;
//       }
//     }
//   }
// }




/*
 * Passt das Feld "Alter" an: wenn 0-18 ausgewählt ist, gib stattdessen
 * "für jedes Alter geeignet" an.
 */
function kindisch_field__field_alter($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>';
    
    $alter = $variables['element']['#object']->field_alter;
    if ( $alter['und'][0]['from'] == 0 && $alter['und'][0]['to'] == 18) {
      $output .= 'für jedes Alter geeignet';
    } else $output .= drupal_render($item);
    $output .= '</div>';
  }
  $output .= '</div>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}

/*
 Removes Links in fullcalendar legend
 https://www.drupal.org/node/1494574
*/
function kindisch_preprocess_fullcalendar_legend(&$variables) {
  foreach (element_children($variables['element']) as $type_name) {
    $variables['element'][$type_name]['type'] = array('#markup' => $variables['element'][$type_name]['type']['#title']);
  }
}

