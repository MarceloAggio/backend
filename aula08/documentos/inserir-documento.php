<?php
include_once("../config/conexao.php");

$tipoDocumento = $_POST["tipoDocumento"];
$documento = $_POST["documento"];

$query = "INSERT INTO tbl_docs(id_tipo_documento, documento) VALUES ('$tipoDocumento', '$documento')";
$inserir_documento = mysqli_query($conexao, $query);

if($inserir_documento){
    echo "Documento cadastrado com Sucesso";
}else{
    echo "Falha ao cadastrar documento";
}