<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[2];

// o count é a mesma coisa que lenght, ele busca o tamanho da lista

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
