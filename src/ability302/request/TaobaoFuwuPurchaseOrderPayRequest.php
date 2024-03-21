<?php
namespace Topsdk\Topapi\Ability302\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoFuwuPurchaseOrderPayRequest {

    /**
        APPKEY，必填
     **/
    private $appkey;

    /**
        设备类型，目前只支持PC，可选
     **/
    private $deviceType;

    /**
        订单号，与外部订单号二选一
     **/
    private $orderId;

    /**
        外部订单号，使用该参数完成查询订单等操作，与外部订单号二选一
     **/
    private $outOrderId;


    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getOrderId() : int{
        return $this->orderId;
    }

    public function setOrderId(int $orderId){
        $this->orderId = $orderId;
    }

    public function getOutOrderId() : string{
        return $this->outOrderId;
    }

    public function setOutOrderId(string $outOrderId){
        $this->outOrderId = $outOrderId;
    }


    public function getApiName() : string {
        return "taobao.fuwu.purchase.order.pay";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->appkey)) {
            $requestParam["appkey"] = TopUtil::convertBasic($this->appkey);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->orderId)) {
            $requestParam["order_id"] = TopUtil::convertBasic($this->orderId);
        }

        if (!TopUtil::checkEmpty($this->outOrderId)) {
            $requestParam["out_order_id"] = TopUtil::convertBasic($this->outOrderId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

