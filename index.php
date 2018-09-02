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
$user = new User();

/*
	O operador lógico "switch case" filtra as informações de acordo com 
	o controller relacionando-o a sua respectiva view, podendo ser incrementado
	com mais casos de uso caso o código for crescendo.
*/
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