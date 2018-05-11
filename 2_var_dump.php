<html>
<?php

$regInt = 1234;
# Numero octodecimal
$octNum = 01234;
# Hexadecimal:
$hexNum = 0xABC;
#Numeros binarios
$binaryNum = 01000;
$hasValue = 1234;

# Printando os tipos das variáveis:
echo "<p>Numero inteiro:</p>";
var_dump($regInt);
echo "<p>Numero Octodecimal</p>";
var_dump($octNum);
echo "<p> Numero Binario</p>";
var_dump($binaryNum);
echo "<p>Convertendo para Booleano </p>";
var_dump((bool)$hasValue);

# Lidando com Constantes:
# Necessário usar o define
# Por padrão a constante deve ter letra maiscula  e invés de espaços usar underscore
define('NEW_CONSTANT',"Hello new constant!");
# Como é uma constante não precisa do sinal de dólar
# Constante são globais
echo NEW_CONSTANT;

# Verificando se as variaveis são o que são
$intVar = 1234;
echo is_int($intVar);

$stringVar = "I'm a String";
echo is_string($stringVar);

# O mesmo para 
# is_bool
# is_float
# Para constante:
# echo defined('NEW_CONSTANT');

?>
</html>
