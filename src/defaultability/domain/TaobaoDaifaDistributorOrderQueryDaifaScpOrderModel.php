<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaDistributorOrderQueryDaifaScpOrderModel {

    /**
        代发单据id，已分配订单存在
     **/
    public $scp_order_id;

    /**
        分销商id
     **/
    public $distributor_id;

    /**
        供货商id
     **/
    public $supplier_id;

    /**
        分单时的备注，分单无备注则去卖家在淘宝订单上的白术sellerMemo
     **/
    public $remark;

    /**
        货品id
     **/
    public $product_id;

    /**
        货品名称
     **/
    public $product_name;

    /**
        货品数量
     **/
    public $product_count;

    /**
        货品skuId
     **/
    public $product_sku_id;

    /**
        货品sku规格
     **/
    public $product_sku_spec;

    /**
        货品图片
     **/
    public $product_pic_url;

    /**
        0 - 主货品      * 1 - 赠品
     **/
    public $product_type;

    /**
        供货商在平台侧名称
     **/
    public $supplier_name;

    /**
        订单分配时间
     **/
    public $distribute_time;

    /**
        代发分配状态,INIT-未分配，DISTRIBUTE-已分配，CONSIGN-已回传，CANCEL-取消分配
     **/
    public $distribute_status;

    /**
        发货时间，当前发货时间与父订单、子订单发货时间一致
     **/
    public $consign_time;

    /**
        代发单据取消分单原因
     **/
    public $cancel_reason;

    /**
        本次分单商品数量
     **/
    public $quality;

    /**
        本次分单指定的商品sku，注意订单如果修改过sku，这个字段可能与子订单的skuId不一致
     **/
    public $sku_id;


    public function getScpOrderId() : int{
        return $this->scp_order_id;
    }

    public function setScpOrderId(int $scpOrderId){
        $this->scp_order_id = $scpOrderId;
    }

    public function getDistributorId() : int{
        return $this->distributor_id;
    }

    public function setDistributorId(int $distributorId){
        $this->distributor_id = $distributorId;
    }

    public function getSupplierId() : int{
        return $this->supplier_id;
    }

    public function setSupplierId(int $supplierId){
        $this->supplier_id = $supplierId;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getProductId() : string{
        return $this->product_id;
    }

    public function setProductId(string $productId){
        $this->product_id = $productId;
    }

    public function getProductName() : string{
        return $this->product_name;
    }

    public function setProductName(string $productName){
        $this->product_name = $productName;
    }

    public function getProductCount() : int{
        return $this->product_count;
    }

    public function setProductCount(int $productCount){
        $this->product_count = $productCount;
    }

    public function getProductSkuId() : string{
        return $this->product_sku_id;
    }

    public function setProductSkuId(string $productSkuId){
        $this->product_sku_id = $productSkuId;
    }

    public function getProductSkuSpec() : string{
        return $this->product_sku_spec;
    }

    public function setProductSkuSpec(string $productSkuSpec){
        $this->product_sku_spec = $productSkuSpec;
    }

    public function getProductPicUrl() : string{
        return $this->product_pic_url;
    }

    public function setProductPicUrl(string $productPicUrl){
        $this->product_pic_url = $productPicUrl;
    }

    public function getProductType() : int{
        return $this->product_type;
    }

    public function setProductType(int $productType){
        $this->product_type = $productType;
    }

    public function getSupplierName() : string{
        return $this->supplier_name;
    }

    public function setSupplierName(string $supplierName){
        $this->supplier_name = $supplierName;
    }

    public function getDistributeTime() : string{
        return $this->distribute_time;
    }

    public function setDistributeTime(string $distributeTime){
        $this->distribute_time = $distributeTime;
    }

    public function getDistributeStatus() : string{
        return $this->distribute_status;
    }

    public function setDistributeStatus(string $distributeStatus){
        $this->distribute_status = $distributeStatus;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getCancelReason() : string{
        return $this->cancel_reason;
    }

    public function setCancelReason(string $cancelReason){
        $this->cancel_reason = $cancelReason;
    }

    public function getQuality() : int{
        return $this->quality;
    }

    public function setQuality(int $quality){
        $this->quality = $quality;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }


}

