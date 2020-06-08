<?php
class Pessoa{
	public $id;
	public $nome;
	public $cpf;
	public $sexo;
	public $perfil;
	public $nm_reser;
	public $email;
	public $_senha;

	function __construct($nome,$cpf,$sexo,$perfil,$nm_reser,$email,$_senha,$id){
       $this->id = $id;
       $this->nome = $nome;
       $this->cpf = $cpf;
       $this->sexo = $sexo;
       $this->perfil = $perfil;
       $this->nm_reser = $nm_reser;
       $this->email = $email;
       $this->_senha = $_senha; 
	}
}
?>