<?php

namespace Drupal\juara\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Juara entities.
 */
class JuaraViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
