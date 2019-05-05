<?php

namespace Drupal\prestasi;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Prestasi entities.
 *
 * @ingroup prestasi
 */
class PrestasiListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Prestasi');
    $header['score'] = $this->t('Skor');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\prestasi\Entity\Prestasi */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.prestasi.edit_form',
      ['prestasi' => $entity->id()]
    );
    $row['score'] = $entity->score->value;
    return $row + parent::buildRow($entity);
  }

}
