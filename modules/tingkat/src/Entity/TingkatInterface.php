<?php

namespace Drupal\tingkat\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Tingkat entities.
 *
 * @ingroup tingkat
 */
interface TingkatInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Tingkat name.
   *
   * @return string
   *   Name of the Tingkat.
   */
  public function getName();

  /**
   * Sets the Tingkat name.
   *
   * @param string $name
   *   The Tingkat name.
   *
   * @return \Drupal\tingkat\Entity\TingkatInterface
   *   The called Tingkat entity.
   */
  public function setName($name);

  /**
   * Gets the Tingkat creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Tingkat.
   */
  public function getCreatedTime();

  /**
   * Sets the Tingkat creation timestamp.
   *
   * @param int $timestamp
   *   The Tingkat creation timestamp.
   *
   * @return \Drupal\tingkat\Entity\TingkatInterface
   *   The called Tingkat entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Tingkat published status indicator.
   *
   * Unpublished Tingkat are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Tingkat is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Tingkat.
   *
   * @param bool $published
   *   TRUE to set this Tingkat to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\tingkat\Entity\TingkatInterface
   *   The called Tingkat entity.
   */
  public function setPublished($published);

}
