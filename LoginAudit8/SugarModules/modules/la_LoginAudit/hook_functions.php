<?php

class loginActions {

        function updateLoginAudit(&$la_bean, $la_event, $la_arguments){
			
                // Sugar strangely doesn't populate event on login_failed
                if(empty($la_event)){
                        $la_event = 'login_failed';
                }

                switch($la_event) {
                        case 'login_failed':
								$typed_name = '******';
                                $la_result = "Failed";
                                break;

                        case 'after_login':
								$typed_name = $la_bean->user_name;
                                $la_result = "Success";
                                break;

                        case 'before_logout':
								$typed_name = $la_bean->user_name;
                                $la_result = "Logout";
                                break;

                        default: 
								$typed_name = '******';
                                $la_result = "Failed";
                                break;

                }

				$la_entry = BeanFactory::newBean('la_LoginAudit');
				$la_entry->assigned_user_id = $la_bean->user_id;
				$la_entry->typed_name = $typed_name;
				$la_entry->is_admin = $la_bean->is_admin;
				$la_entry->ip_address = $_SERVER['REMOTE_ADDR'];
				$la_entry->name = $la_result;		
				$la_entry->save();
				

        }

}

?>