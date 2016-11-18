<?php

require_once ("../model/Cliente.php");

if (isset($_POST['op'])){
	$op = $_POST['op'];
}else if(isset($_GET['op']) && isset($_GET['id'])){
	$op = $_GET['op'];
	$id = $_GET['id'];
}

if ($op == 'ins'){

	$cli = new Cliente();
	$cli->setNome($_POST['name']);
	$cli->setEndereco($_POST['end']);
	$cli->setCep($_POST['cep']);
	$cli->setTelefone($_POST['tel']);
	$cli->setCnpj($_POST['cnpj']);
	$cli->create();

}else if ($op == 'upd'){
	$cli = new Cliente();



}else if ($op == 'lista') {
	$cli = new Cliente();
	$cli->lista($_POST['cliente']);
 			


}else if ($op == 'del'){
	$cli = new Cliente();
	$cli->setIdCliente($id);
	$cli->delete();
}
?>
