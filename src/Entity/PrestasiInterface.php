<?php

namespace Drupal\prestasi\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Prestasi entities.
 *
 * @ingroup prestasi
 */
interface PrestasiInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Prestasi name.
   *
   * @return string
   *   Name of the Prestasi.
   */
  public function getName();

  /**
   * Sets the Prestasi name.
   *
   * @param string $name
   *   The Prestasi name.
   *
   * @return \Drupal\prestasi\Entity\PrestasiInterface
   *   The called Prestasi entity.
   */
  public function setName($name);

  /**
   * Gets the Prestasi creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Prestasi.
   */
  public function getCreatedTime();

  /**
   * Sets the Prestasi creation timestamp.
   *
   * @param int $timestamp
   *   The Prestasi creation timestamp.
   *
   * @return \Drupal\prestasi\Entity\PrestasiInterface
   *   The called Prestasi entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Prestasi published status indicator.
   *
   * Unpublished Prestasi are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Prestasi is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Prestasi.
   *
   * @param bool $published
   *   TRUE to set this Prestasi to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\prestasi\Entity\PrestasiInterface
   *   The called Prestasi entity.
   */
  public function setPublished($published);

}
