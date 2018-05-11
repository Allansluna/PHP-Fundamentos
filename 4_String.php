<?php

# Estudo de Strings no PHP

function pulaLinha($pula){
	return "<p>$pula</p>";
}


$currency = "peny";

$sampleString = pulaLinha("A $currency saved is a $currency earned");

echo $sampleString;

echo 'Aspas com \' \' backslash';

$var = 2;

# Com {}podemos juntar o contéudo com uma variavel com a string nd.
echo pulaLinha("{$var}nd place");
# Mesmo resultado do que o {}
echo pulaLinha($var."nd place");

# Here Document

# EOT = End OF Text
echo <<< EOT
	Never Enough
	I'm so fed up with everyone around me
	No one seems to care
	I'm just so far gone and nothing is gonna change
	I'll never be the same

EOT;

print pulaLinha("Testando a função PRINT");

# echo pode printar mais de um parametro e é mais rápido que o print
# Exemplo:

echo "Estou ", "estudando "," PHP";

# Deixando em letra maiscula:

$frase = "ola letra maiuscula";
$frase = strtoupper($frase);

echo pulaLinha($frase);

#Deixando a letra minuscula
$frasemin = "OLA LETRA MINUSCULA";
$frasemin = strtolower($frasemin);

echo pulaLinha($frasemin);

# Quantidade de characteres da String
# Usa-se a função strlen()

echo strlen(pulaLinha($frasemin));

# Posição do character na string
# O terceiro parametro , offset , é para começar a procurar a partir dali.
echo pulaLinha(strpos($frasemin, "a",3));

# String replace
# str_replace()

# O terceiro parametro, $count, é um valor passado por referência ja contido no PHP, ele conta quantas vezes a palavra foi trocada na função.
$replaced = str_replace("ola", "oi", $frasemin,$count);
echo pulaLinha($replaced);

echo pulaLinha($count);

# SubString

echo pulaLinha(substr($frasemin,4));

# Com o sinal negativo, começamos ao contrário.
echo pulaLinha(substr($frasemin,-4));

# Podemos limitar mais
echo pulaLinha(substr($frasemin,0,3));


# Função split()

# A função separa a palavra em grupo de 3 caracteres e põe num array
$varArray = str_split($frasemin,3);

# print_r Printa em formato mais humano.
print_r($varArray);



?>