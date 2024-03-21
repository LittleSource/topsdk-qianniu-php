<?php
namespace Topsdk\Topapi\Ability147\Domain;

class TmallItemHscodeAuditResultsQueryHscodeAuditInfo {

    /**
        商品ID
     **/
    public $item_id;

    /**
        hscode信息当前审核状态的具体说明
     **/
    public $reason;

    /**
        商品或SKU使用的HS海关代码
     **/
    public $hscode;

    /**
        SKU的ID
     **/
    public $sku_id;

    /**
        hscode信息当前审核状态，HISTORY_ITEM：历史已上架商品，REJECT：审核未通过，AUDITING：审核中，PASS：审核通过，ERROR：获取审核状态异常
     **/
    public $status;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getHscode() : string{
        return $this->hscode;
    }

    public function setHscode(string $hscode){
        $this->hscode = $hscode;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

