<?php

// Arrow functions são funcões anônimas reduzidas
// Arrow functions tem a forma básica fn (argument_list) => expr.
// https://www.php.net/manual/pt_BR/functions.arrow.php


$arrayInicial = ["A", "B", "C", "D"];

$arrayMapeado = array_map(fn ($item) => "{$item}X", $arrayInicial);

print_r($arrayMapeado);