<?php
class adicionarNumero /*classe é algo que define seu objeto*/ 
{
    var $num1;
    var $num2;
    function addCalculo()
    {
        return($this->num1*$this->num2); /*this aponta para*/
    }
} 


$add = new adicionarNumero();
$add->num1=5;
$add->num2=6;
echo $add->addcalculo();

?>


<?php
class CalculoIMC /* classe é algo que define seu objeto */ 
{
    var $peso;
    var $altura;
    function addCalculo()
    {
        $calculo = ($this-> peso / ($this->altura*$this->altura));
        return $calculo; /*this aponta para a váriavel*/
    }
} 


$add = new CalculoIMC(); /* espaço de saída */
$add->peso=70;
$add->altura=1.75;
echo $add->addcalculo();


?>




<?php

function calcular_imc($peso, $altura)
{
    return $peso / ($altura * $altura);    
}

echo calcular_imc (70, 1.75);

?>

<?php
class computador
{
    var $cpu;
    function ligar()
    {
        echo "Ligando computador {$this->cpu}...";
    }
}


$obj = new computador();
$obj->cpu = "Ryzem 9 5900mhz";
$obj->ligar();

?>



