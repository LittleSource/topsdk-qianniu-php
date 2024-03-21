<?php
namespace Topsdk\Topapi\Ability304\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoOpenuidGetBymixnickRequest {

    /**
        无线类应用获取到的混淆的nick
     **/
    private $mixNick;


    public function getMixNick() : string{
        return $this->mixNick;
    }

    public function setMixNick(string $mixNick){
        $this->mixNick = $mixNick;
    }


    public function getApiName() : string {
        return "taobao.openuid.get.bymixnick";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->mixNick)) {
            $requestParam["mix_nick"] = TopUtil::convertBasic($this->mixNick);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

