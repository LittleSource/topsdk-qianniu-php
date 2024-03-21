<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorOrderQueryDistributorOrderModel {

    /**
        淘宝主订单ID，主子一体订单 bizOrderId = parentId
     **/
    public $parent_id;

    /**
        是否是主订单
     **/
    public $main;

    /**
        是否是子订单
     **/
    public $detail;

    /**
        订单ID
     **/
    public $biz_order_id;

    /**
        订单状态 - 继承交易的订单状态，WAIT_SELLER_SEND_GOODS("WAIT_SELLER_SEND_GOODS", "等待卖家发货"),     SELLER_CONSIGNED_PART("SELLER_CONSIGNED_PART", "卖家部分发货"),     WAIT_BUYER_CONFIRM_GOODS("WAIT_BUYER_CONFIRM_GOODS", "卖家已发货，等待买家确认收货"),     TRADE_FINISHED("TRADE_FINISHED", "交易完成"),     TRADE_CLOSED("TRADE_CLOSED", "交易关闭"),
     **/
    public $order_status;

    /**
        支付时间
     **/
    public $pay_time;

    /**
        卖家添加的备注
     **/
    public $seller_memo;

    /**
        子订单信息
     **/
    public $sub_distributor_order_models;

    /**
        传入订单ID查询返回该字段
     **/
    public $address_do;

    /**
        主订单创建时间
     **/
    public $gmt_create;

    /**
        主订单最后更新时间
     **/
    public $gmt_modified;


    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }

    public function getMain() : bool{
        return $this->main;
    }

    public function setMain(bool $main){
        $this->main = $main;
    }

    public function getDetail() : bool{
        return $this->detail;
    }

    public function setDetail(bool $detail){
        $this->detail = $detail;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getSellerMemo() : string{
        return $this->seller_memo;
    }

    public function setSellerMemo(string $sellerMemo){
        $this->seller_memo = $sellerMemo;
    }

    public function getSubDistributorOrderModels() : array{
        return $this->sub_distributor_order_models;
    }

    public function setSubDistributorOrderModels(array $subDistributorOrderModels){
        $this->sub_distributor_order_models = $subDistributorOrderModels;
    }

    public function getAddressDo() : TaobaoDaifaDistributorOrderQueryAddressDO{
        return $this->address_do;
    }

    public function setAddressDo(TaobaoDaifaDistributorOrderQueryAddressDO $addressDo){
        $this->address_do = $addressDo;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }


}

