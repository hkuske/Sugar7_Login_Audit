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
  'name' => 'LoginAudit',
  'published_date' => '2020-04-13 15:33:25',
  'type' => 'module',
  'version' => 1586792005,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'LoginAudit',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'la_LoginAudit',
      'class' => 'la_LoginAudit',
      'path' => 'modules/la_LoginAudit/la_LoginAudit.php',
      'tab' => false,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/la_LoginAudit',
      'to' => 'modules/la_LoginAudit',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
	'from'=> '<basepath>/SugarModules/language/administration/en_us.LoginAuditAdmin.php',
	'to_module'=> 'Administration',
	'language'=>'en_us',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'administration' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/administration/LoginAuditAdmin.menu.php',
    ),
  ),		 
  'logic_hooks' => array(
     array(
        'module'         => 'Users',
        'hook'           => 'login_failed',
        'order'          => 100,
        'description'    => 'Check Login status',
        'file'           => 'modules/la_LoginAudit/hook_functions.php',
        'class'          => 'loginActions',
        'function'       => 'updateLoginAudit',
     ),
     array(
        'module'         => 'Users',
        'hook'           => 'after_login',
        'order'          => 100,
        'description'    => 'Check Login status',
        'file'           => 'modules/la_LoginAudit/hook_functions.php',
        'class'          => 'loginActions',
        'function'       => 'updateLoginAudit',
     ),
     array(
        'module'         => 'Users',
        'hook'           => 'before_logout',
        'order'          => 100,
        'description'    => 'Check Login status',
        'file'           => 'modules/la_LoginAudit/hook_functions.php',
        'class'          => 'loginActions',
        'function'       => 'updateLoginAudit',
     ),
   ), 

);