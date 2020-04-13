<?php
$popupMeta = array (
    'moduleMain' => 'la_LoginAudit',
    'varName' => 'la_LoginAudit',
    'orderBy' => 'la_loginaudit.name',
    'whereClauses' => array (
  'name' => 'la_loginaudit.name',
  'date_entered' => 'la_loginaudit.date_entered',
  'ip_address' => 'la_loginaudit.ip_address',
  'typed_name' => 'la_loginaudit.typed_name',
  'is_admin' => 'la_loginaudit.is_admin',
  'created_by_name' => 'la_loginaudit.created_by_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'date_entered',
  5 => 'ip_address',
  6 => 'typed_name',
  7 => 'is_admin',
  8 => 'created_by_name',
),
    'searchdefs' => array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => 10,
    'name' => 'name',
  ),
  'ip_address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IP_ADDRESS',
    'width' => 10,
    'name' => 'ip_address',
  ),
  'typed_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TYPED_NAME',
    'width' => 10,
    'name' => 'typed_name',
  ),
  'is_admin' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_IS_ADMIN',
    'width' => 10,
    'name' => 'is_admin',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => 10,
    'name' => 'created_by_name',
  ),
),
    'listviewdefs' => array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
    'name' => 'date_entered',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => 10,
    'default' => true,
    'name' => 'name',
  ),
  'IP_ADDRESS' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_IP_ADDRESS',
    'width' => 10,
    'name' => 'ip_address',
  ),
  'TYPED_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TYPED_NAME',
    'width' => 10,
    'name' => 'typed_name',
  ),
  'IS_ADMIN' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_IS_ADMIN',
    'width' => 10,
    'name' => 'is_admin',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => 10,
    'default' => true,
    'name' => 'created_by_name',
  ),
),
);
