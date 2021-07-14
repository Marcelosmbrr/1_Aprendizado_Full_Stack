<?php

    //COM A CLASSE STDCLASS
    $object = new stdClass();
    $object->property = 'Here we go';

    var_dump($object);

    //COM TIPAGEM
    //Sem a tipagem, isto seria um array associativo
    $object = (object) ['property' => 'Here we go'];

?>