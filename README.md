# SPnet Drupal Theme

This is a standalone theme for SPnet.nl

Keep an eye on the following settings in CiviCRM, 
wich should be set correctly in the civicrm.settings.php

$civicrm_setting['Directory Preferences']['customTemplateDir'] = "$spSitesDefault/themes/spnet/templates_civicrm";
$civicrm_setting['URL Preferences']['customCSSURL'] = "$spBaseURL/sites/default/themes/spnet/css/civicrm.css";
$civicrm_setting['CiviCRM Preferences']['disable_core_css'] = TRUE;

