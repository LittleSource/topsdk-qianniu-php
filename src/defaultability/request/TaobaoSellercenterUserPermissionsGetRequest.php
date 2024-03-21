<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSellercenterUserPermissionsGetRequest {

    /**
        用户标识，次入参必须为子账号比如zhangsan:cool。如果只输入主账号zhangsan，将报错。
     **/
    private $nick;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }


    public function getApiName() : string {
        return "taobao.sellercenter.user.permissions.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

