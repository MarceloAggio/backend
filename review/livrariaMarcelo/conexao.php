<?php

$servidor   = "localhost";
$usuario    = "root";      
$senha      = "";
$banco      = "livrariatito";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_errno) {
    echo "Falha na conexão (".$conexao->connect_err.")";
    $conexao->connect_errno;
}else{
    echo "Conectado com Sucesso";
};