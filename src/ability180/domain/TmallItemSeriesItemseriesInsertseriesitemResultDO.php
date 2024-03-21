<?php
namespace Topsdk\Topapi\Ability180\Domain;

class TmallItemSeriesItemseriesInsertseriesitemResultDO {

    /**
        调用是否成功
     **/
    public $success;

    /**
        错误码集合
     **/
    public $error_codes;

    /**
        实际返回对象
     **/
    public $model;


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

    public function getModel() : TmallItemSeriesItemseriesInsertseriesitemErrorCode{
        return $this->model;
    }

    public function setModel(TmallItemSeriesItemseriesInsertseriesitemErrorCode $model){
        $this->model = $model;
    }


}

