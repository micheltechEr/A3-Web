<?php 
class PessoaDAO{
	function __construct($p){
      $this->pessoa = $p;
	}
	function inserir(){
       conectar();
       global $mysqli;
       $sql = 'INSERT INTO dados(nome,cpf,sexo,nm_reser,caminho,email,senha,data_cadastro,id) VALUES("'.$this->pessoa->nome.'","'.$this->pessoa->cpf.'","'.$this->pessoa->sexo.'","'.$this->pessoa->nm_reser.'","'.$this->pessoa->perfil.'","'.$this->pessoa->email.'","'.$this->pessoa->_senha.'",NOW(),null)';
       $result = $mysqli->query($sql);
       fecharConexao();
	}
}
?>