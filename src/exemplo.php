<?php

require_once "../vendor/autoload.php";

use Ubuntu\DigitalCep\search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('05338100');

print_r($resultado);