<?php
$module_name = 'la_LoginAudit';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'ip_address',
                'label' => 'LBL_IP_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'typed_name',
                'label' => 'LBL_TYPED_NAME',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_IS_ADMIN',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'creaed_by',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
