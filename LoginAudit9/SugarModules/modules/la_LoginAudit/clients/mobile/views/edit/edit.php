<?php
$module_name = 'la_LoginAudit';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
            1 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'name',
              1 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              2 => 
              array (
                'name' => 'ip_address',
                'label' => 'LBL_IP_ADDRESS',
              ),
              3 => 
              array (
                'name' => 'typed_name',
                'label' => 'LBL_TYPED_NAME',
              ),
              4 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_IS_ADMIN',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
