<?php
/*
global $theme;

if($theme){
	$theme_path="themes/".$theme."/";
	$image_path=$theme_path."images/";
} else {
	$image_path = 'themes/default/images/';
}
*/
$admin_option_defs = array();
$admin_option_defs['Administration']['LoginAudit'] = array(
	'Administration',   //Icon name. Available icons are located in ./themes/default/images 
	'LBL_LOGINAUDIT_ADMIN', 
	'LBL_LOGINAUDIT_DESCRIPTION', 
    'javascript:parent.SUGAR.App.router.navigate("la_LoginAudit", {trigger: true})',
//	'./index.php?module=la_LoginAudit&action=index'
);
$admin_group_header[]= array(
	'LBL_LOGINAUDIT_GROUP',   //Section header label
	'',   //$other_text parameter for get_form_header()
	false,   //$show_help parameter for get_form_header()
	$admin_option_defs,   //Section links
	'LBL_LOGINAUDIT_GROUP_DESCRIPTION', //Section description label
);

?>
