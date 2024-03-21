<?php
namespace Topsdk\Topapi\Ability304\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoOpenuidGetBytradeRequest {

    /**
        订单ID
     **/
    private $tid;


    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }


    public function getApiName() : string {
        return "taobao.openuid.get.bytrade";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tid)) {
            $requestParam["tid"] = TopUtil::convertBasic($this->tid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

