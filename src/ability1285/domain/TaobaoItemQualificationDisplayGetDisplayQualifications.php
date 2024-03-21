<?php
namespace Topsdk\Topapi\Ability1285\Domain;

class TaobaoItemQualificationDisplayGetDisplayQualifications {

    /**
        是否成功
     **/
    public $result;

    /**
        返回消息
     **/
    public $message;

    /**
        填充列表
     **/
    public $model;


    public function getResult() : bool{
        return $this->result;
    }

    public function setResult(bool $result){
        $this->result = $result;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getModel() : string{
        return $this->model;
    }

    public function setModel(string $model){
        $this->model = $model;
    }


}

