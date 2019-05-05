<?php

/**
 * @file
 * Contains juara.page.inc.
 *
 * Page callback for Juara entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Juara templates.
 *
 * Default template: juara.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_juara(array &$variables) {
  // Fetch Juara Entity Object.
  $juara = $variables['elements']['#juara'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
