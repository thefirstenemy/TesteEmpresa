<?php
/*
	Requisição de acesso ao model user para instanciar uma determinada classe de acesso. 
*/
require_once "model/user_model.php";
/*
	Classe controller User que recebe parâmetros vindas va view
	para insert, update lista e delete do usuarios e seus 
	acompanhantes. 
*/

class UserController{	
	/*
		Método requisita a lista de usuários e acompanhantes do banco de dados
		com parâmentros vazios para o construtor do model apenas para popular na tela
	*/
    public function UserList()
    {       	
    	$userModel = new UserModel($data = "");
    	$result = $userModel->getUser();
    	return $result;
    }
	/*
		Método recebe via parâmetros as informações para gravar usuário e acompanhantes 
		caso hajam
	*/	

    public function UserInsert($data)
    {
    	$userModel = new UserModel();    	
    	var_dump($data);
        return true;
    }

    /*
		Método recebe via parâmetros as informações para alterar usuário e(ou) acompanhantes 
		caso hajam.
	*/

    public function UserUpdate($data)
    {
    	var_dump($data);
    	return true;
    }

    /*
		Método recebe via parâmetros as informações para deletar usuário e acompanhantes 
		caso hajam
	*/

    public function UserDelete($data)
    {
    	var_dump($data);    	
    }    
}
?>