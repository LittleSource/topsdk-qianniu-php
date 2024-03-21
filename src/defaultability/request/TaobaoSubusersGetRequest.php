<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubusersGetRequest {

    /**
        主账号用户名
     **/
    private $userNick;


    public function getUserNick() : string{
        return $this->userNick;
    }

    public function setUserNick(string $userNick){
        $this->userNick = $userNick;
    }


    public function getApiName() : string {
        return "taobao.subusers.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->userNick)) {
            $requestParam["user_nick"] = TopUtil::convertBasic($this->userNick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

