<?php

include_once("../../config/conexao.php");

if($_GET){

    $id = $_GET["id"];

    $query = "DELETE FROM tbl_categorias WHERE id = $id";
    $deletar = mysqli_query($conexao, $query);

    if($deletar){
        header("Location: ../gestao-categoria.php?msg=sucessocod");
    }else{
        header("Location: ../gestao-categoria.php?msg=errocad");
    }

}else{
    header("Location:../gestao-categoria.php");
}