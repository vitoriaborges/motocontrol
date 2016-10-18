<?php

	require_once 'DbConn.php';
	require_once 'Cliente.php';

	$cli= new Cliente();
	$cli->setNome("Sashiburi - ZONA SUL");
	$cli->setEndereco("Av. Pereira Passos");
	$cli->setTelefone("(51) 3222-1400");
	$cli->setCnpj("06.312.985/0001-77");

 	$cli->create();


?>