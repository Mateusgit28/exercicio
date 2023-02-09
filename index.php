<?php
echo "<h1>php - aula 02 </h1>";
echo "<h2>Tipos de Dados</h2>";
echo "<hr>";

$nome = "mateus";
$idade = 22;
$altura = 1.70;
$fumante = false;

echo "nome: " . $nome;
echo "<br>";
echo "idade: " . $idade;
echo "<br>";
echo "altura: " . $altura;
echo "<br>";
echo "fumante: " . $fumante;

echo $nome . " - " . $idade . " - " . $altura . " - " . $fumante;

echo "<hr>";
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";



echo "<h2> Operadores aritméticos </h2>";
$n1 = 10;
$n2 = 2;

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % 2 . "<br>";
echo $n1 ** 2 . "<br>";

echo ($n1 > $n2) . "<br>";

echo "<h2> Operadores Relacionais </h2>";
echo ($n1 > $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 != $n2) . "<br>";
echo ($n1 == $n2) . "<br>";

echo "<h2> Operadores Lógicos </h2>";

echo (20>10) && (10>5);
echo "<br>";
echo (20>10) || (10>15);
echo !(10 < 5);



?>