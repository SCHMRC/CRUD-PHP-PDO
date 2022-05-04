<?php

class Query{
    static string $query_get_all = 'SELECT * FROM ESAMINANDO';
    static string $query_get_Esaminando = 'SELECT * FROM ESAMINANDO WHERE cod_card = ';
    static string $query_delete_Esaminando = 'DELETE FROM ESAMINANDO WHERE cod_card = :cod_card';
    static string $query_insert_Esaminando = 'INSERT INTO Esaminando(cod_card,nome,cognome,genere,data_N,lugo_N,esterno) VALUES (:cod_card,:nome,:cognome,:genere,:data_N,:lugo_N,:esterno)';
    static string $query_update_Esaminando = 'UPDATE Esaminando SET nome = :nome, cognome = :cognome,genere = :genere,data_N = :data_N,lugo_N = :lugo_N,esterno = :esterno WHERE cod_card = :cod_card';

    public static function queryGetAll(){
        return self::$query_get_all;
    }

    public static function _deleteEsaminando(){
        return self::$query_delete_Esaminando;
    }

    public static function _insertEsaminando(){
        return self::$query_insert_Esaminando;
    }

    public static function _updateEsaminando(){
        return self::$query_update_Esaminando;
    }

    public static function _getEsaminando(string $cod_card){
        return self::$query_get_Esaminando . '\''. $cod_card .'\'';
    }

}

?>
