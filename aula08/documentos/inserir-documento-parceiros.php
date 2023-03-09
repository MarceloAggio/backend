<?php
include_once("../config/conexao.php");

if($_POST){

$token_parceiro = $_POST["id_parceiro"];
$cnpj = $_POST["cnpj"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//palavra Chave - Email + Senha
$salt = md5($email.$senha);
$custo = "06";
$senhaHash = crypt($senha,"$2b$" . $custo . "$" . $salt . "$" );

$celular = $_POST["celular"];
//consulta de dados para bloqueio de duplicidade de Email

$queryConsultaEmail = "SELECT * FROM tbl_acessos where usuario = '$email'";
$resultadoEmail = mysqli_query($conexao, $queryConsultaEmail);
$dadosEmail = mysqli_fetch_all($resultadoEmail, MYSQLI_ASSOC);

if($dadosEmail){
    header("Location: ../completar-cadastro.php?client=$token_parceiro&msg=email");
    exit;
}

//----------------------------------------------------------------------------------------------------------------
$queryConsultaToken = "SELECT * FROM tbl_clientes WHERE 'hash' = '$token_parceiro'";
$resultado = mysqli_query($conexao, $queryConsultaToken);
$dados_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$id = $dados_cliente[0]["id"];

$queryDocs = "INSERT INTO tbl_docs(hash_usuario, documento, id_tipo_documento) VALUES ('$token_parceiro', '$cnpj',1)";
$inserirDocs = mysqli_query($conexao, $queryDocs);

if($inserirDocs){
    $queryEmail = "INSERT INTO tbl_contatos_emails(hash_usuario, email, id_situacao) VALUES ('$token_parceiro', '$email' 1)";
    $inserirEmail = mysqli_query($conexao, $queryEmail);

    if($inserirEmail){
        $queryTelefone = "INSERT INTO tbl_contatos(hash_usuario, numero) VALUES ('$token_parceiro', '$celular')";
        $inserirTelefone = mysqli_query($conexao, $queryTelefone);
        
    }if($inserirTelefone){
        $queryAcesso = "INSERT INTO tbl_acessos(hash_usuario, usuario, `hash`, id_situacao) VALUES ('$token_parceiro', '$email', '$senhaHash', 1)";
        $inserirAcesso = mysqli_query($conexao, $queryAcesso);

        if($inserirAcesso){
            header("location: ../index.php");
        }else{
            header("Location: completar-cadastro-parceiro.php?id_parceiro=".$token_parceiro);
        }
    }else{
        header("location: completar-cadastro-parceiro.php?id_parceiro=".$token_parceiro);
    }

}else{

}

}else{
    header("location: completar-cadastro.php?client=".$token_parceiro);
}