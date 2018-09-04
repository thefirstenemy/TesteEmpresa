<?php
/*
	Nesse Framework, o arquivo index funciona como router do sistema,
	facilitando assim o uso de mais views e possibilitando o uso de 
	MVC e orientação a objetos
*/

//Requisição de acesso a classe user_controller 
require_once 'controller/user_controller.php';

//Operador ternário recebe parâmetros da view e os envia para serem filtrados
@$op = $_REQUEST ['method'] ? $_REQUEST ['method'] : $_REQUEST ['op'];

//Instância da classe User presente no controller
$user = new UserController();
/*
	O operador lógico "switch case" filtra as informações de acordo com 
	o controller relacionando-o a sua respectiva view, podendo ser incrementado
	com mais casos de uso caso o código for crescendo.
*/
switch ($op) {
	//Caso Essa parte receba "UserInsert" ira enviar parâmetros para controller Insert
	case 'UserInsert' :		
		$returnInfo = $user->sendMessage($_REQUEST ['parameter']);
		if ($returnInfo) {
			echo json_encode ( $returnMsg );
			exit ();
		}
		break;
	//Caso Essa parte receba "UserInsert" ira enviar parâmetros para controller Update	
	case 'UserUpdate' :		
		$returnInfo = $user->sendMessage($_REQUEST ['parameter']);
		if ($returnInfo) {
			echo json_encode ( $returnMsg );
			exit ();
		}
		break;
	//Caso Essa parte receba "UserInsert" ira enviar parâmetros para controller Delete	
	case 'UserDelete' :		
		$returnInfo = $user->sendMessage($_REQUEST ['parameter']);
		if ($returnInfo) {
			echo json_encode ( $returnMsg );
			exit ();
		}
		break;
	//Essa parte apenas listas os usuários/acompanhantes presentes no banco de dados	
	case 'UserList' :		
		$returnInfo = $user->UserList();
		if ($returnInfo) {
			echo json_encode ( $returnInfo );
			exit ();
		}
		break;
	default :
		header ( "Location:view/exemple.php" );
		break;
}
?>