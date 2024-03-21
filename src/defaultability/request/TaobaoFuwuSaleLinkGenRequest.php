<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFuwuSaleLinkGenRequest {

    /**
        用户需要营销的目标人群中的用户nick
     **/
    private $nick;

    /**
        从服务商后台，营销链接功能中生成的参数串直接复制使用。不要修改，否则抛错。
     **/
    private $paramStr;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getParamStr() : string{
        return $this->paramStr;
    }

    public function setParamStr(string $paramStr){
        $this->paramStr = $paramStr;
    }


    public function getApiName() : string {
        return "taobao.fuwu.sale.link.gen";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->nick)) {
            $requestParam["nick"] = TopUtil::convertBasic($this->nick);
        }

        if (!TopUtil::checkEmpty($this->paramStr)) {
            $requestParam["param_str"] = TopUtil::convertBasic($this->paramStr);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

