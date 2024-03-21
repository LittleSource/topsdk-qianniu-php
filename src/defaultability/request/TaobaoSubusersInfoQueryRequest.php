<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoSubusersInfoQueryRequest {

    /**
        站点信息，淘宝天猫传0，1688传3
     **/
    private $site;


    public function getSite() : int{
        return $this->site;
    }

    public function setSite(int $site){
        $this->site = $site;
    }


    public function getApiName() : string {
        return "taobao.subusers.info.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->site)) {
            $requestParam["site"] = TopUtil::convertBasic($this->site);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

