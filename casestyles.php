<?php

require_once 'casestyles.civix.php';

use CRM_Casestyles_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function casestyles_civicrm_config(&$config): void {
  _casestyles_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function casestyles_civicrm_install(): void {
  _casestyles_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function casestyles_civicrm_enable(): void {
  _casestyles_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_buildForm().
 */
function casestyles_civicrm_buildForm($formName, &$form): void {
  if ($formName === 'CRM_Case_Form_CaseView') {
    \Civi::resources()->addStyleFile(E::LONG_NAME, 'css/caseview.css');
  }
}
