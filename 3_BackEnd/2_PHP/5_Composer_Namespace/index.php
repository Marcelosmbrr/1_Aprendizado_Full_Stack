<?php
require ("vendor/autoload.php");

/* DEPENDÊNCIA OU CLASSE EXTERNA*/
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('Hello World!'); // hello-world

echo "<hr>";

/* DEPENDÊNCIA OU CLASSE INTERNA*/
use Classes\ClassTeste;
$teste = new ClassTeste();













?>