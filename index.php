<?php

	require_once("config.php");
	
	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);

	// Lista um usuario 
		// $root = new Usuario();
		// $root->loadbyId(3);
		// echo $root;
	
	// Lista todos os usuario em ordem crescente por login
		//$lista = Usuario::getList();
		//echo json_encode($lista);

	// lista todos a partir de um like.
		//$search = Usuario::search('r');
		//echo json_encode($search);

	// Testando o login e a senha
		$usuario = new Usuario();
		$usuario->login("mauricio", "5431231");
		echo $usuario;

?>