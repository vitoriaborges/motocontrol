<?php

require_once 'DbConn.php';

Class Cliente{

	private $Idcliente;
	private $Nome;
	private $Endereco;
	private $Cep;
	private $Telefone;
	private $Cnpj;

	public function setIdCliente($i){
		$this->Idcliente=$i;
	}
	public function getIdCliente(){
		return $this->Idcliente;
	}

	public function setNome($n){
		$this->Nome=$n;
	}
	public function getNome(){
		return $this->Nome;
	}

	public function setEndereco($e){
		$this->Endereco=$e;
	}
	public function getEndereco(){
		return $this->Endereco;
	}

	public function setCep($cep){
		$this->Cep=$cep;
	}
	public function getCep(){
		return $this->Cep;
	}

	public function setTelefone($t){
		$this->Telefone=$t;
	}
	public function getTelefone(){
		return $this->Telefone;
	}

	public function setCnpj($c){
		$this->Cnpj=$c;
	}
	public function getCnpj(){
		return $this->Cnpj;
	}


	function create(){
		$conn = new DbConn();
		$c = $conn->getConn();
		$ins = $c->query("insert into Clientes(Nome, Endereco, Cep, Telefone, Cnpj) values ('".$this->Nome."','".$this->Endereco."','".$this->Cep."','".$this->Telefone."','".$this->Cnpj."')");
		if($ins){
			print ("Inseriu o cliente");
			$id = mysqli_insert_id($c);
			header("location:../main.php?menu=3&idcli=$id");
		}else{
			print("########### Deu erro<br>");
			print($c->error);
		}
	}

	function save(){
		$conn = new DbConn();
		$c = $conn->getConn();
		$upd = $c->query("update Clientes set Nome='".$this->Nome."', Endereco='".$this->Endereco."', Cep='".$this->Cep."', Telefone='".$this->Telefone."', Cnpj='".$this->Cnpj."' where Idcliente=$this->Idcliente");
		if($upd){
			print ("Cliente atualizado!");
			$id = mysqli_insert_id($c);
			header("location:../main.php?menu=6&idcli=$id");
		}else{
			print("########### Deu erro<br>");
			print($c->error);
		}
	}

	function lista($busca){
		$conn = new DbConn();
		$c = $conn->getConn();
		echo $busca;
		$lista = $c->query("Select * from Clientes where nome like '%$busca%' ");
		$rows = array();
		while($r = mysqli_fetch_assoc($lista)) {
			$rows[] = $r;
		}
		session_start();
		$_SESSION['rows'] = $rows;
		header("location:../main.php?menu=4");

	}

	function buscaId($op){
		$conn = new DbConn();
		$c = $conn->getConn();
		$buscaId = $c->query("Select * from Clientes where Idcliente = ".$this->Idcliente);
		$rows = array();
		while($r = mysqli_fetch_assoc($buscaId)) {
			$rows[] = $r;
		}if ($op == 'mostra') {
			header("location:../main.php?menu=9");
		}else{
			header("location:../main.php?menu=6");
		}
		session_start();
		$_SESSION['rows'] = $rows;
	}
	
	function delete(){
		$conn = new DbConn();
		$c = $conn->getConn();
		$del = $c->query("delete from Clientes where Idcliente = ".$this->Idcliente);
		if($del === TRUE){
			session_start();
			$_SESSION['mensagem'] = "Cliente removido com sucesso!";
			header("location:../main.php?menu=4");
		}else{
			print("########### Deu erro<br>");
			print($c->error);
		}
	}
}