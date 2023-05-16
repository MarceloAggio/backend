<?php

include_once("../conexao.php");



if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES('$nome','$email','$senha');";

    if($conexao->query($sql)){
        echo "Registro inserido com sucesso";
    }
    else{
        echo "Não foi possível registar o registro";
    }
    $result = mysqli_query($conexao, $sql);
}