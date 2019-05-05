<?php

namespace Drupal\juara\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Juara entities.
 *
 * @ingroup juara
 */
interface JuaraInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Juara name.
   *
   * @return string
   *   Name of the Juara.
   */
  public function getName();

  /**
   * Sets the Juara name.
   *
   * @param string $name
   *   The Juara name.
   *
   * @return \Drupal\juara\Entity\JuaraInterface
   *   The called Juara entity.
   */
  public function setName($name);

  /**
   * Gets the Juara creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Juara.
   */
  public function getCreatedTime();

  /**
   * Sets the Juara creation timestamp.
   *
   * @param int $timestamp
   *   The Juara creation timestamp.
   *
   * @return \Drupal\juara\Entity\JuaraInterface
   *   The called Juara entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Juara published status indicator.
   *
   * Unpublished Juara are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Juara is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Juara.
   *
   * @param bool $published
   *   TRUE to set this Juara to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\juara\Entity\JuaraInterface
   *   The called Juara entity.
   */
  public function setPublished($published);

}
