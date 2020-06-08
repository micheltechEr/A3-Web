<?php
include('conexao.php');
include('Pessoa.php');
include('PessoaDAO.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$perfil = $_FILES['perfil'];
$nm_reser = $_POST['nm_reser'];
$email = $_POST['email'];
$_senha = $_POST['senha'];
$target_file = 'imagem/';
$nome_arquivo = $target_file."".uniqid()."".$perfil['name'];

(move_uploaded_file($perfil['nome_tmp'], $nome_arquivo));

$p = new Pessoa($nome,$cpf,$sexo,$nome_arquivo,$nm_reser,$email,md5($_senha),0);
$pDAO = new PessoaDAO($p);
$pDAO->inserir();
	


?>