<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierOrderQueryQuerySupplierOrderResponse {

    /**
        供货商ID
     **/
    public $supplier_id;

    /**
        分销订单列表
     **/
    public $scp_order_models;


    public function getSupplierId() : int{
        return $this->supplier_id;
    }

    public function setSupplierId(int $supplierId){
        $this->supplier_id = $supplierId;
    }

    public function getScpOrderModels() : array{
        return $this->scp_order_models;
    }

    public function setScpOrderModels(array $scpOrderModels){
        $this->scp_order_models = $scpOrderModels;
    }


}

