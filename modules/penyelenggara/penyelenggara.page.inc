<?php

/**
 * @file
 * Contains penyelenggara.page.inc.
 *
 * Page callback for Penyelenggara entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Penyelenggara templates.
 *
 * Default template: penyelenggara.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_penyelenggara(array &$variables) {
  // Fetch Penyelenggara Entity Object.
  $penyelenggara = $variables['elements']['#penyelenggara'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
