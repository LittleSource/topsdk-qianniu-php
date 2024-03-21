<?php
namespace Topsdk\Topapi\Ability139\Domain;

class TaobaoMiniappUserInfoGetResult {

    /**
        model
     **/
    public $model;

    /**
        错误信息
     **/
    public $err_message;

    /**
        错误码
     **/
    public $err_code;

    /**
        是否成功
     **/
    public $success;


    public function getModel() : TaobaoMiniappUserInfoGetOpenUserInfoDto{
        return $this->model;
    }

    public function setModel(TaobaoMiniappUserInfoGetOpenUserInfoDto $model){
        $this->model = $model;
    }

    public function getErrMessage() : string{
        return $this->err_message;
    }

    public function setErrMessage(string $errMessage){
        $this->err_message = $errMessage;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

