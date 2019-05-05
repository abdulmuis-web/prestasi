<?php

namespace Drupal\tingkat;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Tingkat entities.
 *
 * @ingroup tingkat
 */
class TingkatListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Tingkat');
    $header['score'] = $this->t('Skor');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\tingkat\Entity\Tingkat */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.tingkat.edit_form',
      ['tingkat' => $entity->id()]
    );
    $row['score'] = $entity->score->value;
    return $row + parent::buildRow($entity);
  }

}
