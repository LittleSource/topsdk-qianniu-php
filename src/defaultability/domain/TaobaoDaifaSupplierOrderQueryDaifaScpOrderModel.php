<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoDaifaSupplierOrderQueryDaifaScpOrderModel {

    /**
        代发订单ID，获取电子面单接口tid使用即可通过密文OAID获取面单号
     **/
    public $scp_order_id;

    /**
        订单ID
     **/
    public $biz_order_id;

    /**
        淘宝主订单ID，主子一体订单 bizOrderId = parentId
     **/
    public $parent_id;

    /**
        是否是主订单
     **/
    public $main;

    /**
        是否是子订单
     **/
    public $detail;

    /**
        分销商ID
     **/
    public $distributor_id;

    /**
        供货商ID
     **/
    public $supplier_id;

    /**
        订单备注信息 如果分单时没有新设置描述，则取得是淘宝订单上的sellerMemo
     **/
    public $remark;

    /**
        货品ID
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
        货品SKU ID
     **/
    public $product_sku_id;

    /**
        货品规格
     **/
    public $product_sku_spec;

    /**
        货品图片名称
     **/
    public $product_pic_url;

    /**
        0 - 主货品          * 1 - 赠品
     **/
    public $product_type;

    /**
        WAIT_SELLER_SEND_GOODS(WAIT_SELLER_SEND_GOODS,等待卖家发货), SELLER_CONSIGNED_PART(SELLER_CONSIGNED_PART,卖家部分发货), WAIT_BUYER_CONFIRM_GOODS(WAIT_BUYER_CONFIRM_GOODS,卖家已发货，等待买家确认收货), TRADE_FINISHED(TRADE_FINISHED,交易完成), TRADE_CLOSED(TRADE_CLOSED,交易关闭),
     **/
    public $order_status;

    /**
        DISTRIBUTE(1,已分配), CONSIGN(5,已回传), CANCEL(6,取消分配)
     **/
    public $distribute_status;

    /**
        商品ID
     **/
    public $auction_id;

    /**
        商品图片url
     **/
    public $auction_pict_url;

    /**
        商品名称
     **/
    public $auction_name;

    /**
        淘宝订单购买数量
     **/
    public $quality;

    /**
        发货时间
     **/
    public $consign_time;

    /**
        支付时间
     **/
    public $pay_time;

    /**
        分配时间
     **/
    public $distribute_time;

    /**
        传入scpOrderId返回该字段
     **/
    public $address_do;

    /**
        NO_REFUND(NO_REFUND,无退款), WAIT_SELLER_AGREE(REFUND_CREATE,买家已经申请退款，等待卖家同意), WAIT_BUYER_RETURN_GOODS(WAIT_BUYER_RETURN_GOODS,卖家已经同意退款，等待买家退货), WAIT_SELLER_CONFIRM_GOODS(WAIT_SELLER_CONFIRM_GOODS,买家已经退货，等待卖家确认收货), SELLER_REFUSE_BUYER(SELLER_REFUSE_BUYER,卖家拒绝退款), CLOSED(CLOSED,退款关闭), SUCCESS(SUCCESS,退款成功),
     **/
    public $refund_status;

    /**
        淘宝订单sku id
     **/
    public $sku_id;

    /**
        淘宝订单sku描述
     **/
    public $sku_spec;

    /**
        淘宝订单商品outSkuId
     **/
    public $out_sku_id;

    /**
        交易商品对应的类目ID
     **/
    public $cid;


    public function getScpOrderId() : int{
        return $this->scp_order_id;
    }

    public function setScpOrderId(int $scpOrderId){
        $this->scp_order_id = $scpOrderId;
    }

    public function getBizOrderId() : string{
        return $this->biz_order_id;
    }

    public function setBizOrderId(string $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }

    public function getParentId() : string{
        return $this->parent_id;
    }

    public function setParentId(string $parentId){
        $this->parent_id = $parentId;
    }

    public function getMain() : bool{
        return $this->main;
    }

    public function setMain(bool $main){
        $this->main = $main;
    }

    public function getDetail() : bool{
        return $this->detail;
    }

    public function setDetail(bool $detail){
        $this->detail = $detail;
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

    public function getProductType() : string{
        return $this->product_type;
    }

    public function setProductType(string $productType){
        $this->product_type = $productType;
    }

    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getDistributeStatus() : string{
        return $this->distribute_status;
    }

    public function setDistributeStatus(string $distributeStatus){
        $this->distribute_status = $distributeStatus;
    }

    public function getAuctionId() : string{
        return $this->auction_id;
    }

    public function setAuctionId(string $auctionId){
        $this->auction_id = $auctionId;
    }

    public function getAuctionPictUrl() : string{
        return $this->auction_pict_url;
    }

    public function setAuctionPictUrl(string $auctionPictUrl){
        $this->auction_pict_url = $auctionPictUrl;
    }

    public function getAuctionName() : string{
        return $this->auction_name;
    }

    public function setAuctionName(string $auctionName){
        $this->auction_name = $auctionName;
    }

    public function getQuality() : int{
        return $this->quality;
    }

    public function setQuality(int $quality){
        $this->quality = $quality;
    }

    public function getConsignTime() : string{
        return $this->consign_time;
    }

    public function setConsignTime(string $consignTime){
        $this->consign_time = $consignTime;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getDistributeTime() : string{
        return $this->distribute_time;
    }

    public function setDistributeTime(string $distributeTime){
        $this->distribute_time = $distributeTime;
    }

    public function getAddressDo() : TaobaoDaifaSupplierOrderQueryAddressDO{
        return $this->address_do;
    }

    public function setAddressDo(TaobaoDaifaSupplierOrderQueryAddressDO $addressDo){
        $this->address_do = $addressDo;
    }

    public function getRefundStatus() : string{
        return $this->refund_status;
    }

    public function setRefundStatus(string $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getSkuSpec() : string{
        return $this->sku_spec;
    }

    public function setSkuSpec(string $skuSpec){
        $this->sku_spec = $skuSpec;
    }

    public function getOutSkuId() : string{
        return $this->out_sku_id;
    }

    public function setOutSkuId(string $outSkuId){
        $this->out_sku_id = $outSkuId;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }


}

