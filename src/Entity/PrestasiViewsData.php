<?php

namespace Drupal\prestasi\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Prestasi entities.
 */
class PrestasiViewsData extends EntityViewsData {

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
