<?php
include_once("../config/conexao.php");

if ($_POST) {

    
    $razaoSocial = $_POST["razaoSocial"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $inscEstadual = $_POST["ie"];
    $inscMunicipal = $_POST["im"];

    //criação do HASH - DATA + NOME + SOBRENOME 
    $token_parceiro = sha1(md5(date('d/m/y').$razaoSocial.$nomeFantasia));

    $query = "INSERT INTO tbl_parceiros(razao_social, nome_fantasia, ie, im, id_situacao, `hash`) VALUES ('$razaoSocial', '$nomeFantasia', '$inscEstadual', '$inscMunicipal', 1, '$token_parceiro')";

    $inserir = mysqli_query($conexao, $query);

    if ($inserir) {
        header("Location: ../completar-cadastro-parceiro.php?id_parceiro=".$token_parceiro);
        
    }else{
        header("Location: ../cadastra-parceiros.php");
    }
    
}else{
    header('Location: ../cadastra-parceiros.php');
}

?>