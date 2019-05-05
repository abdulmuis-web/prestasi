<?php

namespace Drupal\tingkat;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Tingkat entity.
 *
 * @see \Drupal\tingkat\Entity\Tingkat.
 */
class TingkatAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\tingkat\Entity\TingkatInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished tingkat entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published tingkat entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit tingkat entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete tingkat entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add tingkat entities');
  }

}
