<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoDaifaDistributorOrderCancelRequest {

    /**
        取消分单原因，由商家填写具体文本信息，暂时不做标准化
     **/
    private $reason;

    /**
        分销单据ID
     **/
    private $scpOrderId;

    /**
        分销商ID
     **/
    private $distributorId;


    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getScpOrderId() : int{
        return $this->scpOrderId;
    }

    public function setScpOrderId(int $scpOrderId){
        $this->scpOrderId = $scpOrderId;
    }

    public function getDistributorId() : int{
        return $this->distributorId;
    }

    public function setDistributorId(int $distributorId){
        $this->distributorId = $distributorId;
    }


    public function getApiName() : string {
        return "taobao.daifa.distributor.order.cancel";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->reason)) {
            $requestParam["reason"] = TopUtil::convertBasic($this->reason);
        }

        if (!TopUtil::checkEmpty($this->scpOrderId)) {
            $requestParam["scp_order_id"] = TopUtil::convertBasic($this->scpOrderId);
        }

        if (!TopUtil::checkEmpty($this->distributorId)) {
            $requestParam["distributor_id"] = TopUtil::convertBasic($this->distributorId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

