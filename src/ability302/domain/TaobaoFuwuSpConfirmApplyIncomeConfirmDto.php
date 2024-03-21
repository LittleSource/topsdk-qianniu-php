<?php
namespace Topsdk\Topapi\Ability302\Domain;

class TaobaoFuwuSpConfirmApplyIncomeConfirmDto {

    /**
        appkey
     **/
    public $appkey;

    /**
        确认扩展信息
     **/
    public $extend;

    /**
        确认金额
     **/
    public $fee;

    /**
        卖家nick
     **/
    public $nick;

    /**
        服务市场有效订单ID
     **/
    public $order_id;

    /**
        外部确认账单ID
     **/
    public $out_confirm_id;

    /**
        外部订单ID
     **/
    public $out_order_id;


    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getExtend() : string{
        return $this->extend;
    }

    public function setExtend(string $extend){
        $this->extend = $extend;
    }

    public function getFee() : int{
        return $this->fee;
    }

    public function setFee(int $fee){
        $this->fee = $fee;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getOrderId() : int{
        return $this->order_id;
    }

    public function setOrderId(int $orderId){
        $this->order_id = $orderId;
    }

    public function getOutConfirmId() : string{
        return $this->out_confirm_id;
    }

    public function setOutConfirmId(string $outConfirmId){
        $this->out_confirm_id = $outConfirmId;
    }

    public function getOutOrderId() : string{
        return $this->out_order_id;
    }

    public function setOutOrderId(string $outOrderId){
        $this->out_order_id = $outOrderId;
    }


}

