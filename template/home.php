<?php
include __DIR__ . '/../shared/header.template.php';



$result = $crud->getAllEsaminando();
$msg_result = '';

if(is_string($result)){
    $msg_result = $result;
};





?>
