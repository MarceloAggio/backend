<?php

include_once("conexao.php");

if($_POST['submit']){
    $isbn = $_POST["isbn"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $paginas = $_POST["paginas"];
    $preco = $_POST["preco"];
    
    
    $sql = "INSERT INTO livros (isbn, titulo, autor, paginas, preco) VALUES ('$isbn', '$titulo', '$autor', '$paginas', '$preco');";

    if($conexao->query($sql)){
        echo "Registro inserido com sucesso";
    }
    else{
        echo "Não foi possível registar o registro";
    }
    $result = mysqli_query($conexao, $sql);
}