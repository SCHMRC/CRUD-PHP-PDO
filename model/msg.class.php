<?php
class Msg{
    private string $msg;
    private string $code;

    function __construct(string $msg, string $code){
        $this->msg = $msg;
        $this->code = $code;
    }

    function getMsg(){
        return $this->msg;
    }
    function getCode(){
        return $this->code;
    }
}
?>
