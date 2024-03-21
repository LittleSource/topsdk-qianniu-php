<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoVasOrderSearchArticleBizOrder {

    /**
        淘宝会员名
     **/
    public $nick;

    /**
        应用名称
     **/
    public $article_name;

    /**
        应用收费代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得该应用的收费代码
     **/
    public $article_code;

    /**
        商品模型名称
     **/
    public $article_item_name;

    /**
        收费项目代码，从合作伙伴后台（my.open.taobao.com）-收费管理-收费项目列表 能够获得收费项目代码
     **/
    public $item_code;

    /**
        订单创建时间（订购时间）
     **/
    public $create;

    /**
        订购周期  1表示年 ，2表示月，3表示天。
     **/
    public $order_cycle;

    /**
        订单类型，1=新订 2=续订 3=升级 4=后台赠送 5=后台自动续订 6=订单审核后生成订购关系（暂时用不到）
     **/
    public $biz_type;

    /**
        子订单号
     **/
    public $order_id;

    /**
        原价（单位为分）
     **/
    public $fee;

    /**
        优惠（单位为分）
     **/
    public $prom_fee;

    /**
        实付（单位为分）
     **/
    public $total_pay_fee;

    /**
        订购周期开始时间
     **/
    public $order_cycle_start;

    /**
        订购周期结束时间
     **/
    public $order_cycle_end;

    /**
        退款（单位为分；升级时，系统会将升级前老版本按照剩余订购天数退还剩余金额）
     **/
    public $refund_fee;

    /**
        订单号
     **/
    public $biz_order_id;

    /**
        activityCode
     **/
    public $activity_code;

    /**
        业务订单状态
     **/
    public $order_biz_status;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getArticleName() : string{
        return $this->article_name;
    }

    public function setArticleName(string $articleName){
        $this->article_name = $articleName;
    }

    public function getArticleCode() : string{
        return $this->article_code;
    }

    public function setArticleCode(string $articleCode){
        $this->article_code = $articleCode;
    }

    public function getArticleItemName() : string{
        return $this->article_item_name;
    }

    public function setArticleItemName(string $articleItemName){
        $this->article_item_name = $articleItemName;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getCreate() : string{
        return $this->create;
    }

    public function setCreate(string $create){
        $this->create = $create;
    }

    public function getOrderCycle() : string{
        return $this->order_cycle;
    }

    public function setOrderCycle(string $orderCycle){
        $this->order_cycle = $orderCycle;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getFee() : string{
        return $this->fee;
    }

    public function setFee(string $fee){
        $this->fee = $fee;
    }

    public function getPromFee() : string{
        return $this->prom_fee;
    }

    public function setPromFee(string $promFee){
        $this->prom_fee = $promFee;
    }

    public function getTotalPayFee() : string{
        return $this->total_pay_fee;
    }

    public function setTotalPayFee(string $totalPayFee){
        $this->total_pay_fee = $totalPayFee;
    }

    public function getOrderCycleStart() : string{
        return $this->order_cycle_start;
    }

    public function setOrderCycleStart(string $orderCycleStart){
        $this->order_cycle_start = $orderCycleStart;
    }

    public function getOrderCycleEnd() : string{
        return $this->order_cycle_end;
    }

    public function setOrderCycleEnd(string $orderCycleEnd){
        $this->order_cycle_end = $orderCycleEnd;
    }

    public function getRefundFee() : string{
        return $this->refund_fee;
    }

    public function setRefundFee(string $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getActivityCode() : string{
        return $this->activity_code;
    }

    public function setActivityCode(string $activityCode){
        $this->activity_code = $activityCode;
    }

    public function getOrderBizStatus() : string{
        return $this->order_biz_status;
    }

    public function setOrderBizStatus(string $orderBizStatus){
        $this->order_biz_status = $orderBizStatus;
    }


}

