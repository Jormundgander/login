<?php

	/*Punto de entrada de la aplicación*/
	if (!empty($_GET['url'])) {

		require_once 'Controllers/'.$_GET['url'].'Controller.php';

	} elseif (empty($_GET['url'])) {

		require_once 'Controllers/loginController.php';
	
	}