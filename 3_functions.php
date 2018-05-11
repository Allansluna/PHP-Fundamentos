<?php

function bookAuthor($authorName,$year=1910)
{
	echo $year;
	echo "<p></p>";
	echo $authorName;
}


function listOfBooks()
{
	echo "Hamlet\n";
	echo "Romeo and Juliet\n";
}

function getAuthor()
{
	return "<p>Charle Dickens</p>";
}

function setVariavelGlobal()
{
# A palavra global é reservada para destacar varíaveis globais
# Só faz sentido usar global para funções visto que no programa todas as variaveis são globais
	global $VariavelGlobal;
	$VariavelGlobal = "Allan";
}


bookAuthor("William Shakespeare");



$authorName=getAuthor();
echo $authorName;


# Outra maneira de obter o mesmo resultado:
$variableFunctionName = "getAuthor";
echo $variableFunctionName();


# Print da várivel global
setVariavelGlobal();
echo $VariavelGlobal;




?>
