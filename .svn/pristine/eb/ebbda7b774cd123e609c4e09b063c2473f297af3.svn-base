<?php

namespace Drupal\sanskriti_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 *
 */
class SanskritiVariablesForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'sanskriti_module.adminsettings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'SanskritiVariablesForm';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('sanskriti_module.admin_settings_form');

    $form['#attributes'] = ['enctype' => 'multipart/form-data'];
	
	$form['home_page_vars'] = [
      '#type' => 'details',
      '#title' => t('Home Page Variables'),
      '#open' => TRUE,
    ];

    $form['home_page_vars']['glimpses_title_head'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Glimpses Title Head'),
      '#description' => $this->t('Glimpses Title Head display on Home Page'),
      '#default_value' => $config->get('glimpses_title_head'),
    ]; 
	
    return parent::buildForm($form, $form_state);
  }

 
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    \Drupal::configFactory()->getEditable('sanskriti_module.admin_settings_form')
      ->set('glimpses_title_head', $form_state->getValue('glimpses_title_head'))     
      ->save();
  }
  
}
