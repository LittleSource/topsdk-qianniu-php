<?php
namespace Topsdk\Topapi\Ability139\Domain;

class TaobaoOpenlinkSessionGetResult {

    /**
        model
     **/
    public $model;

    /**
        msgCode
     **/
    public $msg_code;

    /**
        msgInfo
     **/
    public $msg_info;

    /**
        success
     **/
    public $success;


    public function getModel() : TaobaoOpenlinkSessionGetSessionInfo{
        return $this->model;
    }

    public function setModel(TaobaoOpenlinkSessionGetSessionInfo $model){
        $this->model = $model;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

