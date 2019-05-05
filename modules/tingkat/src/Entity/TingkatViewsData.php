<?php

namespace Drupal\tingkat\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Tingkat entities.
 */
class TingkatViewsData extends EntityViewsData {

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
