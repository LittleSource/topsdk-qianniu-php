<?php
namespace Topsdk\Topapi\Ability302\Domain;

class TaobaoFuwuSkuGetArticleItemViewUnit {

    /**
        需要支付的价格，单位：元
     **/
    public $actual_price;

    /**
        用户是否可以购买
     **/
    public $can_sub;

    /**
        周期数，如1，3，6，12。对于周期型和周期计量型返回。
     **/
    public $cyc_num;

    /**
        1-年，2-月，3-日。对于周期型和周期计量型返回。
     **/
    public $cyc_unit;

    /**
        错误码
     **/
    public $error_code;

    /**
        错误文案
     **/
    public $error_msg;

    /**
        收费项目code
     **/
    public $item_code;

    /**
        收费项目名称
     **/
    public $item_name;

    /**
        原价，单位：元
     **/
    public $origin_price;

    /**
        优惠，单位：元
     **/
    public $prom_price;

    /**
        数量。对于周期计量型返回计量数。
     **/
    public $quantity;


    public function getActualPrice() : string{
        return $this->actual_price;
    }

    public function setActualPrice(string $actualPrice){
        $this->actual_price = $actualPrice;
    }

    public function getCanSub() : bool{
        return $this->can_sub;
    }

    public function setCanSub(bool $canSub){
        $this->can_sub = $canSub;
    }

    public function getCycNum() : int{
        return $this->cyc_num;
    }

    public function setCycNum(int $cycNum){
        $this->cyc_num = $cycNum;
    }

    public function getCycUnit() : int{
        return $this->cyc_unit;
    }

    public function setCycUnit(int $cycUnit){
        $this->cyc_unit = $cycUnit;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getItemCode() : string{
        return $this->item_code;
    }

    public function setItemCode(string $itemCode){
        $this->item_code = $itemCode;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getOriginPrice() : string{
        return $this->origin_price;
    }

    public function setOriginPrice(string $originPrice){
        $this->origin_price = $originPrice;
    }

    public function getPromPrice() : string{
        return $this->prom_price;
    }

    public function setPromPrice(string $promPrice){
        $this->prom_price = $promPrice;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }


}

