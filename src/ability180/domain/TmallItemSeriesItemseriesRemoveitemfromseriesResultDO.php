<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesRemoveitemfromseriesResultDO {

    /**
        调用是否成功
     **/
    public $success;

    /**
        错误码
     **/
    public $error_codes;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorCodes() : array{
        return $this->error_codes;
    }

    public function setErrorCodes(array $errorCodes){
        $this->error_codes = $errorCodes;
    }


}

