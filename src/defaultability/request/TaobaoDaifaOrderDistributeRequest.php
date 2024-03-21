<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaOrderDistributeRequest {

    /**
        主单ID
     **/
    private $bizOrderId;

    /**
        分单模型
     **/
    private $scpOrderModels;


    public function getBizOrderId() : int{
        return $this->bizOrderId;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->bizOrderId = $bizOrderId;
    }

    public function getScpOrderModels() : array{
        return $this->scpOrderModels;
    }

    public function setScpOrderModels(array $scpOrderModels){
        $this->scpOrderModels = $scpOrderModels;
    }


    public function getApiName() : string {
        return "taobao.daifa.order.distribute";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizOrderId)) {
            $requestParam["biz_order_id"] = TopUtil::convertBasic($this->bizOrderId);
        }

        if (!TopUtil::checkEmpty($this->scpOrderModels)) {
            $requestParam["scp_order_models"] = TopUtil::convertStructList($this->scpOrderModels);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

