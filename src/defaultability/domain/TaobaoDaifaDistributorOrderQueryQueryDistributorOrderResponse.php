<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorOrderQueryQueryDistributorOrderResponse {

    /**
        订单列表
     **/
    public $distributor_order_models;


    public function getDistributorOrderModels() : array{
        return $this->distributor_order_models;
    }

    public function setDistributorOrderModels(array $distributorOrderModels){
        $this->distributor_order_models = $distributorOrderModels;
    }


}

