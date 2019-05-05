<?php

/**
 * @file
 * Contains prestasi.page.inc.
 *
 * Page callback for Prestasi entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Prestasi templates.
 *
 * Default template: prestasi.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_prestasi(array &$variables) {
  // Fetch Prestasi Entity Object.
  $prestasi = $variables['elements']['#prestasi'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
