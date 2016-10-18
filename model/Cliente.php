<?php

	require_once 'DbConn.php';

Class Cliente{

		private $Idcliente;
 		private $Nome;
 		private $Endereco;
 		private $Telefone;
 		private $Cnjp;

 	public function setIdcliente($i){
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

	public function setTelefone($t){
		$this->Telefone=$t;
	}
	public function getTelefone(){
		return $this->Telefone;
	}

	public function setCnpj($c){
		$this->Cnjp=$c;
	}
	public function getCnpj(){
		return $this->Cnjp;
	}


 		function create(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$ins = $c->query("insert into Clientes(Nome, Endereco, Telefone, Cnpj) values ('".$this->Nome."','".$this->Endereco."','".$this->Telefone."','".$this->Cnjp."')");
 			if($ins){
 				print ("Inseriu o cliente");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
 		}

 		function save(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$upd = $c->query("update Clientes set Nome=$this->Nome, Endereco=$this->Endereco, Telefone=$this->Telefone, Cnjp=$this->Cnjp where Idcliente=$this->Idcliente");
 			if($upd){
 				print ("Cliente atualizado!");
 			}else{
 				print("########### Deu erro<br>")
 				print($c->error);
 			}
 		}

 		function list($busca){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$list = $c->query("Select * from Clientes");
 			echo $list;
 		}

 		function delete(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$del = $c->query("delete from Clientes where Idcliente = $this->Idcliente");
 			if($del){
 				print ("Apagou o cliente");
 			}else{
 				print("########### Deu erro<br>")
 				print($c->error);
 			}
 		}
 	




 	}

?>
