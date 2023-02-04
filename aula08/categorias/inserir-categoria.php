<?php

include_once("../config/conexao.php");

$nome_cat = $_POST["nome-categoria"];
$img_cat = $_POST["img-categoria"];
$slug_cat = $_POST["slug-categoria"];

$query = "INSERT INTO tbl_categorias(nome, img, slug, id_situacao) VALUES ('$nome_cat', '$img_cat', '$slug_cat', 1)";

$inserir_categoria = mysqli_query($conexao, $query);

if($inserir_categoria){
    echo "Cadastro efetuado com sucesso 
    <a href='cadastra-categoria.php'>Voltar</a>";

}else{
    echo "Erro ao cadastrar categoria
    <a href='cadastra-categoria.php'>Voltar</a>";
}