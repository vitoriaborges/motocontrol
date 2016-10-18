<?php

	require_once 'DbConn.php';

Class Entregador{

		private $Identregador;
 		private $Nome;
 		private $Rg;
 		private $Cnh;
 		private $Cpf;
 		private $Dt_nascimento;
 		private $Valor_diaria;
 		
 	public function setIdentregador($e){
 		$this->Identregador=$e;
 	}
 	public function getIdentregador(){
 		return $this->Identregador;
 	}
 		
	public function setNome($n){
		$this->Nome=$n;
	}
	public function getNome(){
		return $this->Nome;
	}

	public function setRg($r){
		$this->Rg=$r;
	}
	public function getRg(){
		return $this->Rg;
	}

	public function setCnh($c){
		$this->Cnh=$c;
	}
	public function getCnh(){
		return $this->Cnh;
	}

	public function setCpf($cp){
		$this->Cpf=$cp;
	}
	public function getCpf(){
		return $this->Cpf;
	}

	public function setDt_nascimento($d){
		$this->Dt_nascimento=$d;
	}
	public function getDt_nascimento(){
		return $this->Dt_nascimento;
	}

	public function setValor_diaria($v){
		$this->Valor_diaria=$v;
	}
	public function getValor_diaria(){
		return $this->Valor_diaria;
	}


 		function create(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$ins = $c->query("insert into Entregadores(Nome, Rg, Cnh, Cpf, Dt_nascimento, Valor_diaria) values ('".$this->Nome."','".$this->Rg."','".$this->Cnh."','".$this->Cpf."','".$this->Dt_nascimento."','".$this->Valor_diaria."')");
 			if($ins){
 				print ("Inseriu o funcionario");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
 		}

 		function save(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$upd = $c->query("update Entregadores set Nome=$this->Nome, Rg=$this->Rg, Cnh=$this->Cnh, Cpf=$this->Cpf, Dt_nascimento=$this->Dt_nascimento, Valor_diaria=$this->Valor_diaria where Identregador=$this->Identregador");
 			if($upd){
 				print ("Entregador atualizado!");
 			}else{
 				print("########### Deu erro<br>")
 				print($c->error);
 			}
 		}

 		function list($busca){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$list = $c->query("Select * from Entregadores");
 			echo $list;
 		}

 		function delete(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$del = $c->query("delete from Entregadores where Identregador = $this->Identregador");
 			if($del){
 				print ("Apagou o Entregador");
 			}else{
 				print("########### Deu erro<br>")
 				print($c->error);
 			}
 		}

 	
 	}

?>
