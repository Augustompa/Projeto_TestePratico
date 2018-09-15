<?php

include_once('conexao.php');

$cnpj = $_POST ['cnpj'];
$razaosocial= $_POST ['razaosocial'];
$nomefantasia= $_POST ['nomefantasia'];
$email = $_POST ['email'];
$endereco= $_POST ['endereco'];
$cidade= $_POST ['Cidade'];
$estado= $_POST ['estado'];
$telefone= $_POST ['telefone'];
$Categoria= $_POST ['Categoria'];
$status= $_POST ['status'];
$Agencia= $_POST ['Agencia'];
$conta= $_POST ['conta'];

$msg_contato = "INSERT INTO dbo.empresa (cnpj,razao_social,nome_fantasia,email,endereco,cidade,estado,telefone,Categoria,status_cadastro,Agencia,conta) VALUES ('$cnpj','$razaosocial',$nomefantasia,'$email','$endereco','$cidade','$estado','$telefone','$Categoria','$status','$Agencia','$conta', NOW ())";

$msg_contato = sqlsrv_connect($conn, $msg_contato)
?>