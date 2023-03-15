<?php

include_once("../../config/conexao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = floatval($_POST["preco"]);
$id = $_POST["id"];

$query = "INSERT INTO tbl_lista_produtos(id, nome, descrição, preco, id_categoria) VALUES ('$id', '$nome','$descricao','$preco', 1)";
$inserir_situacao = mysqli_query($conexao, $query);

if($inserir_situacao){
    echo "Correto";
}else{
    echo "Errado";
}