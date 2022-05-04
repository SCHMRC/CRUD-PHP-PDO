<?php
include __DIR__ . '/../shared/header.template.php';
include __DIR__ . '/../connector/connector.php';



$crud = new Crud($pdo);
$result = $crud->getAllEsaminando();
$msg_result = '';

if(is_string($result)){
    $msg_result = $result;
};





?>
