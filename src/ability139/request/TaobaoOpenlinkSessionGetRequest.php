<?php
namespace Topsdk\Topapi\Ability139\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoOpenlinkSessionGetRequest {

    /**
        授权码
     **/
    private $code;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }


    public function getApiName() : string {
        return "taobao.openlink.session.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->code)) {
            $requestParam["code"] = TopUtil::convertBasic($this->code);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

