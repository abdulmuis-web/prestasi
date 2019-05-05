<?php

namespace Drupal\penyelenggara\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Penyelenggara entities.
 *
 * @ingroup penyelenggara
 */
interface PenyelenggaraInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Penyelenggara name.
   *
   * @return string
   *   Name of the Penyelenggara.
   */
  public function getName();

  /**
   * Sets the Penyelenggara name.
   *
   * @param string $name
   *   The Penyelenggara name.
   *
   * @return \Drupal\penyelenggara\Entity\PenyelenggaraInterface
   *   The called Penyelenggara entity.
   */
  public function setName($name);

  /**
   * Gets the Penyelenggara creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Penyelenggara.
   */
  public function getCreatedTime();

  /**
   * Sets the Penyelenggara creation timestamp.
   *
   * @param int $timestamp
   *   The Penyelenggara creation timestamp.
   *
   * @return \Drupal\penyelenggara\Entity\PenyelenggaraInterface
   *   The called Penyelenggara entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Penyelenggara published status indicator.
   *
   * Unpublished Penyelenggara are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Penyelenggara is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Penyelenggara.
   *
   * @param bool $published
   *   TRUE to set this Penyelenggara to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\penyelenggara\Entity\PenyelenggaraInterface
   *   The called Penyelenggara entity.
   */
  public function setPublished($published);

}
