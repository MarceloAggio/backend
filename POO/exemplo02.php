<?php

class Funcionario

{
    var $codigo;
    var $nome;
    var $salario = "8.500";
    var $departamento = "tecnologia";

    function setSalario()
    {

    }

    function getSalario()
    {
        
    }

}

$jose = new Funcionario;  // o novo objeto é JOSE, não funcionario (funcionario é somente uma classe)
$jose->codigo = 44;
$jose->nome = "Jose da Silva";
$jose->salario +=100;
$jose->departamento = "Financeiro";
print_r(get_object_vars($jose));
