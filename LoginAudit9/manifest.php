<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    '8.*.*',
    '9.*.*',
	'10.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    'PRO',
	'ENT',
    'ULT',
  ),
  'readme' => '',
  'key' => 'la',
  'author' => 'Kuske',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'LoginAudit9',
  'published_date' => '2020-04-20 04:00:00',
  'type' => 'module',
  'version' => 2020042004,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'LoginAudit9',
  'beans' => 
  array (
    array (
      'module' => 'la_LoginAudit',
      'class' => 'la_LoginAudit',
      'path' => 'modules/la_LoginAudit/la_LoginAudit.php',
      'tab' => false,
    ),
  ),
  'copy' => 
  array (
    array (
      'from' => '<basepath>/modules/la_LoginAudit/',
      'to' =>              'modules/la_LoginAudit/',
    ),
    array (
      'from' => '<basepath>/custom/Extension/modules/Users/Ext/LogicHooks/LoginAudit9_logic_hooks.php',
      'to' =>              'custom/Extension/modules/Users/Ext/LogicHooks/LoginAudit9_logic_hooks.php',
    ),
/*	
    array (
      'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/LoginAudit.menu.php',
      'to' =>              'custom/Extension/modules/Administration/Ext/Administration/LoginAudit.menu.php',
    ),
*/	
  ),
  'language' => 
  array (
    array (
      'from' => '<basepath>/custom/Extension/application/Ext/Language/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/custom/Extension/application/Ext/Language/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    array (
	'from'=> '<basepath>/custom/Extension/modules/Administration/Ext/Language/en_us.LoginAudit9.php',
	'to_module'=> 'Administration',
	'language'=>'en_us',
    ),
    array (
	'from'=> '<basepath>/custom/Extension/modules/Administration/Ext/Language/de_DE.LoginAudit9.php',
	'to_module'=> 'Administration',
	'language'=>'de_DE',
    ),
  ),
  
  'administration' => 
  array (
     array (
      'from' => '<basepath>/custom/Extension/modules/Administration/Ext/Administration/LoginAudit.menu.php',
    ),
  ),	
 
);