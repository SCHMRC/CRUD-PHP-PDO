<?php
class Crud{
    private PDO $pdo;


    function __construct(PDO $pdo){
            $this->pdo = $pdo;
    }

    function getAllEsaminando(){
        $res = $this->pdo->query(Query::queryGetAll());
            while($prepare_result = $res->fetch()){
                $result[] = $prepare_result;}

        if(isset($result)){
            return $result;
        }else{
            return 'Non ci sono elementi nel Database';
        }

    }



    function getEsaminando($cod_card){
        $query = Query::_getEsaminando($cod_card);
        $res = $this->pdo->query($query);
        while($prepare_result = $res->fetch()){
            $result[] = $prepare_result;}
        if(isset($result)){
            return $result;
        }else{
            return '';
        }

    }

    function insertEsaminando($arr){
        $stm = $this->pdo->prepare(Query::_insertEsaminando());
        $stm->bindValue(':cod_card',$arr['cod_card']);
        $stm->bindValue(':nome',$arr['nome']);
        $stm->bindValue(':cognome',$arr['cognome']);
        $stm->bindValue(':genere',$arr['genere']);
        $stm->bindValue(':data_N',$arr['data_N']);
        $stm->bindValue(':lugo_N',$arr['lugo_N']);
        $stm->bindValue(':esterno',$arr['esterno']);
        return $stm->execute();
    }

    function deleteEsaminando(string $cod_card){
        $stm = $this->pdo->prepare(Query::_deleteEsaminando());
        $stm->bindValue(':cod_card', $cod_card);
        return $stm->execute();
    }

    function updateEsaminando($arr){
        $stm = $this->pdo->prepare(Query::_updateEsaminando());
        $stm->bindValue(':cod_card',$arr['cod_card']);
        $stm->bindValue(':nome',$arr['nome']);
        $stm->bindValue(':cognome',$arr['cognome']);
        $stm->bindValue(':genere',$arr['genere']);
        $stm->bindValue(':data_N',$arr['data_N']);
        $stm->bindValue(':lugo_N',$arr['lugo_N']);
        $stm->bindValue(':esterno',$arr['esterno']);
        return $stm->execute();
    }
}




?>
