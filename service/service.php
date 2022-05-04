<?php

function templateLoader($param){
    return include __DIR__ . '/../template/' . $param . '.template.php';
}

?>
