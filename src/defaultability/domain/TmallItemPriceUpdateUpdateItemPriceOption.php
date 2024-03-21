<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TmallItemPriceUpdateUpdateItemPriceOption {

    /**
        是否忽略涉嫌炒信警告信息
     **/
    public $ignore_fake_credit;

    /**
        目标币种，非必填，仅支持天猫国际官网同购商家将外币价格修改成人民币价格时使用
     **/
    public $currency_type;


    public function getIgnoreFakeCredit() : bool{
        return $this->ignore_fake_credit;
    }

    public function setIgnoreFakeCredit(bool $ignoreFakeCredit){
        $this->ignore_fake_credit = $ignoreFakeCredit;
    }

    public function getCurrencyType() : string{
        return $this->currency_type;
    }

    public function setCurrencyType(string $currencyType){
        $this->currency_type = $currencyType;
    }


}

