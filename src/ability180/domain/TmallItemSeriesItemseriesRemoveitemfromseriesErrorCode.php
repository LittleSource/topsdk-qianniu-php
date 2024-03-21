<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesRemoveitemfromseriesErrorCode {

    /**
        报错信息
     **/
    public $message;

    /**
        报错信息
     **/
    public $mes_code;


    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getMesCode() : string{
        return $this->mes_code;
    }

    public function setMesCode(string $mesCode){
        $this->mes_code = $mesCode;
    }


}

