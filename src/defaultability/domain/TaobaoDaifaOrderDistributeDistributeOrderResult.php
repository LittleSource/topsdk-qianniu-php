<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaOrderDistributeDistributeOrderResult {

    /**
        主订单id
     **/
    public $biz_order_id;

    /**
        业务对象
     **/
    public $daifa_scp_order_models;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getDaifaScpOrderModels() : array{
        return $this->daifa_scp_order_models;
    }

    public function setDaifaScpOrderModels(array $daifaScpOrderModels){
        $this->daifa_scp_order_models = $daifaScpOrderModels;
    }


}

