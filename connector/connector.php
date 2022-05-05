<?php
try{
    $dbName = 'ECDL';
    $host = 'localhost:3306';
    $password = 'root';
    $user = 'root';
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbName,$user,$password);
    $crud = new Crud($pdo);
    $msg = new Msg('connessione avvenuta','200');
    header('connection_DB: ' . $msg->getMsg());
    header('code_DB:'.$msg->getCode());
}
catch(PDOException $e){
    $msg = new Msg('problema di connessione con il DB',$e->getCode());
    header('connection_DB: ' . $msg->getMsg());
    header('code_DB:'.$msg->getCode());


}


?>
