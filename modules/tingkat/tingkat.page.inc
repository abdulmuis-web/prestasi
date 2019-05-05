<?php

/**
 * @file
 * Contains tingkat.page.inc.
 *
 * Page callback for Tingkat entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Tingkat templates.
 *
 * Default template: tingkat.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_tingkat(array &$variables) {
  // Fetch Tingkat Entity Object.
  $tingkat = $variables['elements']['#tingkat'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
