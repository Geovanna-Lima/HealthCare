<?php
 
$questao1 = $_POST["questao1"];

 
echo "<b>Questao 1</b> = ".$questao1."<br>";

$resposta1 = "d";

 
$acertou = 0;
$errou = 0;
 
if ($questao1 == $resposta1)
{
    $acertou++;
    echo "<font color = blue> Questao 1 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 1 errada<br></font>";
}

 
?>