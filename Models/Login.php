<?php

require_once 'Config/Connection.php';

class Login extends Connection
{
	private $connection;
	private $username;
	private $pass; 
	
	function __construct()
	{
		$this->connection = new Connection();
	}

	function setUsername($username) 
	{
		$this->username = $username;
	}

	function getUsername()
	{
		return $this->username;
	}

	function setPass($pass) 
	{
		$this->pass = $pass;
	}

	function getPass()
	{
		return $this->pass;
	}	  

	function Auth()
	{
		if($this->connection->checkConnection()) {

            $query = "SELECT users.username, users.pass
            		  FROM users
                      WHERE users.username = :username
                      AND users.pass = :pass";

            try {

                $PDOStatement = $this->connection->prepare($query);
                $PDOStatement->bindValue(':username', $this->username);
                $PDOStatement->bindValue(':pass', $this->pass);
                $PDOStatement->execute();
                $user = $PDOStatement->fetchAll();
                return $user;

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        } else {
        	return 'Conexión no establecida';
        }
	}
}