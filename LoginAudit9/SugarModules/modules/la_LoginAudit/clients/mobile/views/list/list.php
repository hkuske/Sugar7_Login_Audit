<?php
$module_name = 'la_LoginAudit';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'ip_address',
                'label' => 'LBL_IP_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
