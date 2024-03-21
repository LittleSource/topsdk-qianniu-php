<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaOrderDistributeDaifaScpOrderModel {

    /**
        货品SKU ID
     **/
    public $product_sku_id;

    /**
        供货商ID
     **/
    public $supplier_id;

    /**
        货品ID
     **/
    public $product_id;

    /**
        分销商ID
     **/
    public $distributor_id;

    /**
        货品规格
     **/
    public $product_sku_spec;

    /**
        订单备注，此字段不为空的话则会取淘宝订单上的卖家备注，即sellerMemo字段替代
     **/
    public $remark;

    /**
        代发数量
     **/
    public $product_count;

    /**
        淘宝主订单ID，主子一体订单 bizOrderId = parentId
     **/
    public $parent_id;

    /**
        货品名称
     **/
    public $product_name;

    /**
        订单ID
     **/
    public $biz_order_id;

    /**
        货品图片url
     **/
    public $product_pic_url;

    /**
        货品类型，用于校验防止重发之类；当传值为0时会校验所有代发订单产品数量和不超过订单的 buyAmount  0 - 主货品  1 - 赠品
     **/
    public $product_type;

    /**
        本次分单的商品数量，此参数默认值0，当此参数为0时会设置为对应淘宝子订单的buyAmount，举例：消费者购买了一箱可乐，供货商按12瓶发货，则这种情况下淘宝订单的购买数量为1，quality传递1，productType为0-主品，productCount=12，表示发12瓶可乐；如果是赠品情况下quality默认设置为1
     **/
    public $quality;


    public function getProductSkuId() : string{
        return $this->product_sku_id;
    }

    public function setProductSkuId(string $productSkuId){
        $this->product_sku_id = $productSkuId;
    }

    public function getSupplierId() : int{
        return $this->supplier_id;
    }

    public function setSupplierId(int $supplierId){
        $this->supplier_id = $supplierId;
    }

    public function getProductId() : string{
        return $this->product_id;
    }

    public function setProductId(string $productId){
        $this->product_id = $productId;
    }

    public function getDistributorId() : int{
        return $this->distributor_id;
    }

    public function setDistributorId(int $distributorId){
        $this->distributor_id = $distributorId;
    }

    public function getProductSkuSpec() : string{
        return $this->product_sku_spec;
    }

    public function setProductSkuSpec(string $productSkuSpec){
        $this->product_sku_spec = $productSkuSpec;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getProductCount() : int{
        return $this->product_count;
    }

    public function setProductCount(int $productCount){
        $this->product_count = $productCount;
    }

    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }

    public function getProductName() : string{
        return $this->product_name;
    }

    public function setProductName(string $productName){
        $this->product_name = $productName;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
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

    public function getQuality() : int{
        return $this->quality;
    }

    public function setQuality(int $quality){
        $this->quality = $quality;
    }


}

