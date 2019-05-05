<?php

namespace Drupal\prestasi;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Prestasi entity.
 *
 * @see \Drupal\prestasi\Entity\Prestasi.
 */
class PrestasiAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\prestasi\Entity\PrestasiInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished prestasi entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published prestasi entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit prestasi entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete prestasi entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add prestasi entities');
  }

}
