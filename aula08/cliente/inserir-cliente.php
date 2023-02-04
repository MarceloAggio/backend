<?php

include_once("../config/conexao.php");

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nasc = $_POST["data_nasc"];
$genero = $_POST["genero"];
$newsletter = $_POST["newsletter"];
$numero = $_POST["numero"];
$email = $_POST["email"];

$query = "INSERT INTO tbl_clientes(nome, sobrenome, data_nasc, id_genero, newsletter, id_situacao)  VALUES ('$nome', '$sobrenome', '$data_nasc', '$genero', '$newsletter', 1)";
$inserir_cliente = mysqli_query($conexao, $query);

$query = "INSERT INTO tbl_contatos(numero, id_situacao, id_usuario) VALUES ('$numero', 1, 1)";
$inserir_numero = mysqli_query($conexao, $query);

$query = "INSERT INTO tlb_contatos_email(email, id_situacao, id_usuario) VALUES ('$email', 1, 1)";
$inserir_email = mysqli_query($conexao, $query);

if($inserir_cliente && $inserir_numero && $inserir_email){
    echo "Cliente Cadastrado com sucesso
    <a href='../cadastra-cliente.php'>Voltar</a>";
}else{
    echo "Falha ao Cadastrar o Cliente
    <a href='../cadastra-cliente.php'>Voltar</a>
    ";
}
