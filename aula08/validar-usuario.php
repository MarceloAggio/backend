<?php

include_once("config/conexao.php");

if($_POST){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    //VERIFICAR SENHA
    

    $queryUsuario = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario' ";
    $consultarDados = mysqli_query($conexao, $queryUsuario);
    $resultado = mysqli_fetch_all($consultarDados, MYSQLI_ASSOC);

    session_start();
    $_SESSION["ID_USUARIO"] = $resultado[0]["id_usuario"];
    $_SESSION["USUARIO"] = $resultado[0]["usuario"];
    $_SESSION["ID_SITUACAO"] = $resultado[0]["id_situacao"];

    $queryUsuario = "SELECT * FROM tbl_clientes WHERE id_cliente = '".$_SESSION["ID_USUARIO"]."' ";
    $consultarUsuario = mysqli_query($conexao, $queryUsuario);
    $resultadoUsuario = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);

    $_SESSION["NOME_USUARIO"] = $resultadoUsuario[0]["nome"];
    $_SESSION["SOBRENOME_USUARIO"] = $resultadoUsuario[0]["sobrenome"];

    if($resultado[0]["tipo_usuario"] == "1"){    
        header("Location: admin/index.php");

    }else if($resultado[0]["tipo_usuario"] == "2"){
            header("Location: minha-conta.php");
    }else{
        header("Location: login.php");
    }
}
else {
    echo "Erro";
    // header("Location: login.php");
}