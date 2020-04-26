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
			'10.*.*',
			'9.*.*',
			'8.*.*',
	     	'7.*.*',
),
  'acceptable_sugar_flavors' => 
  array (
		  	'PRO','ENT', 'ULT',
  ),
  'readme' => '',
  'key' => 'la',
  'author' => 'Kuske',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'LoginAudit8',
  'published_date' => '2020-04-10 00:00:00',
  'type' => 'module',
  'version' => 20200410000000,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'LoginAudit8',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'la_LoginAudit',
      'class' => 'la_LoginAudit',
      'path' => 'modules/la_LoginAudit/la_LoginAudit.php',
      'tab' => true,
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
	'from'=> '<basepath>/SugarModules/language/application/en_us.LoginAuditAdmin.php',
	'to_module'=> 'Administration',
	'language'=>'en_us',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'administration' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/administration/LoginAuditAdmin.menu.php',
    ),
  ),		 
'logic_hooks' => array(
     array(
        'module'         => 'Users',
        'hook'           => 'login_failed',
        'order'          => 99,
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
        'order'          => 101,
        'description'    => 'Check Login status',
        'file'           => 'modules/la_LoginAudit/hook_functions.php',
        'class'          => 'loginActions',
        'function'       => 'updateLoginAudit',
     ),
   ), 
);