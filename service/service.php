<?php

function templateLoader($param){
    include __DIR__ . '/../connector/connector.php';
    return include __DIR__ . '/../template/' . $param . '.template.php';
}

?>
