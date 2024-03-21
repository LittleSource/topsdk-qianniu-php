<?php
namespace Topsdk\Topapi\Ability248\Domain;

class TaobaoPictureTokenUsResultDto {

    /**
        返回码
     **/
    public $code;

    /**
        响应response
     **/
    public $data;

    /**
        响应结果
     **/
    public $success;

    /**
        响应结果说明
     **/
    public $error_msg;


    public function getCode() : int{
        return $this->code;
    }

    public function setCode(int $code){
        $this->code = $code;
    }

    public function getData() : TaobaoPictureTokenGenerateTokenResponse{
        return $this->data;
    }

    public function setData(TaobaoPictureTokenGenerateTokenResponse $data){
        $this->data = $data;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

