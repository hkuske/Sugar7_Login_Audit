<?php
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['login_failed'] = Array(); 
$hook_array['login_failed'][] = Array(
  100,
  'Check Login status',
  'modules/la_LoginAudit/hook_functions.php',
  'loginActions',
  'updateLoginAudit',
  );

$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(
  100,
  'Check Login status',
  'modules/la_LoginAudit/hook_functions.php',
  'loginActions',
  'updateLoginAudit',
  );

$hook_array['before_logout'] = Array(); 
$hook_array['before_logout'][] = Array(
  100,
  'Check Login status',
  'modules/la_LoginAudit/hook_functions.php',
  'loginActions',
  'updateLoginAudit',
  );
