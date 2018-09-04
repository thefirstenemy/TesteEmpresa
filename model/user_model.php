<?php
/*
	Requisição de instância de para a classe config, 
	aonde temos acesso o bando de dados.
*/
require_once 'connection/config.php';
/*
	Classe que persiste no banco de dados 
	na tabela users 
*/
class UserModel{
	/*
		Esses são os atributos ultilizados na classe,
		todos private para garantir a segurança, sendo apenas 
		vistos pelos métodos da classe.
	*/
	private $data;
	
	/*
		Construtor de acesso a classe
	*/
	function __construct($data) {
       $this->data = $data;
   }

	//Método de busca e lista informações de usuários na tabela "users"
	public function getUser(){
		$connection = new Connection();
		
		$queryUser = 'SELECT id, name';
		$queryUser .= ' FROM users';			
		
		$mysqliQuery = mysqli_query($connection->conn(), $queryUser);
				
		$arrayGet = array();
		while($row = mysqli_fetch_array($mysqliQuery)){
			array_push($arrayGet, array(
				"id" => $row['id'],
				"nome" => $row['name'],
			));
		}		
		return $arrayGet;
	}

	//Método que insere no banco de dados um novo regustro de usuário na tabela "users"
	public function insertUser($data){		
		$connection = new Connection();	

		$nameUser = $data['name'];	

		$queryUser = 'INSERT INTO users'; 
		$queryUser .= ' ("id", "name")';
		$queryUser .= ' VALUES'; 
		$queryUser .= ' (NULL, '. $nameUser .'  )';	 
		
		$mysqliQuery = mysqli_query($conn, $queryUser);
		return $mysqliQuery;
	}

	//Método que atualiza no banco de dados um determinado usuário na tabela "users"
	public function updateUser($data){		
		$connection = new Connection();

		$userId = $data['id']; 
		$nameUser = $data['name'];

		$queryUser =  'UPDATE users'; 
		$queryUser .= ' SET name = ' . $data['id'] .'';
		$queryUser .= ' WHERE id = ' . $userId . ''; 
		
		$mysqliQuery = mysqli_query($conn, $queryUser);		
		return $mysqliQuery;
	}

	//Método que deleta o registro de um determinado usuário na tabela "users"
	public function deleteUser($data){		
		$connection = new Connection();

		$userId = $data['id'];

		$queryUser =  'DELETE FROM users';
		$queryUser .= ' WHERE id = ' . $userId . ''; 
		
		$mysqliQuery = mysqli_query($connection, $queryUser);
		return $mysqliQuery;
	}
}

?>