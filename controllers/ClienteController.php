<?php

	require_once ("../model/Cliente.php");

	$cli = new Cliente();
	$cli->setNome($_POST['name']);
	$cli->setEndereco($_POST['end']);
	$cli->setTelefone($_POST['tel']);
	$cli->setCnpj($_POST['cnpj']);


	$cli->create();


?>
