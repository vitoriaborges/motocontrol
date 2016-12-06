<?php

require_once ("../model/Entregador.php");

if (isset($_POST['op'])){
	$op = $_POST['op'];
}else if(isset($_GET['op']) && isset($_GET['id'])){
	$op = $_GET['op'];
	$id = $_GET['id'];
}

if ($op == 'ins'){

	$ent = new Entregador();
	$ent->setNome($_POST['name']);
	$ent->setRg($_POST['rg']);
	$ent->setCnh($_POST['cnh']);
	$ent->setCpf($_POST['cpf']);
	$ent->setDt_nascimento($_POST['dt_nascimento']);
	$ent->create();

}else if ($op == 'upd') {
	$ent = new Entregador();
	$ent->setIdEntregador($_POST['identregador']);
	$ent->setNome($_POST['name']);
	$ent->setRg($_POST['rg']);
	$ent->setCnh($_POST['cnh']);
	$ent->setCpf($_POST['cpf']);
	$ent->setDt_nascimento($_POST['dt_nascimento']);
	$ent->save();

}else if ($op == 'lista') {
	$ent = new Entregador();
	$ent->lista($_POST['entregador']);

}elseif ($op == 'edita') {
	$ent = new Entregador();
	$ent->setIdEntregador($id);
	$ent->buscaId();

}else if ($op == 'mostra') {
	$ent = new Entregador();
	$ent->setIdEntregador($id);
	$ent->buscaId($op);

}else if ($op == 'del') {
	$ent = new Entregador();
	$ent->setIdEntregador($id);
	$ent->delete();
}


?>