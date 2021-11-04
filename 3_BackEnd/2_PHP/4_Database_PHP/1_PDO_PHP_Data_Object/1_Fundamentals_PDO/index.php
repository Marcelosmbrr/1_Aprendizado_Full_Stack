<?php

require __DIR__."/Model.php";

$obj = new Model();

$data = array("string_value"=> "Batman", "decimal_value"=> 520.56, "actual_date"=> date("d/m/Y"));

$ret = $obj->setData($data);

if($ret["status"]){

    echo("Success..Record was inserted with {$ret["last_ID"]} ID.");

    $ret = $obj->getData();

    if($ret["status"]){
        print_r($ret["data"]);
    }
        
}




