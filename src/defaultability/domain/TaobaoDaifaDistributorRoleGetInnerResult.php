<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorRoleGetInnerResult {

    /**
        错误code
     **/
    public $err_code;

    /**
        错误描述
     **/
    public $err_msg;

    /**
        结果对象
     **/
    public $model;

    /**
        接口成功失败
     **/
    public $success;


    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }

    public function getModel() : TaobaoDaifaDistributorRoleGetRoleGetResponse{
        return $this->model;
    }

    public function setModel(TaobaoDaifaDistributorRoleGetRoleGetResponse $model){
        $this->model = $model;
    }

    public function getSuccess() : string{
        return $this->success;
    }

    public function setSuccess(string $success){
        $this->success = $success;
    }


}

