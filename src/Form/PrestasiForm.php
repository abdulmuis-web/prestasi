<?php

namespace Drupal\prestasi\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\juara\Entity\Juara;
use Drupal\tingkat\Entity\Tingkat;
use Drupal\penyelenggara\Entity\Penyelenggara;

/**
 * Form controller for Prestasi edit forms.
 *
 * @ingroup prestasi
 */
class PrestasiForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\prestasi\Entity\Prestasi */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;
    $form['name']['#access'] = FALSE;
    $form['score']['#access'] = FALSE;
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\wilayah_indonesia_province\Entity\Province */		
	parent::validateForm($form, $form_state);

    $entity = $this->entity;

	//$form_state->setErrorByName('juara',"Just Test");
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

	$values = $form_state->getValues();

    $juara = Juara::load($values['juara'][0]['target_id']);
    $tingkat = Tingkat::load($values['tingkat'][0]['target_id']);
    $penyelenggara = Penyelenggara::load($values['penyelenggara'][0]['target_id']);
	
	$title = $juara->label() .' Tingkat '. $tingkat->label() .' dari '. $penyelenggara->label();
	$score = $juara->get('score')->value + $tingkat->get('score')->value + $penyelenggara->get('score')->value;
	$entity->set('name', $title);
	$entity->set('score', $score);

    $status = parent::save($form, $form_state);
    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Prestasi.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Prestasi.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.prestasi.canonical', ['prestasi' => $entity->id()]);
  }

}
