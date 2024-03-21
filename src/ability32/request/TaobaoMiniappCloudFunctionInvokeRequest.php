<?php
namespace Topsdk\Topapi\Ability32\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMiniappCloudFunctionInvokeRequest {

    /**
        云函数名称
     **/
    private $name;

    /**
        指定云函数的handler
     **/
    private $handler;

    /**
        调用云函数时的传参（JSON格式）
     **/
    private $data;

    /**
        云环境
     **/
    private $env;

    /**
        扩展协议参数
     **/
    private $exts;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getHandler() : string{
        return $this->handler;
    }

    public function setHandler(string $handler){
        $this->handler = $handler;
    }

    public function getData() : string{
        return $this->data;
    }

    public function setData(string $data){
        $this->data = $data;
    }

    public function getEnv() : string{
        return $this->env;
    }

    public function setEnv(string $env){
        $this->env = $env;
    }

    public function getExts() : string{
        return $this->exts;
    }

    public function setExts(string $exts){
        $this->exts = $exts;
    }


    public function getApiName() : string {
        return "taobao.miniapp.cloud.function.invoke";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->handler)) {
            $requestParam["handler"] = TopUtil::convertBasic($this->handler);
        }

        if (!TopUtil::checkEmpty($this->data)) {
            $requestParam["data"] = TopUtil::convertBasic($this->data);
        }

        if (!TopUtil::checkEmpty($this->env)) {
            $requestParam["env"] = TopUtil::convertBasic($this->env);
        }

        if (!TopUtil::checkEmpty($this->exts)) {
            $requestParam["exts"] = TopUtil::convertBasic($this->exts);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

