<?php
require_once 'controller/user_controller.php';
@$op = $_REQUEST ['method'] ? $_REQUEST ['method'] : $_REQUEST ['op'];
$user = new User();
switch ($op) {
	case 'user' :		
		$returnInfo = $user->sendMessage($_REQUEST ['parameter']);
		if ($returnInfo) {
			echo json_encode ( $returnMsg );
			exit ();
		}
		break;
	default :
		header ( "Location:view/usuario.php" );
		break;
}
?>