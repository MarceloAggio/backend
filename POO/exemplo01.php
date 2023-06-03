<?php

class adcionarNumero{

    var $num1;
    var $num2;
    function addcalculo(){
        return ($this->num1*$this->num2);
    }
}

$add = new adcionarNumero();
$add ->num1=5;
$add ->num2=6;
echo $add->addcalculo();

?>


<?php
class CalculoIMC /*classe é algo que define seu objeto*/ 
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

