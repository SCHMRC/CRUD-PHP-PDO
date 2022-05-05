<?php
include __DIR__ . '/../model/msg.class.php';
include __DIR__ . '/../connector/query.model.php';
include __DIR__ . '/../connector/crud.service.php';
include __DIR__ . '/../service/service.php';
include __DIR__ . '/../connector/connector.php';






$METHOD = $_SERVER['REQUEST_METHOD'];
$URI = '/public/index.php';

switch($METHOD){

    case 'GET':{
        $request = $_SERVER['REQUEST_URI'];
        echo $request ;
        if(isset($_GET['update'])){
            $cod_card = $_GET['update'];
            $res = $crud->getEsaminando($cod_card);
            $_POST['cod_card'] = $cod_card;
            $_POST['result'] = $res[0];
            templateLoader('first');

        }else{
            switch ($request){
                case '/public/' :{templateLoader('home');}break;
                case $URI.'/home':{templateLoader('home');}break;
                case $URI.'/first':{templateLoader('first');}break;
                case $URI.'/second':{templateLoader('second');}break;
            }
        }




    }break;

    case 'POST':{
        if(isset($_POST['delete'])){
            $cod = $_POST['delete'];
            $bool = $crud->deleteEsaminando($cod);
            if($bool){
                templateLoader('home');
            }
        }
        if(isset($_POST['update'])){
            $esterno = ( isset($_POST['esterno'] ) ? 1 : 0 );
            $arr = [
                'cod_card' => $_POST['update'] ,
                'nome' => $_POST['nome'],
                'cognome' => $_POST['cognome'],
                'genere' => $_POST['genere'],
                'data_N' => $_POST['data_N'],
                'lugo_N' => $_POST['lugo_N'],
                'esterno' => $esterno
            ];
            $bool = $crud->updateEsaminando($arr);
            if($bool){
                templateLoader('home');
            }

        }else{
            if(isset($_POST['insert'])){
                $esterno = ( isset($_POST['esterno'] ) ? 1 : 0 );
                $arr = [
                    'cod_card' => $_POST['cod_card'],
                    'nome' => $_POST['nome'],
                    'cognome' => $_POST['cognome'],
                    'genere' => $_POST['genere'],
                    'data_N' => $_POST['data_N'],
                    'lugo_N' => $_POST['lugo_N'],
                    'esterno' => $esterno
                ];
                $bool = $crud->insertEsaminando($arr);
                if($bool){
                    templateLoader('home');
                }
            }
        }


    }break;
}

?>
