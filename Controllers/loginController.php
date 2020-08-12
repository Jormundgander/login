<?php

	require_once 'Models/Login.php';

	if (!empty($_POST['request'])) {
		
		$user = $_POST['username'];
		$pass = $_POST['pass'];

		$object = new Login();
		$object->setUsername($user);
		$object->setPass($pass);
		$response = $object->Auth();

		// Validamos existencia de usuario
		if (count($response) > 0) {
		
			$acceso = ['acceso' => 'Concedido'];
			echo json_encode($acceso);

		} else {
			
			$acceso = ['acceso' => 'Negado'];
			echo json_encode($acceso);
		
		}

	} else {

		require_once 'Views/loginView.php';
	
	}
