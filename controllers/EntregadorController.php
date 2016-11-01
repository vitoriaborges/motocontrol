<?php

require_once ("../model/Entregador.php");

$bd = $_POST['bd'];
if ($bd == 'ins'){

	$ent = new Entregador();
	$ent->setNome($_POST['name']);
	$ent->setRg($_POST['rg']);
	$ent->setCnh($_POST['cnh']);
	$ent->setCpf($_POST['cpf']);
	$ent->setDt_nasc($_POST['dt_nasc']);
	$ent->create();

}else if ($bd == 'upd'){




}else if ($bd == 'del'){
	



}





?>