<?php
namespace Topsdk\Topapi\Ability304\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopAuthTokenCreateRequest {

    /**
        授权code，grantType==authorization_code 时需要
     **/
    private $code;

    /**
        非必填，与生成code的uuid配对，使用方式参考文档
     **/
    private $uuid;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getUuid() : string{
        return $this->uuid;
    }

    public function setUuid(string $uuid){
        $this->uuid = $uuid;
    }


    public function getApiName() : string {
        return "taobao.top.auth.token.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->code)) {
            $requestParam["code"] = TopUtil::convertBasic($this->code);
        }

        if (!TopUtil::checkEmpty($this->uuid)) {
            $requestParam["uuid"] = TopUtil::convertBasic($this->uuid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

