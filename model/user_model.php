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
	private $nameUser;
	private $queryNome; 
	private $result;
	private $connection; 
	private $arrayGet;
	/*
		Construtor de acesso a classe
	*/
	function __construct($nameUser, $queryNome, $result, $connection, $arrayGet) {
       $this->nameUser = $nameUser;
       $this->queryUser = $queryUser;
       $this->result = $result;
       $this->userId = $userId;    
       $this->connection = $connection;
       $this->arrayGet = $arrayGet;   
   }

	//Método de busca e lista informações de usuários na tabela "users"
	public function getUser($ramalGestor){
		$this->connection = new Connection()->conn();

		$this->queryUser = 'SELECT id, name';
		$this->queryUser . ='FROM users';			
		
		$resultGet = mysqli_query($this->connection, $this->queryUser);
		
		$this->arrayGet = array();
		while($row = mysqli_fetch_array()){
			array_push($this->arrayGet, array(
				"id" => $row['id'];
				"nome" => $row['name'];
			));
		}		
		return $this->arrayGet;
	}

	//Método que insere no banco de dados um novo regustro de usuário na tabela "users"
	public function insertUser($data){		
		$this->connection = new Connection()->conn();
		$data['nome'] = $this->nameUser;

		$this->queryUser = 'INSERT INTO users' 
		$this->queryUser .= ' ("id", "name")';
		$this->queryUser .= ' VALUES'; 
		$this->queryUser .= ' (NULL, $this->nameUser)';	 
		
		$this->queryUser = mysqli_query($conn, $this->queryUser);
		return $this->queryUser;
	}

	//Método que atualiza no banco de dados um determinado usuário na tabela "users"
	public function updateUser($data){		
		$this->connection = new Connection()->conn();

		$data['id'] = $this->userId;
		$data['name'] = $this->nameUser;

		$this->queryUser =  "UPDATE users" 
		$this->queryUser .= " SET name = '$this->nameUser'"
		$this->queryUser .= " WHERE id = '$this->userId'"; 
		
		$this->resultQuery = mysqli_query($conn, $queryNome);		
		return $this->queryUser;
	}

	//Método que deleta o registro de um determinado usuário na tabela "users"
	public function deleteUser($ramalGestor){		
		$this->connection = new Connection()->conn();
		
		$this->queryUser = "DELETE FROM `users`"
		$this->queryUser .="WHERE `users`.`id` = "; 
		
		$resultNome = mysqli_query($this->connection, $this->queryUser);
		return $nome;
	}
}

?>