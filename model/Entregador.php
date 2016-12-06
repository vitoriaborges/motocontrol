<?php

	require_once 'DbConn.php';

Class Entregador{

		private $IdEntregador;
 		private $Nome;
 		private $Rg;
 		private $Cnh;
 		private $Cpf;
 		private $Dt_nascimento;
 		private $Valor_diaria;
 		
 	public function setIdEntregador($e){
 		$this->Identregador=$e;
 	}
 	public function getIdEntregador(){
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
 				print ("Inseriu o cliente");
 				$id = mysqli_insert_id($c);
 				header("location:../main.php?menu=1&idcli=$id");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
 		}
 		
 		function save(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$upd = $c->query("update Entregadores set Nome='".$this->Nome."', Rg='".$this->Rg."', Cnh='".$this->Cnh."', Cpf='".$this->Cpf."', Dt_nascimento='".$this->Dt_nascimento."', Valor_diaria='".$this->Valor_diaria."' where Identregador=$this->Identregador");
 			if($upd){
 				print ("Entregador atualizado!");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
 		}

 		function lista($busca){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			echo $busca;
 			$lista= $c->query("Select * from Entregadores where nome like '%$busca%' ");
			$rows = array();
			while($r = mysqli_fetch_assoc($lista)) {
			    $rows[] = $r;
			}
			session_start();
			$_SESSION['rows'] = $rows;
			header("location:../main.php?menu=2");

 		}

		function buscaId($op){
			$conn = new DbConn();
			$c = $conn->getConn();
			$buscaId = $c->query("Select * from Entregadores where Identregador = ".$this->Identregador);
			$rows = array();

			if (!$buscaId) {
				die("Erro: " .$c->error);
			}
			while($r = mysqli_fetch_assoc($buscaId)) {
				$rows[] = $r;
			}if ($op == 'mostra') {
				header("location:../main.php?menu=10");
			}else{
				header("location:../main.php?menu=7");
			}
			session_start();
			$_SESSION['rows'] = $rows;
			
 		}
	

 		function delete(){
 			$conn = new DbConn();
 			$c = $conn->getConn();
 			$del = $c->query("delete from Entregadores where Identregador = ".$this->Identregador);

 			if($del == TRUE){
 				 print_r("###############");
 				session_start();
				$_SESSION['mensagem'] = "Entregador removido com sucesso!";
				header("location:../main.php?menu=2");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
 		}
	 }	
?>