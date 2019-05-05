<?php

namespace Drupal\penyelenggara;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Penyelenggara entity.
 *
 * @see \Drupal\penyelenggara\Entity\Penyelenggara.
 */
class PenyelenggaraAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\penyelenggara\Entity\PenyelenggaraInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished penyelenggara entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published penyelenggara entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit penyelenggara entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete penyelenggara entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add penyelenggara entities');
  }

}
