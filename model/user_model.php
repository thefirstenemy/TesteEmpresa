<?php
require_once 'connection/config.php';
class User{	
	public function getNomeGestorDB($ramalGestor){		
		$connection = new Connection();
		$conn = $connection->conn();		
		$queryNome = "SELECT nome_gestor FROM ";
		$queryNome .= " tb_usuario_gestor ";
		$queryNome .= " WHERE ";
		$queryNome .= "ramal = '$ramalGestor'"; 
		
		$resultNome = mysqli_query($conn, $queryNome);
		
		$result = mysqli_fetch_assoc($resultNome);
		$nome = $result['nome_gestor'];		
		return $nome;
	}
}

?>