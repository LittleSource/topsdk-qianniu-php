<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertorupdateErrorCode {

    /**
        错误码
     **/
    public $mes_code;

    /**
        错误信息
     **/
    public $message;


    public function getMesCode() : string{
        return $this->mes_code;
    }

    public function setMesCode(string $mesCode){
        $this->mes_code = $mesCode;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }


}

