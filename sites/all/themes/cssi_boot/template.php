<?php

/**
 * @file
 * template.php
 */


function cssi_boot_preprocess_page(&$vars, $hook) {
// if('events' === arg(0)) {
	drupal_add_js('//cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js', 'external');
	drupal_add_js('/sites/all/themes/cssi_boot/js/filter.js');
	drupal_add_js('/sites/all/themes/cssi_boot/js/site.js');
// }
  
  $vars['scripts'] = drupal_get_js();
}

// adds Container class for funding opp reagion
function cssi_boot_preprocess_region(&$variables, $hook) {
    if($variables['region'] == 'funding'){
        $variables['classes_array'][] = 'filter-container';
        $variables['classes_array'][] = 'filter-region';
		
//		 filter-container" id="Container"
    }
}

// uses the custom header for the timeline page
// template file html--timeline.tpl.php
function cssi_boot_preprocess_html(&$vars) {
  if ($node = menu_get_object()) {
    if($node->nid == 891 )  {
      $vars['theme_hook_suggestions'][] = 'html__timeline';
    }
  }
}

/**
* Process variables for search-result.tpl.php.
*
* @see search-result.tpl.php
*/
function cssi_boot_preprocess_search_result(&$variables) {
  // Remove user name and modification date from search results
  $variables['info'] = '';
}

?>