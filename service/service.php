<?php

function templateLoader($param){
    include __DIR__ . '/../connector/connector.php';
    include __DIR__ . '/../shared/header.template.php';
    return include __DIR__ . '/../template/' . $param . '.template.php';
}

?>
