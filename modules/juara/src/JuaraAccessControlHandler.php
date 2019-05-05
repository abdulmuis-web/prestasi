<?php

namespace Drupal\juara;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Juara entity.
 *
 * @see \Drupal\juara\Entity\Juara.
 */
class JuaraAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\juara\Entity\JuaraInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished juara entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published juara entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit juara entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete juara entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add juara entities');
  }

}
