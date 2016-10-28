<?php

	require_once ("../model/Entregador.php");

	$ent = new Entregador();
	$ent->setNome($_POST['name']);
	$ent->setRg($_POST['rg']);
	$ent->setCnh($_POST['cnh']);
	$ent->setCpf($_POST['cpf']);
	$ent->setDt_nasc($_POST['dt_nasc']);


	$ent->create();
?>