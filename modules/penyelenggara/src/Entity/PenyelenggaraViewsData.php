<?php

namespace Drupal\penyelenggara\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Penyelenggara entities.
 */
class PenyelenggaraViewsData extends EntityViewsData {

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
