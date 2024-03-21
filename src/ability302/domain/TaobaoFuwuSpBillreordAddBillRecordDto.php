<?php
namespace Topsdk\Topapi\Ability302\Domain;

class TaobaoFuwuSpBillreordAddBillRecordDto {

    /**
        appkey
     **/
    public $appkey;

    /**
        备用字段
     **/
    public $extend1;

    /**
        备用字段
     **/
    public $extend10;

    /**
        备用字段
     **/
    public $extend2;

    /**
        备用字段
     **/
    public $extend3;

    /**
        备用字段
     **/
    public $extend4;

    /**
        备用字段
     **/
    public $extend5;

    /**
        备用字段
     **/
    public $extend6;

    /**
        备用字段
     **/
    public $extend7;

    /**
        备用字段
     **/
    public $extend8;

    /**
        备用字段
     **/
    public $extend9;

    /**
        金额
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

    /**
        记录产生时间
     **/
    public $start_date;

    /**
        状态：1成功、2失败
     **/
    public $status;

    /**
        目标号码
     **/
    public $target_no;

    /**
        账单分类：1短信
     **/
    public $type;


    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getExtend1() : string{
        return $this->extend1;
    }

    public function setExtend1(string $extend1){
        $this->extend1 = $extend1;
    }

    public function getExtend10() : string{
        return $this->extend10;
    }

    public function setExtend10(string $extend10){
        $this->extend10 = $extend10;
    }

    public function getExtend2() : string{
        return $this->extend2;
    }

    public function setExtend2(string $extend2){
        $this->extend2 = $extend2;
    }

    public function getExtend3() : string{
        return $this->extend3;
    }

    public function setExtend3(string $extend3){
        $this->extend3 = $extend3;
    }

    public function getExtend4() : string{
        return $this->extend4;
    }

    public function setExtend4(string $extend4){
        $this->extend4 = $extend4;
    }

    public function getExtend5() : string{
        return $this->extend5;
    }

    public function setExtend5(string $extend5){
        $this->extend5 = $extend5;
    }

    public function getExtend6() : string{
        return $this->extend6;
    }

    public function setExtend6(string $extend6){
        $this->extend6 = $extend6;
    }

    public function getExtend7() : string{
        return $this->extend7;
    }

    public function setExtend7(string $extend7){
        $this->extend7 = $extend7;
    }

    public function getExtend8() : string{
        return $this->extend8;
    }

    public function setExtend8(string $extend8){
        $this->extend8 = $extend8;
    }

    public function getExtend9() : string{
        return $this->extend9;
    }

    public function setExtend9(string $extend9){
        $this->extend9 = $extend9;
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

    public function getStartDate() : string{
        return $this->start_date;
    }

    public function setStartDate(string $startDate){
        $this->start_date = $startDate;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTargetNo() : string{
        return $this->target_no;
    }

    public function setTargetNo(string $targetNo){
        $this->target_no = $targetNo;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

